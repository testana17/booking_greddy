<!DOCTYPE html>
<html>
<head>
    <title>Remaining Payment for Your Photography Session</title>
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
        .button {
            display: inline-block;
            background-color: #e91e63;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Complete Your Photography Session Payment</h1>
        </div>

        <div class="content">
            <p>Hello {{ $booking->name }},</p>

            <p>Thank you for your deposit payment for your photography session. To complete your booking, please make the remaining payment using the link below:</p>

            <div class="details">
                <p><strong>Package:</strong> {{ $package->name }}</p>
                <p><strong>Session Date:</strong> {{ date('l, F j, Y', strtotime($booking->booking_date)) }}</p>
                <p><strong>Session Time:</strong> {{ date('h:i A', strtotime($booking->booking_time)) }}</p>
                <p><strong>Location:</strong> {{ $booking->event_address }}</p>
                <p><strong>Total Price:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
                <p><strong>Already Paid (Deposit):</strong> Rp {{ number_format($booking->deposit_amount, 0, ',', '.') }}</p>
                <p><strong>Remaining Balance:</strong> Rp {{ number_format($remaining_amount, 0, ',', '.') }}</p>
            </div>

            <p style="text-align: center; margin: 30px 0;">
                <a href="{{ $payment_url }}" class="button">Pay Remaining Balance</a>
            </p>

            <p>This payment link is valid for {{ $expiry_days }} days. Please make your payment before the session date to confirm your booking.</p>
        </div>

        <div class="footer">
            <p>If you have any questions, please contact us at support@yourphotographycompany.com</p>
            <p>&copy; {{ date('Y') }} Your Photography Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>