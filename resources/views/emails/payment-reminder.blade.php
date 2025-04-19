<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Reminder</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 650px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 2px solid #f8f8f8;
        }
        .header h1 {
            color: #e74c3c;
            margin: 0;
        }
        .reminder-icon {
            text-align: center;
            margin: 30px 0;
            font-size: 48px;
        }
        .booking-details, .payment-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
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
            background-color: #fffaf0;
            padding: 15px;
            border-left: 3px solid #e74c3c;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #f0f0f0;
        }
        .footer a {
            color: #888;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Payment Reminder</h1>
    </div>

    <div class="reminder-icon">
        ⏰
    </div>

    <p>Hello {{ $booking->name }},</p>

    <p>This is a friendly reminder that your photography session is scheduled in 7 days. According to our records, you still have a remaining balance to complete your payment.</p>

    <div class="booking-details">
        <p><strong>Booking ID:</strong> {{ $booking->invoice }}</p>
        <p><strong>Package:</strong> {{ $package->name }}</p>
        <p><strong>Date:</strong> {{ date('d F Y', strtotime($booking->booking_date)) }}</p>
        <p><strong>Time:</strong> {{ date('H:i', strtotime($booking->booking_time)) }}</p>
        <p><strong>Location:</strong> {{ $booking->event_address }}</p>
    </div>

    <div class="payment-details">
        <p><strong>Total Price:</strong> Rp {{ number_format($booking->total_price, 0, ',', '.') }}</p>
        <p><strong>Deposit Amount Paid:</strong> Rp {{ number_format($booking->deposit_amount, 0, ',', '.') }}</p>
        <p><strong>Remaining Amount:</strong> <span style="color: #e74c3c; font-weight: bold;">Rp {{ number_format($booking->remaining_amount, 0, ',', '.') }}</span></p>
        <p><strong>Payment Status:</strong> <span style="color: #e74c3c; font-weight: bold;">PARTIAL</span></p>
    </div>

    <div class="note">
        <p><strong>Important:</strong> To ensure your booking runs smoothly, please complete your remaining payment before your session date.</p>
    </div>

    @if($remaining_payment_url)
        <div class="payment-button">
            <a href="{{ $remaining_payment_url }}">Complete Your Payment Now</a>
        </div>
    @else
        <p>To make your payment, please log in to your account or contact our team for assistance.</p>
    @endif

    <p>If you've recently completed this payment or if you believe there's an error, please disregard this message and contact us.</p>

    <div class="note">
        <p><strong>Getting Ready for Your Session:</strong></p>
        <p>Our photographer will contact you shortly to confirm all details and answer any questions you might have.</p>
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