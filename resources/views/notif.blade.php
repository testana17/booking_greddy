{{-- notif.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Payment Instruction for Your Photography Session</title>
</head>
<body>
    <h1>Payment Instruction</h1>

    <p>Dear {{ $booking->name }},</p>

    <p>Thank you for booking your photography session. Here are the details of your booking:</p>

    <ul>
        <li><strong>Invoice Number:</strong> {{ $booking->invoice }}</li>
        <li><strong>Package:</strong> {{ $package->name }}</li>
        <li><strong>Total Amount:</strong> Rp {{ number_format($booking->total, 0, ',', '.') }}</li>
    </ul>

    <h2>Payment Instructions</h2>

    <p>You have {{ $expiry_days }} days to complete your payment. Please use the link below to proceed with the payment:</p>

    <p><a href="{{ $payment_url }}">Complete Payment</a></p>

    <p>If the link above doesn't work, you can copy and paste this URL into your browser:</p>

    <p>{{ $payment_url }}</p>

    <p>Payment Methods Available:
        <ul>
            <li>Virtual Account (Permata, BCA, BNI, BRI)</li>
            <li>GoPay</li>
            <li>Indomaret</li>
            <li>ShopeePay</li>
            <li>Other QRIS methods</li>
        </ul>
    </p>

    <p>If you have any questions, please contact our customer support.</p>

    <p>Best regards,<br>Your Photography Team</p>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Payment Instructions</title>
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
            color: #e74c3c;
            margin-bottom: 20px;
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
            background-color: #e74c3c;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
        .note {
            font-size: 14px;
            background-color: #fff8e1;
            padding: 15px;
            border-left: 4px solid #ffc107;
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
        <h1>Photography Session Booking</h1>
    </div>

    <p>Hello {{ $booking->name }},</p>

    <p>Thank you for booking a photography session with us! Here are your booking details:</p>

    <div class="booking-details">
        <p><strong>Booking ID:</strong> {{ $booking->invoice }}</p>
        <p><strong>Package:</strong> {{ $package->name }}</p>
        <p><strong>Date:</strong> {{ date('d F Y', strtotime($booking->booking_date)) }}</p>
        <p><strong>Time:</strong> {{ date('H:i', strtotime($booking->booking_time)) }}</p>
        <p><strong>Location:</strong> {{ $booking->event_address }}</p>
    </div>

    <div class="payment-details">
        <p><strong>Payment Type:</strong> {{ $is_deposit ? 'Deposit' : 'Full Payment' }}</p>
        <p><strong>Total Price:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>

        @if($is_deposit)
            <p><strong>Deposit Amount:</strong> Rp {{ number_format($payment_amount, 0, ',', '.') }}</p>
            <p><strong>Remaining Amount:</strong> Rp {{ number_format($remaining_amount, 0, ',', '.') }}</p>
        @else
            <p><strong>Amount to Pay:</strong> Rp {{ number_format($payment_amount, 0, ',', '.') }}</p>
        @endif
    </div>

    <div class="note">
        <p><strong>Important:</strong> Payment link will expire in {{ $expiry_days }} days. Please complete your payment before the link expires.</p>
    </div>

    <div class="payment-button">
        <a href="{{ $payment_url }}" target="_blank">Pay Now</a>
    </div>

    <p>If you have any questions about your booking or payment, please don't hesitate to contact us.</p>

    <p>Thank you for choosing our photography services!</p>

    <div class="footer">
        <p>This is an automated email. Please do not reply to this message.</p>
    </div>
</body>
</html>