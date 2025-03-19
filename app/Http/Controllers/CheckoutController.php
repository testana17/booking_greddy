<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class CheckoutController extends Controller
{
    // public function __construct()
    // {
    //     Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    //     Config::$isProduction = false;
    //     Config::$isSanitized = true;
    //     Config::$is3ds = true;
    // }

    
    // public function checkout(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'phone_number' => 'required|string|max:20',
    //         'instagram_username' => 'nullable|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'package' => 'required|string',
    //         'event_date' => 'required|date',
    //         'event_time' => 'required',
    //         'event_address' => 'required|string|max:500',
    //         'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    //     ]);
    
    //     try {
    //         $orderId = 'BOOK-' . Str::uuid();
    //         $packagePrices = [
    //             'before_neubasic' => 2750000,
    //             'before_neusweat' => 4000000,
    //             'traditional_neubasic' => 3300000,
    //             'traditional_neusweat' => 3800000,
    //             'prewedding_neubasic' => 3000000,
    //             'prewedding_neusweat' => 4000000,
    //             'wedding_intimate' => 3300000,
    //             'wedding_neusweat' => 4000000,
    //             'wedding_neudeluxe' => 6000000,
    //             'photo_only' => 2250000,
    //             'video_only' => 2250000,
    //         ];
    
    //         $grossAmount = $packagePrices[$validatedData['package']] ?? 0;
    
    //         if ($grossAmount <= 0) {
    //             return response()->json(['error' => 'Invalid package selected.'], 400);
    //         }
    
    //         $booking = Booking::create([
    //             'name' => $validatedData['full_name'],
    //             'phone_number' => $validatedData['phone_number'],
    //             'instagram' => $validatedData['instagram_username'],
    //             'email' => $validatedData['email'],
    //             'package_id' => $validatedData['package'],
    //             'booking_date' => $validatedData['event_date'],
    //             'status' => 'pending',
    //             'available' => now(),
    //             'unavailable' => null,
    //             'estimated_completion' => now()->addDays(3),
    //         ]);
    
    //         $params = [
    //             'transaction_details' => [
    //                 'order_id' => $orderId,
    //                 'gross_amount' => $grossAmount,
    //             ],
    //             'customer_details' => [
    //                 'first_name' => $validatedData['full_name'],
    //                 'email' => $validatedData['email'],
    //                 'phone' => $validatedData['phone_number'],
    //             ],
    //         ];
    
    //         $snapToken = Snap::getSnapToken($params);
    
    //         return response()->json([
    //             'snap_token' => $snapToken,
    //             'booking_id' => $booking->id
    //         ]);
    //     } catch (\Exception $e) {
    //         Log::error('Checkout Error: ' . $e->getMessage());
    //         return response()->json(['error' => 'Payment processing failed. Please try again.'], 500);
    //     }
    // }
    

    // public function callback(Request $request)
    // {
    //     Log::info('Midtrans callback received:', $request->all());

    //     $transactionStatus = strtolower($request->transaction_status);
    //     $orderId = $request->order_id;

    //     DB::beginTransaction();
    //     try {
    //         // Ambil data booking berdasarkan order_id
    //         $booking = Booking::where('id', $orderId)->firstOrFail();

    //         if (in_array($transactionStatus, ['capture', 'settlement', 'success'])) {
    //             $booking->status = 'paid';
    //             $booking->unavailable = now();
    //         } elseif (in_array($transactionStatus, ['cancel', 'deny', 'expire'])) {
    //             $booking->status = 'pending';
    //         }

    //         $booking->save();
    //         Log::info('Booking updated:', $booking->toArray());

    //         // Kirim notifikasi ke user
    //         $user = User::where('email', $booking->email)->first();
    //         if ($user) {
    //             $user->notify(new TransactionNotification($booking, 'user'));
    //         }

    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         Log::error('Error in callback method: ' . $e->getMessage(), [
    //             'file' => $e->getFile(),
    //             'line' => $e->getLine(),
    //             'trace' => $e->getTraceAsString()
    //         ]);
    //         return response()->json(['error' => 'Failed to update records: ' . $e->getMessage()], 500);
    //     }

    //     return response()->json(['status' => 'ok']);
    // }
}