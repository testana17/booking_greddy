<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\Packages;
use App\Models\Payments;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BookingDetail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    
public function cektanggal($date)
{
    $existingBookings = Booking::where('booking_date', $date)
        ->whereIn('status_payment', ['complete', 'partial', 'paid'])
        ->with('package')
        ->get();

    // Prioritas paket (dari dampak paling tinggi)
    $priorityOrder = [
        'exclusive' => [
            'Prewedding Neusweat',
            'Traditional Neusweat',
            'Before Neusweat',
            'Wedding Neudeluxe'
        ],
        'restricted' => [
            'Wedding Neusweat',
            'Prewedding Neubasic',
            'Traditional Neubasic',
            'Before Neubasic'
        ]
    ];

    $restrictions = [];
    $hasExclusiveBooking = false;
    $hasRestrictedBooking = false;

    /**
     * =====================================================
     * GREEDY ALGORITHM STRATEGY:
     * 1. Lakukan proses PENGURUTAN berdasarkan prioritas:
     *    - Paket eksklusif dicek lebih dulu karena dampaknya tertinggi
     * 2. Optimasi lokal:
     *    - Ambil keputusan optimal lokal (paket eksklusif) lebih dulu
     *    - Jika ditemukan, langsung berhenti (greedy stop)
     * =====================================================
     */

    // Urutkan bookings sesuai prioritas (exclusive > restricted > others)
    $sortedBookings = $existingBookings->sortBy(function ($booking) use ($priorityOrder) {
        $name = $booking->package->name;
        if (in_array($name, $priorityOrder['exclusive'])) return 1;
        if (in_array($name, $priorityOrder['restricted'])) return 2;
        return 3; // lower priority
    });

    foreach ($sortedBookings as $booking) {
        $packageName = $booking->package->name;

        if (in_array($packageName, $priorityOrder['exclusive'])) {
            $hasExclusiveBooking = true;
            $restrictions[] = [
                'package_id' => $booking->package_id,
                'package_name' => $packageName,
                'restriction_type' => 'exclusive',
                'status' => $booking->status_payment
            ];
            break; // greedy stop: setelah solusi lokal terbaik ditemukan
        }

        if (in_array($packageName, $priorityOrder['restricted'])) {
            $hasRestrictedBooking = true;
            $restrictions[] = [
                'package_id' => $booking->package_id,
                'package_name' => $packageName,
                'restriction_type' => 'restricted',
                'status' => $booking->status_payment
            ];
            // tidak break agar bisa dapat semua yang restricted
        }
    }

    // Ambil semua paket untuk dibandingkan
    $allPackages = Packages::all();
    $disabledPackages = [];
    $onlyPhotoAllowed = false;

    if ($hasExclusiveBooking) {
        // Jika paket eksklusif dipesan → nonaktifkan semua paket lain
        foreach ($allPackages as $package) {
            if (!$existingBookings->contains('package_id', $package->id)) {
                $disabledPackages[] = [
                    'package_id' => $package->id,
                    'reason' => 'exclusive_booked'
                ];
            }
        }
    } elseif ($hasRestrictedBooking) {
        // Jika hanya paket terbatas dipesan → hanya Photo Only yang diizinkan
        $onlyPhotoAllowed = true;
        foreach ($allPackages as $package) {
            if ($package->name !== 'Photo Only' && !$existingBookings->contains('package_id', $package->id)) {
                $disabledPackages[] = [
                    'package_id' => $package->id,
                    'reason' => 'only_photo_allowed'
                ];
            }
        }
    }

    return response()->json([
        'is_available' => $existingBookings->isEmpty(),
        'has_exclusive_booking' => $hasExclusiveBooking,
        'has_restricted_booking' => $hasRestrictedBooking,
        'only_photo_allowed' => $onlyPhotoAllowed,
        'existing_bookings' => $existingBookings->map(function ($booking) {
            return [
                'package_id' => $booking->package_id,
                'package_name' => $booking->package->name,
                'status' => $booking->status_payment,
            ];
        }),
        'restrictions' => $restrictions,
        'disabled_packages' => $disabledPackages,
    ]);
}
   
    public function checkout(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required|string|max:255',
                'phone_number' => 'required|string|max:20',
                'instagram_username' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'event_date' => 'required|date',
                'event_time' => 'required',
                'package' => 'required|string',
                'event_address' => 'required|string',
                'payment_type' => 'required|in:full,deposit',
                'payment_amount' => 'required|numeric|min:0',
            ]);

            $packageValue = $request->package;
            $package = null;

            if (is_numeric($packageValue)) {
                $package = Packages::where('id', $packageValue)->first();
            } else {
                $package = Packages::where('name', $packageValue)->first();
            }

            if (!$package) {
                return response()->json(['error' => 'Invalid package selected'], 400);
            }

            $invoice = 'INV-PHT-' . strtoupper(Str::random(8));

            $bookingExists = Booking::where('invoice', $invoice)->first();

            if ($bookingExists) {
                $payment_info = $bookingExists->payment_info ? json_decode($bookingExists->payment_info, true) : null;

                if ($payment_info && isset($payment_info['token'])) {
                    return response()->json(['token' => $payment_info['token']]);
                }
            } else {
                $paymentAmount = (int) $request->payment_amount;
                $isDeposit = $request->payment_type === 'deposit';
                $totalPrice = $package->price;

                $remainingAmount = $isDeposit ? $totalPrice - $paymentAmount : 0;

                $paymentStatus = $isDeposit ? 'partial' : 'pending';

                $booking = new Booking();
                $booking->id = Str::uuid();
                $booking->invoice = $invoice;
                $booking->name = $request->full_name;
                $booking->phone_number = $request->phone_number;
                $booking->instagram = $request->instagram_username;
                $booking->email = $request->email;
                $booking->package_id = $package->id;
                $booking->booking_date = date('Y-m-d', strtotime($request->event_date));
                $booking->booking_time = date('H:i:s', strtotime($request->event_time));
                $booking->event_address = $request->event_address;
                $booking->available = date('Y-m-d H:i:s', strtotime($request->event_date . ' ' . $request->event_time));
                $booking->status_payment = $paymentStatus;
                $booking->total_price = $totalPrice;
                $booking->deposit_amount = $isDeposit ? $paymentAmount : null;
                $booking->remaining_amount = $remainingAmount;
                $booking->payment_type = json_encode(['type' => $request->payment_type]);
                $booking->save();

                $bookingDetail = new BookingDetail();
                $bookingDetail->id = Str::uuid();
                $bookingDetail->booking_id = $booking->id;
                $bookingDetail->packages_id = $package->id;
                $bookingDetail->price = $package->price;
                $bookingDetail->quantity = 1;
                $bookingDetail->save();

                $payment = new Payments();
                $payment->id = Str::uuid();
                $payment->booking_id = $booking->id;
                $payment->payment_type = $isDeposit ? 'deposit' : 'full';
                $payment->amount = $paymentAmount;
                $payment->status = 'pending';
                $payment->save();

                $itemName = $package->name;
                if ($isDeposit) {
                    $depositPercentage = round(($paymentAmount / $totalPrice) * 100);
                    $itemName = "Deposit {$depositPercentage}% for {$package->name}";
                }

                $data = [
                    'enabled_payments' => ['permata_va', 'bca_va', 'bni_va', 'bri_va', 'other_va', 'gopay', 'indomaret', 'shopeepay', 'uob_ezpay', 'other_qris'],
                    'transaction_details' => [
                        'gross_amount' => $paymentAmount,
                        'order_id' => $booking->invoice,
                    ],
                    'customer_details' => [
                        'email' => $booking->email,
                        'name' => $booking->name,
                        'phone' => $booking->phone_number,
                    ],
                    'expiry' => [
                        'start_time' => now()->format('Y-m-d H:i:s T'),
                        'unit' => 'days',
                        'duration' => 7,
                    ],
                    'item_details' => [
                        [
                            'id' => $package->id,
                            'price' => $paymentAmount,
                            'quantity' => 1,
                            'name' => $itemName,
                        ],
                    ],
                ];

                $headers = [
                    'Authorization' => 'Basic ' . base64_encode(env('MIDTRANS_SERVER_KEY') . ':'),
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ];

                $url = env('MIDTRANS_IS_PRODUCTION', false) ? 'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

                $response = Http::withHeaders($headers)->post($url, $data);

                if (!$response->successful()) {
                    Log::error('Midtrans API error', ['response' => $response->body()]);
                    return response()->json(['error' => 'Payment gateway error'], 500);
                }

                $responseJson = $response->json();

                $booking->payment_info = json_encode([
                    'token' => $responseJson['token'],
                    'redirect_url' => $responseJson['redirect_url'],
                    'address' => $request->event_address,
                    'payment_type' => $request->payment_type,
                    'payment_amount' => $paymentAmount,
                    'remaining_amount' => $remainingAmount,
                ]);
                $booking->save();

                $payment->transaction_id = $booking->invoice;
                $payment->payment_details = json_encode([
                    'token' => $responseJson['token'],
                    'redirect_url' => $responseJson['redirect_url'],
                ]);
                $payment->save();

                try {
                    Mail::send(
                        'notif',
                        [
                            'booking' => $booking,
                            'payment_url' => $responseJson['redirect_url'],
                            'expiry_days' => 7,
                            'package' => $package,
                            'is_deposit' => $isDeposit,
                            'payment_amount' => $paymentAmount,
                            'remaining_amount' => $remainingAmount,
                        ],
                        function ($message) use ($booking) {
                            $message->to($booking->email)->subject('Payment Instruction for Your Photography Session');
                        },
                    );
                } catch (\Exception $e) {
                    Log::error('Email sending error: ' . $e->getMessage());
                }

                return response()->json(['token' => $responseJson['token']]);
            }
        } catch (\Exception $e) {
            Log::error('Checkout error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function callback(Request $request)
    {
        $notification = json_decode($request->getContent(), true);

        // Log::info('Midtrans notification received', $notification);

        $booking = Booking::where('invoice', $notification['order_id'])->first();

        if (!$booking) {

            if (strpos($notification['order_id'], 'REM-') === 0) {
                $originalInvoice = str_replace('REM-', '', $notification['order_id']);
                $booking = Booking::where('invoice', $originalInvoice)->first();

                if (!$booking) {
                    return response()->json(['error' => 'Booking not found'], 404);
                }
            } else {
                return response()->json(['error' => 'Booking not found'], 404);
            }
        }


        $orderId = $notification['order_id'];
        $statusCode = $notification['status_code'];
        $grossAmount = $notification['gross_amount'];
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $signature_key = hash('sha512', $orderId . $statusCode . $grossAmount . $serverKey);

        if ($notification['signature_key'] != $signature_key) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        $transaction_status = $notification['transaction_status'];
        $payment_type = json_decode($booking->payment_type, true);
        $payment_info = json_decode($booking->payment_info, true);
        $isRemainingPayment = strpos($notification['order_id'], 'REM-') === 0;

        if ($isRemainingPayment) {
            $payment = Payments::where('booking_id', $booking->id)->where('transaction_id', $notification['order_id'])->where('payment_type', 'remaining')->first();

            if (!$payment) {
                $payment = new Payments();
                $payment->id = Str::uuid();
                $payment->booking_id = $booking->id;
                $payment->payment_type = 'remaining';
                $payment->amount = $grossAmount;
                $payment->transaction_id = $notification['order_id'];
                $payment->status = $transaction_status;
                $payment->payment_details = json_encode($notification);
                $payment->save();
            } else {
                $payment->status = $transaction_status;
                $payment->payment_details = json_encode($notification);
                $payment->save();
            }
        } else {
            $payment = Payments::where('booking_id', $booking->id)->where('transaction_id', $notification['order_id'])->first();

            if (!$payment) {
                $payment = new Payments();
                $payment->id = Str::uuid();
                $payment->booking_id = $booking->id;
                $payment->payment_type = $payment_type['type'];
                $payment->amount = $grossAmount;
                $payment->transaction_id = $notification['order_id'];
                $payment->status = $transaction_status;
                $payment->payment_details = json_encode($notification);
                $payment->save();
            } else {
                $payment->status = $transaction_status;
                $payment->payment_details = json_encode($notification);
                $payment->save();
            }
        }

        if ($transaction_status == 'settlement' || $transaction_status == 'capture') {

            $booking->succeeded_at = $notification['settlement_time'] ?? now();
            $package = Packages::find($booking->package_id);

            if ($isRemainingPayment) {

                $booking->status_payment = 'complete';
                $booking->full_payment_at = now();
                $booking->remaining_amount = 0;

                try {
                    Mail::send(
                        'notifsuccess',
                        [
                            'booking' => $booking,
                            'package' => $package,
                            'payment_details' => $payment_type,
                            'is_deposit' => false,
                            'is_remaining' => true,
                            'payment_amount' => $grossAmount,
                            'remaining_amount' => 0,
                        ],
                        function ($message) use ($booking) {
                            $message->to($booking->email)->subject('Remaining Payment Successful - Photography Session Confirmed');
                        },
                    );
                } catch (\Exception $e) {
                    // Log::error('Remaining payment email error: ' . $e->getMessage());
                }
            } elseif ($payment_type['type'] == 'deposit') {
                // This was a deposit payment
                $booking->status_payment = $booking->remaining_amount > 0 ? 'partial' : 'complete';

                try {

                    $remainingInvoice = 'REM-' . $booking->invoice;

                    if ($booking->remaining_amount > 0) {
                        $remainingData = [
                            'enabled_payments' => ['permata_va', 'bca_va', 'bni_va', 'bri_va', 'other_va', 'gopay', 'indomaret', 'shopeepay', 'uob_ezpay', 'other_qris'],
                            'transaction_details' => [
                                'gross_amount' => $booking->remaining_amount,
                                'order_id' => $remainingInvoice,
                            ],
                            'customer_details' => [
                                'email' => $booking->email,
                                'name' => $booking->name,
                                'phone' => $booking->phone_number,
                            ],
                            'expiry' => [
                                'start_time' => now()->format('Y-m-d H:i:s T'),
                                'unit' => 'days',
                                'duration' => 30,
                            ],
                            'item_details' => [
                                [
                                    'id' => $booking->package_id,
                                    'price' => $booking->remaining_amount,
                                    'quantity' => 1,
                                    'name' => 'Remaining Payment for ' . $package->name,
                                ],
                            ],
                        ];

                        $headers = [
                            'Authorization' => 'Basic ' . base64_encode(env('MIDTRANS_SERVER_KEY') . ':'),
                            'Accept' => 'application/json',
                            'Content-Type' => 'application/json',
                        ];

                        $url = env('MIDTRANS_IS_PRODUCTION', false) ? 'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

                        $response = Http::withHeaders($headers)->post($url, $remainingData);

                        if ($response->successful()) {
                            $responseJson = $response->json();

                            $remainingPayment = new Payments();
                            $remainingPayment->id = Str::uuid();
                            $remainingPayment->booking_id = $booking->id;
                            $remainingPayment->payment_type = 'remaining';
                            $remainingPayment->amount = $booking->remaining_amount;
                            $remainingPayment->transaction_id = $remainingInvoice;
                            $remainingPayment->status = 'pending';
                            $remainingPayment->payment_details = json_encode([
                                'token' => $responseJson['token'],
                                'redirect_url' => $responseJson['redirect_url'],
                            ]);
                            $remainingPayment->save();

                            $currentPaymentInfo = json_decode($booking->payment_info, true) ?? [];
                            $currentPaymentInfo['remaining_payment'] = [
                                'invoice' => $remainingInvoice,
                                'token' => $responseJson['token'],
                                'redirect_url' => $responseJson['redirect_url'],
                            ];
                            $booking->payment_info = json_encode($currentPaymentInfo);

                            Mail::send(
                                'notifsuccess',
                                [
                                    'booking' => $booking,
                                    'package' => $package,
                                    'payment_details' => $payment_type,
                                    'is_deposit' => true,
                                    'remaining_amount' => $booking->remaining_amount,
                                    'remaining_payment_url' => $responseJson['redirect_url'],
                                ],
                                function ($message) use ($booking) {
                                    $message->to($booking->email)->subject('Deposit Payment Successful - Complete Your Photography Booking');
                                },
                            );
                        } else {
                            // Log::error('Failed to create remaining payment', ['response' => $response->body()]);

                            Mail::send(
                                'notifsuccess',
                                [
                                    'booking' => $booking,
                                    'package' => $package,
                                    'payment_details' => $payment_type,
                                    'is_deposit' => true,
                                    'remaining_amount' => $booking->remaining_amount,
                                ],
                                function ($message) use ($booking) {
                                    $message->to($booking->email)->subject('Deposit Payment Successful - Photography Session Booking');
                                },
                            );
                        }
                    } else {

                        Mail::send(
                            'notifsuccess',
                            [
                                'booking' => $booking,
                                'package' => $package,
                                'payment_details' => $payment_type,
                                'is_deposit' => true,
                                'remaining_amount' => 0,
                            ],
                            function ($message) use ($booking) {
                                $message->to($booking->email)->subject('Payment Successful - Photography Session Confirmed');
                            },
                        );
                    }
                } catch (\Exception $e) {
                    Log::error('Deposit payment email error: ' . $e->getMessage());
                }
            } else {

                $booking->status_payment = 'complete';
                $booking->full_payment_at = now();


                try {
                    Mail::send(
                        'notifsuccess',
                        [
                            'booking' => $booking,
                            'package' => $package,
                            'payment_details' => $payment_type,
                            'is_deposit' => false,
                        ],
                        function ($message) use ($booking) {
                            $message->to($booking->email)->subject('Payment Successful - Photography Session Confirmed');
                        },
                    );
                } catch (\Exception $e) {
                    Log::error('Full payment email error: ' . $e->getMessage());
                }
            }
        } elseif ($transaction_status == 'pending') {

            $booking->status_payment = 'pending';
        } elseif (in_array($transaction_status, ['deny', 'cancel', 'expire'])) {

            $booking->status_payment = 'failed';


            try {
                $package = Packages::find($booking->package_id);
                Mail::send(
                    'notiffailed',
                    [
                        'booking' => $booking,
                        'package' => $package,
                        'payment_details' => $payment_type,
                        'transaction_status' => $transaction_status,
                    ],
                    function ($message) use ($booking, $transaction_status) {
                        $message->to($booking->email)->subject('Payment ' . ucfirst($transaction_status) . ' - Photography Session Booking');
                    },
                );
            } catch (\Exception $e) {
                Log::error('Failed payment email error: ' . $e->getMessage());
            }
        }


        $booking->payment_type = json_encode([
            'type' => $payment_type['type'],
            'transaction_id' => $notification['transaction_id'] ?? null,
            'payment_code' => $notification['payment_code'] ?? null,
            'va_numbers' => $notification['va_numbers'] ?? null,
            'pdf_url' => $notification['pdf_url'] ?? null,
        ]);

        $booking->save();

        return response()->json(['message' => 'Booking updated successfully']);
    }

    public function success(Request $request)
    {
        $booking = Booking::where('invoice', $request->query('id'))->firstOrFail();
        return view('success', compact('booking'));
    }

    public function pending(Request $request)
    {
        $booking = Booking::findOrFail($request->id);
        return view('booking.pending', compact('booking'));
    }

    public function failed(Request $request)
    {
        $booking = Booking::findOrFail($request->id);
        return view('booking.failed', compact('booking'));
    }
}
