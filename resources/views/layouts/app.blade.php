<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Neumories - Wedding Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>
  
.gradient-bg {
      background-image: linear-gradient(to right, #f43f5e, #e11d48);
    }
        .rose-gradient {
            background: linear-gradient(135deg, #f8e1e8 0%, #f5c4d2 100%);
        }
        

        .rose-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 15px rgba(221, 143, 164, 0.1);
        }

        .rose-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(221, 143, 164, 0.2);
        }

        .rose-card:hover .card-overlay {
            opacity: 1;
        }

        .rose-card:hover .card-content {
            transform: translateY(0);
            opacity: 1;
        }

        .card-overlay {
            background: linear-gradient(to top, rgba(221, 143, 164, 0.8) 0%, rgba(221, 143, 164, 0.4) 50%, rgba(221, 143, 164, 0) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .card-content {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.4s ease;
            transition-delay: 0.1s;
        }

        .rose-shine {
            position: relative;
            overflow: hidden;
        }

        .rose-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
            transform: rotate(30deg);
            animation: shine 6s infinite linear;
            pointer-events: none;
        }

        @keyframes shine {
            0% {
                transform: scale(0.5) rotate(30deg) translateX(-200%);
            }
            100% {
                transform: scale(0.5) rotate(30deg) translateX(200%);
            }
        }

        .rose-border {
            position: relative;
        }

        .rose-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border: 1px solid rgba(221, 143, 164, 0.3);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .rose-card:hover .rose-border::before {
            inset: 10px;
            opacity: 1;
        }

        .rose-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .rose-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(221, 143, 164, 0.2);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .rose-button:hover::before {
            transform: translateX(0);
        }

        /* Package card styles */
        .package-card {
            transition: all 0.5s ease;
            overflow: hidden;
        }

        .package-card:hover {
            transform: translateY(-8px);
        }

        .package-card:hover .package-image img {
            transform: scale(1.05);
        }

        .package-card:hover .package-price {
            transform: translateY(0);
            opacity: 1;
        }

        .package-card:hover .package-overlay {
            opacity: 0.7;
        }

        .package-image img {
            transition: transform 0.5s ease;
        }

        .package-price {
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .package-overlay {
            opacity: 0;
            transition: opacity 0.4s ease;
            background: linear-gradient(to bottom, rgba(221, 143, 164, 0) 0%, rgba(221, 143, 164, 0.8) 100%);
        }

        .ribbon {
            position: absolute;
            top: 15px;
            right: -30px;
            transform: rotate(45deg);
            width: 150px;
            text-align: center;
            font-size: 0.7rem;
            text-transform: uppercase;
            background-color: #dd8fa4;
            color: white;
            padding: 5px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .ribbon-popular {
            background-color: #dd8fa4;
        }

        .ribbon-best {
            background-color: #c97d90;
        }

        .package-features li {
            position: relative;
            padding-left: 1.5rem;
        }

        .package-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #dd8fa4;
        }

        .package-button {
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .package-button::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(255,255,255,0.2);
            transition: height 0.3s ease;
            z-index: -1;
        }

        .package-button:hover::after {
            height: 100%;
        }
    </style>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>


</head>
<body class="antialiased">

    <div class="mt-[-20px]">
        @yield('content')
    </div>
    <div id="snap-container"></div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>

