@extends('layouts.app')

@section('content')
    <main
        class="min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-rose-50 via-white to-rose-50/20">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-20">
            <!-- Stats Bar - Responsive -->
            <div class="md:mb-20">
                <div class="flex flex-col lg:flex-row items-center gap-6">
                    <!-- Bagian Teks -->
                    <div class="lg:w-1/2 space-y-4">
                        <div class="flex items-center gap-4 text-orange-500">
                            <img src="{{ asset('img/logoneu.png') }}" alt="Ikon" class="w-16 h-16 object-cover rounded-xl">
                            <span class="font-medium text-lg">Booking Wedding Neumories</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                            <span class="text-rose-500">Capture</span> Your <br />
                            Best Wedding <br />
                            Moments
                        </h1>

                        <p class="text-gray-600 text-lg max-w-md">
                            Let's find your dream destinations. Here, we recommend beautiful places and affordable trips for
                            you and your beloved family.
                        </p>

                    </div>
                    <!-- Bagian Gambar -->
                    <div class="lg:w-1/3">
                        <img src="{{ asset('img/image33.png') }}" alt="Deskripsi Gambar"
                            class="w-full h-auto rounded-2xl shadow-md">
                    </div>
                </div>


                <div
                    class="flex flex-col md:flex-row justify-between items-center mb-20 bg-white/50 backdrop-blur-sm p-6 rounded-3xl shadow-sm">
                    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-12 mb-4 sm:mb-0">
                        <!-- Item 1 -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="p-3 bg-rose-50 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-rose-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="text-center">
                                <p class="md:text-3xl text-xl font-bold text-gray-900">1.2K+</p>
                                <p class="text-sm text-gray-500">Happy Clients</p>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="hidden sm:block h-12 w-px bg-gray-200"></div>

                        <!-- Item 2 -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="p-3 bg-blue-50 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                </svg>
                            </div>
                            <div class="text-center">
                                <p class="md:text-3xl text-xl font-bold text-gray-900">15+</p>
                                <p class="text-sm text-gray-500">Years Experience</p>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="hidden sm:block h-12 w-px bg-gray-200"></div>

                        <!-- Item 3 -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="p-3 bg-green-50 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="text-center">
                                <p class="md:text-3xl text-xl font-bold text-gray-900">98%</p>
                                <p class="text-sm text-gray-500">Success Rate</p>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div
                        class="flex items-center gap-3 px-6 py-3 bg-rose-500 text-white rounded-2xl hover:bg-rose-600 transition-colors cursor-pointer">
                        <span class="font-medium">View Gallery</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </div>
                </div>

            </div>

            <!-- Main Content -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-20 items-start">
                <!-- Left: Form Section -->
                <div class="lg:sticky lg:top-8 order-2 lg:order-1">
                    <div class="space-y-6 lg:space-y-8 mb-8 lg:mb-12">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-white rounded-full shadow-sm">
                            <span class="px-3 py-1 bg-rose-500 text-white text-sm font-medium rounded-full">New</span>
                            <span class="text-gray-600 text-sm font-medium">Premium Photography Package</span>
                        </div>

                        <h1 class="text-xl md:text-2xl lg:text-5xl font-bold tracking-tight text-gray-900">
                            Create Timeless
                            <span class="text-rose-500">Memories</span>
                        </h1>

                        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                            Let us capture your special moments with our professional photography services.
                        </p>
                    </div>

                    <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data"
                        class="bg-white/50 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-3xl shadow-lg">
                        @csrf
                        <div class="space-y-6 lg:space-y-8">
                            <!-- Personal Details -->
                            <div class="space-y-4 lg:space-y-6">
                                <h3 class="text-base lg:text-lg font-semibold text-gray-900">Personal Information</h3>
                                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div class="group">
                                        <div class="relative">
                                            <input type="text" name="full_name" required
                                                class="peer w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                            <label
                                                class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all
                                                peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
                                                peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                Full Name
                                            </label>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <div class="relative">
                                            <input type="tel" name="phone_number" required
                                                class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                            <label
                                                class="absolute left-6 top-4 text-gray-500 text-sm transition-all
                                                peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
                                                peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                Phone Number
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div class="group">
                                        <div class="relative">
                                            <input type="text" name="instagram_username" required
                                                class="peer w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                            <label
                                                class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all
                                                peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
                                                peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                Instagram Username
                                            </label>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <div class="relative">
                                            <input type="email" name="email" required
                                                class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                            <label
                                                class="absolute left-6 top-4 text-gray-500 text-sm transition-all
                                                peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
                                                peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                Email Address
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div class="group">
                                        <div class="relative">
                                            <input type="date" name="event_date" required
                                                class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="group">
                                        <div class="relative">
                                            <input type="time" name="event_time" required
                                                class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div class="group">
                                        <div class="relative">
                                            <select name="package" required
                                                class="w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all appearance-none">
                                                <option value="">Select Photography Package</option>
                                                @foreach ($packages as $package)
                                                    <option value="{{ $package->id }}">{{ $package->name }} (Rp
                                                        {{ number_format($package->price, 0, ',', '.') }})</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="group">
                                        <div class="relative">
                                            <input type="text" name="event_address" required
                                                class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                                placeholder=" ">
                                            <label
                                                class="absolute left-6 top-4 text-gray-500 text-sm transition-all
                                                peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
                                                peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                Event Address
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">

                                    <input type="hidden" name="price" id="price">

                                    <div class="group">
                                        <div class="relative">
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" id="pay-button"
                                class="w-full h-12 lg:h-14 bg-rose-500 text-white rounded-xl hover:bg-rose-600 transition-all">
                                Book Your Session
                            </button>

                        </div>
                    </form>

                </div>

                <!-- Right: Image Gallery -->
                <div class="relative">
                    <div class="absolute -left-4 top-1/4 z-10">
                        <div class="bg-white/90 backdrop-blur-sm p-6 rounded-2xl shadow-lg animate-float-1">
                            <div class="flex items-center gap-4">
                                <div class="p-3 bg-amber-50 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Premium</p>
                                    <p class="text-sm text-gray-500">Quality Service</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Grid -->
                    <div class="grid gap-4 sm:gap-6">
                        <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                            <img src="{{ asset('img/wed.jpg') }}" alt="Wedding Photo"
                                class="w-full aspect-[3/2] sm:aspect-video object-cover transition duration-700 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 sm:gap-6">
                            <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                                <img src="{{ asset('img/wed2.jpg') }}" alt="Wedding Photo"
                                    class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                            <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                                <img src="{{ asset('img/wed3.jpg') }}" alt="Wedding Photo"
                                    class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                            </div>
                        </div>

                        <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                            <img src="{{ asset('img/wed4.jpg') }}" alt="Wedding Photo"
                                class="w-full aspect-[3/2] sm:aspect-video object-cover transition duration-700 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Wedding Packages Card Section -->
        <section class="px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-sm uppercase tracking-widest text-rose-600 font-semibold">Choose Your Perfect</span>
                    <h2 class="text-3xl font-serif text-rose-500 mt-2">Wedding Packages</h2>
                    <div class="w-20 h-0.5 bg-[#dd8fa4]/30 mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="package-card bg-white rounded-lg shadow-lg overflow-hidden relative">
                        <!-- Package Image Full -->
                        <div class="package-image h-full overflow-hidden relative">
                            <img src="/img/bef_wed.jpg" alt="Basic Package" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="package-card bg-white rounded-lg shadow-lg overflow-hidden relative">
                        <!-- Package Image Full -->
                        <div class="package-image h-full overflow-hidden relative">
                            <img src="/img/trad_wed.jpg" alt="Basic Package" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Package Card 1 -->
                    <div class="package-card bg-white rounded-lg shadow-lg overflow-hidden relative">
                        <!-- Package Image Full -->
                        <div class="package-image h-full overflow-hidden relative">
                            <img src="/img/prewed_session.jpg" alt="Basic Package" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Package Card 2 (Popular) -->
                    <div class="package-card bg-white rounded-lg shadow-lg overflow-hidden relative">
                        <!-- Package Image Full -->
                        <div class="package-image h-full overflow-hidden relative">
                            <img src="/img/wed_session.jpg" alt="Basic Package" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Package Card 3 (Best Value) -->
                    <div class="package-card bg-white rounded-lg shadow-lg overflow-hidden relative">
                        <!-- Package Image Full -->
                        <div class="package-image h-full overflow-hidden relative">
                            <img src="/img/basic_pack.jpg" alt="Basic Package" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Additional packages button -->

            </div>
        </section>

        <section class="py-16">
            <div class="max-w-6xl mx-auto px-4">
                <!-- Elegant heading -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-serif text-rose-500 inline-block relative">
                        Featured Gallery
                        <span class="absolute -bottom-2 left-0 w-full h-0.5 bg-[#dd8fa4]/30"></span>
                    </h2>
                </div>

                <!-- Rose-themed card gallery -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <!-- Card 1 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket1.jpg" alt="Wedding photo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Romantic Ceremony</h3>
                                <p class="text-white/80 text-sm mt-1">Capturing the perfect moment</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket2.jpg" alt="Wedding photo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Bridal Portrait</h3>
                                <p class="text-white/80 text-sm mt-1">Elegant and timeless</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket3.jpg" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Elegant Details</h3>
                                <p class="text-white/80 text-sm mt-1">The little things matter</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket4.jpg" alt="Wedding photo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Venue Setup</h3>
                                <p class="text-white/80 text-sm mt-1">Beautiful arrangements</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket5.jpg" alt="Wedding photo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Candid Moments</h3>
                                <p class="text-white/80 text-sm mt-1">Natural and authentic</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="rose-card bg-white rounded-lg overflow-hidden">
                        <div class="relative h-80 rose-shine">
                            <img src="/img/paket6.jpg" alt="Wedding photo" class="w-full h-full object-cover">
                            <div class="absolute inset-0 card-overlay"></div>
                            <div class="absolute inset-0 rose-border"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 card-content">
                                <h3 class="text-white text-lg font-serif">Destination Wedding</h3>
                                <p class="text-white/80 text-sm mt-1">Breathtaking locations</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <footer class="bg-rose-600 text-white py-8 px-4">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-serif mb-4">Hayley & Co</h3>
                    <p class="text-sm">Capturing your most precious moments with elegance and style since 2010.</p>
                </div>
                <div>
                    <h3 class="text-xl font-serif mb-4">Contact Us</h3>
                    <p class="text-sm">Email: info@hayleyandco.com</p>
                    <p class="text-sm">Phone: (123) 456-7890</p>
                    <p class="text-sm">Address: 123 Wedding Lane, Photography City</p>
                </div>
                <div>
                    <h3 class="text-xl font-serif mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300">Instagram</a>
                        <a href="#" class="hover:text-gray-300">Facebook</a>
                        <a href="#" class="hover:text-gray-300">Pinterest</a>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-8 pt-4 border-t border-[#a99b8d] text-sm text-center">
                <p>&copy; 2024 Hayley & Co. All rights reserved.</p>
            </div>
        </footer>
    </main>

    <style>
        @keyframes float-1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(0, -10px);
            }
        }

        .animate-float-1 {
            animation: float-1 6s ease-in-out infinite;
        }
    </style>

    @if (env('MIDTRANS_IS_PRODUCTION', false))
        <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
            data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    @else
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    @endif


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const eventDateInput = document.querySelector('input[name="event_date"]');
            const packageSelect = document.querySelector('select[name="package"]');
            const payButton = document.getElementById('pay-button');

            eventDateInput.addEventListener('change', function() {
                const selectedDate = this.value;

                fetch(`/cek-tanggal/${selectedDate}`, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (!data.is_available) {
                            Array.from(packageSelect.options).forEach(option => {
                                if (option.value === data.booking.package_id.toString()) {
                                    option.disabled = true;
                                    option.text += ' (Booked)';
                                }
                            });

                        } else {
                            Array.from(packageSelect.options).forEach(option => {
                                option.disabled = false;
                                option.text = option.text.replace(' (Booked)', '');
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error checking date availability:', error);
                    });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {

            const form = document.querySelector('form[action="{{ route('checkout') }}"]');
            const payButton = document.getElementById('pay-button');


            const packageSelect = document.querySelector('select[name="package"]');
            const priceInput = document.getElementById('price');

            if (packageSelect) {
                packageSelect.addEventListener('change', function() {
                    const packageInfo = this.options[this.selectedIndex].text;
                    const priceMatch = packageInfo.match(/\(Rp ([\d.,]+)\)/);

                    if (priceMatch && priceMatch[1]) {

                        const price = priceMatch[1].replace(/[.,]/g, '');
                        priceInput.value = price;
                    }
                });

                packageSelect.dispatchEvent(new Event('change'));
            }

            if (payButton && form) {
                payButton.addEventListener('click', function(e) {
                    e.preventDefault();

                    payButton.textContent = 'Processing...';
                    payButton.disabled = true;

                    const formData = new FormData(form);
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute(
                        'content') || '';

                    fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': csrfToken
                            },
                            credentials: 'same-origin',
                        })
                        .then(response => {
                            if (!response.ok) {

                                return response.text().then(text => {
                                    console.error("Server error response:", text);
                                    throw new Error('Network response was not ok');
                                });
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.token) {
                                snap.pay(data.token, {
                                    gopayMode: 'deeplink',

                                    onSuccess: function(result) {
                                        console.log('Payment success:', result);
                                        saveTransactionResult(result);
                                        window.location.href = '/booking/success?id=' +
                                            result.order_id;
                                    },
                                    onError: function(result) {
                                        console.log('Payment error:', result);
                                        alert('Payment failed. Please try again.');
                                        payButton.textContent = 'Book Your Session';
                                        payButton.disabled = false;
                                    },
                                    onClose: function() {
                                        console.log('Customer closed the payment window');
                                        payButton.textContent = 'Book Your Session';
                                        payButton.disabled = false;
                                    }
                                });
                            } else if (data.error) {
                                console.error('Error:', data.error);
                                alert('Error: ' + data.error);
                                payButton.textContent = 'Book Your Session';
                                payButton.disabled = false;
                            } else {
                                throw new Error('No payment token received');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                            payButton.textContent = 'Book Your Session';
                            payButton.disabled = false;
                        });
                });
            }

            function saveTransactionResult(result) {
                console.log('Transaction result saved:', result);
            }
        });
    </script>
@endsection
