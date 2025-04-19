<?php

namespace App\Console\Commands;

use App\Models\Booking;
use App\Models\Packages;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PaymentReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:payment-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send payment reminder emails 7 days before booking date for partial payments';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get date exactly 7 days from now
        // $targetDate = Carbon::now('Asia/Jakarta')->addDays(7)->toDateString();

        $targetDate = '2025-04-17';

        $this->info("Checking for bookings scheduled on: " . $targetDate);

        // Find all bookings that are 7 days away and have partial payment status
        $bookings = Booking::where('booking_date', $targetDate)
            ->where('status_payment', 'partial')
            ->whereNotNull('remaining_amount')
            ->where('remaining_amount', '>', 0)
            ->get();

        $this->info("Found " . $bookings->count() . " bookings with pending payments");

        foreach ($bookings as $booking) {
            try {
                $package = Packages::find($booking->package_id);
                $paymentInfo = json_decode($booking->payment_info, true);
                $remainingPaymentUrl = null;

                // Check if there's a remaining payment URL stored in payment_info
                if (isset($paymentInfo['remaining_payment']) && isset($paymentInfo['remaining_payment']['redirect_url'])) {
                    $remainingPaymentUrl = $paymentInfo['remaining_payment']['redirect_url'];
                }

                // Send reminder email
                Mail::send(
                    'emails.payment-reminder',
                    [
                        'booking' => $booking,
                        'package' => $package,
                        'remaining_amount' => $booking->remaining_amount,
                        'remaining_payment_url' => $remainingPaymentUrl,
                        'is_deposit' => true,
                    ],
                    function ($message) use ($booking) {
                        $message->to($booking->email)
                            ->subject('Reminder: Complete Your Payment for Upcoming Photography Session');
                    }
                );

                $this->info("Sent reminder email to: " . $booking->email . " (Booking ID: " . $booking->invoice . ")");
                Log::info("Payment reminder sent to " . $booking->email . " for booking " . $booking->invoice);
            } catch (\Exception $e) {
                $this->error("Failed to send reminder to " . $booking->email . ": " . $e->getMessage());
                Log::error("Payment reminder email error: " . $e->getMessage());
            }
        }

        return Command::SUCCESS;
    }
}