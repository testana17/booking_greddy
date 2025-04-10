{{-- notifsuccess.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful - Photography Session</title>
</head>
<body>
    <h1>Payment Confirmed!</h1>

    <p>Dear {{ $booking->name }},</p>

    <p>Thank you for your payment. Your booking has been confirmed.</p>

    <h2>Booking Details</h2>
    <ul>
        <li><strong>Invoice Number:</strong> {{ $booking->invoice }}</li>
        <li><strong>Package:</strong> {{ $package->name }}</li>
        <li><strong>Total Paid:</strong> Rp {{ number_format($booking->total, 0, ',', '.') }}</li>
        <li><strong>Booking Date:</strong> {{ \Carbon\Carbon::parse($booking->booking_date)->format('d F Y') }}</li>
    </ul>

    <h2>Payment Information</h2>
    <ul>
        @if(isset($payment_details['type']))
            <li><strong>Payment Method:</strong> {{ $payment_details['type'] }}</li>
        @endif

        @if(isset($payment_details['transaction_id']))
            <li><strong>Transaction ID:</strong> {{ $payment_details['transaction_id'] }}</li>
        @endif

        @if(isset($payment_details['payment_code']))
            <li><strong>Payment Code:</strong> {{ $payment_details['payment_code'] }}</li>
        @endif
    </ul>

    <p>We look forward to capturing your special moments!</p>

    <p>Best regards,<br>Your Photography Team</p>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Payment Successful - Photography Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            margin-bottom: 30px;
        }
        .details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>
                @if(isset($is_deposit) && $is_deposit)
                    Deposit Payment Received
                @elseif(isset($is_full_payment) && $is_full_payment)
                    Full Payment Completed
                @else
                    Payment Successful
                @endif
            </h1>
        </div>

        <div class="content">
            <p>Hello {{ $booking->name }},</p>

            @if(isset($is_deposit) && $is_deposit)
                <p>Thank you for your deposit payment for your photography session. We're excited to work with you!</p>

                <div class="details">
                    <p><strong>Package:</strong> {{ $package->name }}</p>
                    <p><strong>Session Date:</strong> {{ date('l, F j, Y', strtotime($booking->booking_date)) }}</p>
                    <p><strong>Session Time:</strong> {{ date('h:i A', strtotime($booking->booking_time)) }}</p>
                    <p><strong>Location:</strong> {{ $booking->event_address }}</p>
                    <p><strong>Total Price:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                    <p><strong>Deposit Paid:</strong> Rp {{ number_format($booking->deposit_amount, 0, ',', '.') }}</p>
                    <p><strong>Remaining Balance:</strong> Rp {{ number_format($remaining_amount, 0, ',', '.') }}</p>
                </div>

                <p>You will receive a separate email with instructions on how to pay the remaining balance. Please make sure to complete the full payment before your session date.</p>

            @elseif(isset($is_full_payment) && $is_full_payment)
                <p>Thank you for completing the full payment for your photography session. Your booking is now fully confirmed!</p>

                <div class="details">
                    <p><strong>Package:</strong> {{ $package->name }}</p>
                    <p><strong>Session Date:</strong> {{ date('l, F j, Y', strtotime($booking->booking_date)) }}</p>
                    <p><strong>Session Time:</strong> {{ date('h:i A', strtotime($booking->booking_time)) }}</p>
                    <p><strong>Location:</strong> {{ $booking->event_address }}</p>
                    <p><strong>Total Amount Paid:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                </div>

                <p>We look forward to seeing you at your session. We'll be in touch closer to the date to confirm all details.</p>

            @else
                <p>Thank you for your payment for your photography session. Your booking is now confirmed!</p>

                <div class="details">
                    <p><strong>Package:</strong> {{ $package->name }}</p>
                    <p><strong>Session Date:</strong> {{ date('l, F j, Y', strtotime($booking->booking_date)) }}</p>
                    <p><strong>Session Time:</strong> {{ date('h:i A', strtotime($booking->booking_time)) }}</p>
                    <p><strong>Location:</strong> {{ $booking->event_address }}</p>
                    <p><strong>Amount Paid:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                </div>

                <p>We look forward to seeing you at your session. We'll be in touch closer to the date to confirm all details.</p>
            @endif
        </div>

        <div class="footer">
            <p>If you have any questions, please contact us at support@yourphotographycompany.com</p>
            <p>&copy; {{ date('Y') }} Your Photography Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 15px;
        }
        h1 {
            color: #27ae60;
            margin-bottom: 20px;
        }
        .success-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .success-icon span {
            display: inline-block;
            width: 60px;
            height: 60px;
            background-color: #27ae60;
            border-radius: 50%;
            position: relative;
        }
        .success-icon span:after {
            content: "";
            position: absolute;
            width: 30px;
            height: 15px;
            border-left: 4px solid white;
            border-bottom: 4px solid white;
            transform: rotate(-45deg);
            top: 17px;
            left: 15px;
        }
        .booking-details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .payment-details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .payment-button {
            text-align: center;
            margin: 30px 0;
        }
        .payment-button a {
            background-color: #27ae60;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
        .note {
            font-size: 14px;
            background-color: #e8f5e9;
            padding: 15px;
            border-left: 4px solid #27ae60;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Payment Successful!</h1>
    </div>

    <div class="success-icon">
        <span></span>
    </div>

    <p>Hello {{ $booking->name }},</p>

    @if(isset($is_remaining) && $is_remaining)
        <p>Great news! We've received your remaining payment for your photography session. Your booking is now fully confirmed.</p>
    @elseif($is_deposit)
        <p>Great news! We've received your deposit payment for your photography session.</p>
    @else
        <p>Great news! We've received your full payment for your photography session. Your booking is confirmed.</p>
    @endif

    <div class="booking-details">
        <p><strong>Booking ID:</strong> {{ $booking->invoice }}</p>
        <p><strong>Package:</strong> {{ $package->name }}</p>
        <p><strong>Date:</strong> {{ date('d F Y', strtotime($booking->booking_date)) }}</p>
        <p><strong>Time:</strong> {{ date('H:i', strtotime($booking->booking_time)) }}</p>
        <p><strong>Location:</strong> {{ $booking->event_address }}</p>
    </div>

    <div class="payment-details">
        <p><strong>Total Price:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>

        @if($is_deposit)
            <p><strong>Deposit Amount Paid:</strong> Rp {{ number_format($booking->deposit_amount, 0, ',', '.') }}</p>
            @if($remaining_amount > 0)
                <p><strong>Remaining Amount:</strong> Rp {{ number_format($remaining_amount, 0, ',', '.') }}</p>
            @endif
        @elseif(isset($is_remaining) && $is_remaining)
            <p><strong>Deposit Amount Paid:</strong> Rp {{ number_format($booking->deposit_amount, 0, ',', '.') }}</p>
            <p><strong>Remaining Amount Paid:</strong> Rp {{ number_format($payment_amount, 0, ',', '.') }}</p>
            <p><strong>Payment Status:</strong> <span style="color: #27ae60; font-weight: bold;">PAID IN FULL</span></p>
        @else
            <p><strong>Amount Paid:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
            <p><strong>Payment Status:</strong> <span style="color: #27ae60; font-weight: bold;">PAID IN FULL</span></p>
        @endif
    </div>

    @if($is_deposit && $remaining_amount > 0 && isset($remaining_payment_url))
        <div class="note">
            <p><strong>Important:</strong> To secure your booking, please complete the remaining payment before your session date.</p>
            <p>You can make your remaining payment at any time using the button below:</p>
        </div>

        <div class="payment-button">
            <a href="{{ $remaining_payment_url }}">Pay Remaining Balance</a>
        </div>
    @endif

    <div class="note">
        <p><strong>What's Next?</strong></p>
        <p>Our photographer will contact you a few days before your session to confirm all details and answer any questions you might have.</p>
        <p>Please prepare the following:</p>
        <ul>
            <li>Any specific photo ideas or poses you'd like to capture</li>
            <li>Appropriate attire for your photoshoot</li>
            <li>Any props or accessories you'd like to include</li>
        </ul>
    </div>

    <p>If you need to make any changes to your booking or have any questions, please contact us at <a href="mailto:contact@photographystudio.com">contact@photographystudio.com</a> or call us at +62-XXX-XXX-XXXX.</p>

    <p>Thank you for choosing our photography services. We look forward to creating beautiful memories with you!</p>

    <p>Warm regards,<br>
    Photography Studio Team</p>

    <div class="footer">
        <p>© {{ date('Y') }} Photography Studio. All rights reserved.</p>
        <p>Jl. Photography No. 123, City, Indonesia</p>
        <p>
            <a href="https://www.instagram.com/photographystudio">Instagram</a> |
            <a href="https://www.facebook.com/photographystudio">Facebook</a> |
            <a href="https://www.photographystudio.com">Website</a>
        </p>
    </div>
</body>
</html>