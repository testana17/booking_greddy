@extends('layouts.app')

@section('content')
    <main
        class="min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-rose-50 via-white to-rose-50/20">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-20">
            <!-- Stats Bar - Responsive -->
            <div class="md:mb-20">
                <!--<div class="flex flex-col lg:flex-row items-center gap-6">-->
                    <!-- Bagian Teks -->
                <!--    <div class="lg:w-1/2 space-y-4">-->
                        <div class="flex items-center gap-4 text-orange-500">
                            <img src="{{ asset('img/logoneu.png') }}" alt="Ikon" class="w-16 h-16 object-cover rounded-xl">
                            <span class="font-medium text-lg">Booking Wedding Neumories</span>
                        </div>
                <!--        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">-->
                <!--            <span class="text-rose-500">Capture</span> Your <br />-->
                <!--            Best Wedding <br />-->
                <!--            Moments-->
                <!--        </h1>-->

                <!--        <p class="text-gray-600 text-lg max-w-md">-->
                <!--            Let's find your dream destinations. Here, we recommend beautiful places and affordable trips for-->
                <!--            you and your beloved family.-->
                <!--        </p>-->

                <!--    </div>-->
                    <!-- Bagian Gambar -->
                <!--    <div class="lg:w-1/3">-->
                <!--        <img src="{{ asset('img/image33.png') }}" alt="Deskripsi Gambar"-->
                <!--            class="w-full h-auto rounded-2xl shadow-md">-->
                <!--    </div>-->
                <!--</div>-->


             

            <!-- Main Content -->
           <div class="flex justify-center">
    <!-- Centered Form Section -->
    <div class="w-full max-w-2xl">
        <div class="space-y-6 mb-8">
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

                    <!--<form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data"-->
                    <!--    class="bg-white/50 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-3xl shadow-lg">-->
                    <!--    @csrf-->
                    <!--    <div class="space-y-6 lg:space-y-8">-->
                            <!-- Personal Details -->
                    <!--        <div class="space-y-4 lg:space-y-6">-->
                    <!--            <h3 class="text-base lg:text-lg font-semibold text-gray-900">Personal Information</h3>-->
                    <!--            <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">-->
                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="text" name="full_name" required-->
                    <!--                        class="w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-100"-->

                    <!--                            placeholder=" ">-->
                    <!--                        <label-->
                    <!--                            class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all-->
                    <!--                            peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base-->
                    <!--                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">-->
                    <!--                            Full Name-->
                    <!--                        </label>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="tel" name="phone_number" required-->
                    <!--                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder=" ">-->
                    <!--                        <label-->
                    <!--                            class="absolute left-6 top-4 text-gray-500 text-sm transition-all-->
                    <!--                            peer-placeholder-shown:top-4 peer-placeholder-shown:text-base-->
                    <!--                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">-->
                    <!--                            Phone Number-->
                    <!--                        </label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">-->
                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="text" name="instagram_username" required-->
                    <!--                            class="peer w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder=" ">-->
                    <!--                        <label-->
                    <!--                            class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all-->
                    <!--                            peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base-->
                    <!--                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">-->
                    <!--                            Instagram Username-->
                    <!--                        </label>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="email" name="email" required-->
                    <!--                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder=" ">-->
                    <!--                        <label-->
                    <!--                            class="absolute left-6 top-4 text-gray-500 text-sm transition-all-->
                    <!--                            peer-placeholder-shown:top-4 peer-placeholder-shown:text-base-->
                    <!--                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">-->
                    <!--                            Email Address-->
                    <!--                        </label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">-->
                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="date" name="event_date" required-->
                    <!--                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder="">-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="time" name="event_time" required-->
                    <!--                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder=" ">-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">-->
                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <select name="package" required-->
                    <!--                            class="w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all appearance-none">-->
                    <!--                            <option value="">Select Photography Package</option>-->
                    <!--                            @foreach ($packages as $package)-->
                    <!--                                <option value="{{ $package->id }}">{{ $package->name }} (Rp-->
                    <!--                                    {{ number_format($package->price, 0, ',', '.') }})</option>-->
                    <!--                            @endforeach-->
                    <!--                        </select>-->

                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <input type="text" name="event_address" required-->
                    <!--                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"-->
                    <!--                            placeholder=" ">-->
                    <!--                        <label-->
                    <!--                            class="absolute left-6 top-4 text-gray-500 text-sm transition-all-->
                    <!--                            peer-placeholder-shown:top-4 peer-placeholder-shown:text-base-->
                    <!--                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">-->
                    <!--                            Event Address-->
                    <!--                        </label>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">-->

                    <!--                <input type="hidden" name="price" id="price">-->

                    <!--                <div class="group">-->
                    <!--                    <div class="relative">-->
                    <!--                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->

                    <!--        <button type="button" id="pay-button"-->
                    <!--            class="w-full h-12 lg:h-14 bg-rose-500 text-white rounded-xl hover:bg-rose-600 transition-all">-->
                    <!--            Book Your Session-->
                    <!--        </button>-->

                    <!--    </div>-->
                    <!--</form>-->
<form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data"
    class="bg-white/50 backdrop-blur-sm p-6 lg:p-8 rounded-3xl shadow-lg space-y-6">
    @csrf

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        {{-- Full Name --}}
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-user text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Full Name</label>
                <input type="text" name="full_name" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Phone Number --}}
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-phone text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Phone Number</label>
                <input type="tel" name="phone_number" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Instagram Username --}}
        <div class="flex items-center gap-3">
            <i class="fa-brands fa-instagram text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Instagram Username</label>
                <input type="text" name="instagram_username" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Email Address --}}
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-envelope text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Email Address</label>
                <input type="email" name="email" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Event Date --}}
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-calendar-days text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Event Date</label>
                <input type="date" name="event_date" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Event Time --}}
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-clock text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Event Time</label>
                <input type="time" name="event_time" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Package Selection --}}
        <div class="flex items-center gap-3 sm:col-span-2">
            <i class="fa-solid fa-box text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Select Photography Package</label>
                <select name="package" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
                    <option value="">-- Choose Package --</option>
                    @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name }} (Rp {{ number_format($package->price, 0, ',', '.') }})</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Event Address --}}
        <div class="flex items-center gap-3 sm:col-span-2">
            <i class="fa-solid fa-location-dot text-rose-500 text-lg w-6"></i>
            <div class="w-full">
                <label class="block text-gray-700 text-sm font-medium mb-1">Event Address</label>
                <input type="text" name="event_address" required
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-200">
            </div>
        </div>

        {{-- Google reCAPTCHA --}}
        <div class="sm:col-span-2">
            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
        </div>

        {{-- Hidden Price Field --}}
        <input type="hidden" name="price" id="price">

    </div>

    {{-- Submit Button --}}
    <div class="pt-4">
        <button type="button" id="pay-button"
            class="w-full h-12 bg-rose-500 text-white font-semibold rounded-xl hover:bg-rose-600 transition-all">
            <i class="fa-solid fa-camera mr-2"></i> Book Your Session
        </button>
    </div>
</form>

<br>
                </div>

                {{-- modal --}}
                <div id="deposit-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center z-50">
                    <div class="bg-white rounded-3xl p-6 w-full max-w-md mx-4">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-semibold text-gray-900">Payment Options</h3>
                            <p class="text-gray-600 mt-2">Select your preferred payment method</p>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-rose-50 p-4 rounded-xl">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">Package Total:</span>
                                    <span class="font-semibold" id="package-total">Rp 0</span>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="radio" name="payment_type" value="full" checked class="w-5 h-5 text-rose-500">
                                    <div>
                                        <p class="font-medium">Pay Full Amount</p>
                                        <p class="text-sm text-gray-500">Pay the entire amount now</p>
                                    </div>
                                </label>

                                <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
                                    <input type="radio" name="payment_type" value="deposit" class="w-5 h-5 text-rose-500">
                                    <div>
                                        <p class="font-medium">Pay Deposit</p>
                                        <p class="text-sm text-gray-500">Pay a portion now, remainder later</p>
                                    </div>
                                </label>
                            </div>

                            <div id="deposit-input-container" class="hidden space-y-3">
                                <label class="block text-sm font-medium text-gray-700">Deposit Amount (Rp)</label>
                                <div class="relative">
                                    <input type="number" id="deposit-amount" min="0" step="10000"
                                           class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-rose-100 outline-none transition-all"
                                           placeholder="Enter deposit amount">
                                    <div class="absolute right-3 top-3 text-xs text-gray-500">
                                        <span id="deposit-percentage">0%</span> of total
                                    </div>
                                </div>
                                <div class="flex justify-between text-sm px-1">
                                    <span>Minimum: <span id="min-deposit">Rp 0</span></span>
                                    <span>Remaining: <span id="remaining-amount">Rp 0</span></span>
                                </div>
                            </div>

                            <div class="flex space-x-3 pt-4">
                                <button type="button" id="cancel-deposit-modal"
                                        class="flex-1 py-3 px-4 bg-gray-100 text-gray-800 rounded-xl hover:bg-gray-200 transition-all">
                                    Cancel
                                </button>
                                <button type="button" id="confirm-booking"
                                        class="flex-1 py-3 px-4 bg-rose-500 text-white rounded-xl hover:bg-rose-600 transition-all">
                                    Proceed to Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- akhir modal --}}

                <!-- Right: Image Gallery -->
            <!--    <div class="relative">-->
            <!--        <div class="absolute -left-4 top-1/4 z-10">-->
            <!--            <div class="bg-white/90 backdrop-blur-sm p-6 rounded-2xl shadow-lg animate-float-1">-->
            <!--                <div class="flex items-center gap-4">-->
            <!--                    <div class="p-3 bg-amber-50 rounded-xl">-->
            <!--                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none"-->
            <!--                            viewBox="0 0 24 24" stroke="currentColor">-->
            <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
            <!--                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />-->
            <!--                        </svg>-->
            <!--                    </div>-->
            <!--                    <div>-->
            <!--                        <p class="font-semibold text-gray-900">Premium</p>-->
            <!--                        <p class="text-sm text-gray-500">Quality Service</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->

                    <!-- Image Grid -->
            <!--        <div class="grid gap-4 sm:gap-6">-->
            <!--            <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">-->
            <!--                <img src="{{ asset('img/wed.jpg') }}" alt="Wedding Photo"-->
            <!--                    class="w-full aspect-[3/2] sm:aspect-video object-cover transition duration-700 group-hover:scale-105">-->
            <!--                <div-->
            <!--                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="grid grid-cols-2 gap-4 sm:gap-6">-->
            <!--                <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">-->
            <!--                    <img src="{{ asset('img/wed2.jpg') }}" alt="Wedding Photo"-->
            <!--                        class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">-->
            <!--                    <div-->
            <!--                        class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">-->
            <!--                    <img src="{{ asset('img/wed3.jpg') }}" alt="Wedding Photo"-->
            <!--                        class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">-->
            <!--                    <div-->
            <!--                        class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">-->
            <!--                <img src="{{ asset('img/wed4.jpg') }}" alt="Wedding Photo"-->
            <!--                    class="w-full aspect-[3/2] sm:aspect-video object-cover transition duration-700 group-hover:scale-105">-->
            <!--                <div-->
            <!--                    class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
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
 

    </main>
  <footer class="bg-rose-600 text-white py-8 px-4">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Brand Info -->
        <div>
            <h3 class="text-xl font-serif mb-4">Neumories</h3>
            <p class="text-sm">Capturing Your Timeless Moment</p>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-xl font-serif mb-4">Contact Us</h3>
            <p class="text-sm flex items-center mt-2">
                <i class="fas fa-envelope me-2"></i>
                <span>Neumories@gmail.com</span>
            </p>
            <p class="text-sm flex items-center mt-2">
                <i class="fas fa-phone me-2"></i>
                <span>0812-1844-3531</span>
            </p>
            <p class="text-sm flex items-center mt-2">
                <i class="fas fa-map-marker-alt me-2"></i>
                <span>Tangerang</span>
            </p>
        </div>

        <!-- Social Media -->
        <div>
            <h3 class="text-xl font-serif mb-4">Follow Us</h3>
            <div class="flex space-x-4 items-center">
                <a href="https://instagram.com/neumories" class="flex items-center hover:text-gray-300" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram text-lg me-2"></i>
                    <span>Instagram</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="max-w-6xl mx-auto mt-8 pt-4 border-t border-[#a99b8d] text-sm text-center">
        <p>&copy; 2025 Neumories Booking. All rights reserved.</p>
    </div>
</footer>


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
    const form = document.querySelector('form[action="{{ route('checkout') }}"]');
    const priceInput = document.getElementById('price');

    const depositModal = document.getElementById('deposit-modal');
    const packageTotalElement = document.getElementById('package-total');
    const paymentTypeInputs = document.querySelectorAll('input[name="payment_type"]');
    const depositInputContainer = document.getElementById('deposit-input-container');
    const depositAmountInput = document.getElementById('deposit-amount');
    const depositPercentageElement = document.getElementById('deposit-percentage');
    const minDepositElement = document.getElementById('min-deposit');
    const remainingAmountElement = document.getElementById('remaining-amount');
    const cancelDepositButton = document.getElementById('cancel-deposit-modal');
    const confirmBookingButton = document.getElementById('confirm-booking');

    let packagePrice = 0;
    let minDepositPercentage = 30;

    if (eventDateInput && packageSelect) {
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
                // Reset all options first
                Array.from(packageSelect.options).forEach(option => {
                    if (option.value !== '') {
                        option.disabled = false;
                        option.style.color = '';
                        option.style.fontWeight = '';
                        // Remove any previous status indicators
                        option.text = option.text.replace(/ \(Booked\)| \(Not Available\)| \(Only Photo Only Available\)/g, '');
                    }
                });

                if (!data.is_available && data.existing_bookings.length > 0) {
                    // Mark already booked packages
                    data.existing_bookings.forEach(booking => {
                        Array.from(packageSelect.options).forEach(option => {
                            if (option.value === booking.package_id.toString()) {
                                option.disabled = true;
                                option.text += ' (Booked)';
                                option.style.color = '#dc2626'; // Red color
                            }
                        });
                    });

                    // Handle exclusive package restrictions
                    if (data.has_exclusive_booking) {
                        Array.from(packageSelect.options).forEach(option => {
                            if (option.value !== '' && !option.disabled) {
                                option.disabled = true;
                                option.text += ' (Not Available)';
                                option.style.color = '#dc2626'; // Red color
                            }
                        });
                        
                        showDateRestrictionNotice('exclusive');
                    }
                    // Handle restricted package limitations - ONLY Photo Only allowed
                    else if (data.has_restricted_booking && data.only_photo_allowed) {
                        Array.from(packageSelect.options).forEach(option => {
                            if (option.value !== '' && !option.disabled) {
                                const optionText = option.text.split(' (')[0]; // Get package name without price
                                
                                // Only allow Photo Only package
                                if (optionText !== 'Photo Only') {
                                    option.disabled = true;
                                    option.text += ' (Not Available)';
                                    option.style.color = '#dc2626'; // Red color
                                } else {
                                    // Highlight Photo Only as the only available option
                                    option.style.color = '#059669'; // Green color
                                    option.style.fontWeight = 'bold';
                                }
                            }
                        });
                        
                        showDateRestrictionNotice('photo-only');
                    }
                }
            })
            .catch(error => {
                console.error('Error checking date availability:', error);
                showErrorNotice('Failed to check date availability. Please try again.');
            });
        });
    }

    // Function to show date restriction notices
    function showDateRestrictionNotice(type) {
        // Remove existing notices
        const existingNotice = document.getElementById('date-restriction-notice');
        if (existingNotice) {
            existingNotice.remove();
        }

        const notice = document.createElement('div');
        notice.id = 'date-restriction-notice';
        notice.className = 'mt-2 p-3 rounded-lg text-sm';
        
        if (type === 'exclusive') {
            notice.className += ' bg-red-50 text-red-700 border border-red-200';
            notice.innerHTML = `
                <div class="flex items-start">
                    <svg class="flex-shrink-0 w-5 h-5 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <strong>Date Not Available</strong><br>
                        An exclusive package is already booked for this date. No other packages can be booked.
                    </div>
                </div>
            `;
        } else if (type === 'photo-only') {
            notice.className += ' bg-blue-50 text-blue-700 border border-blue-200';
            notice.innerHTML = `
                <div class="flex items-start">
                    <svg class="flex-shrink-0 w-5 h-5 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <div>
                        <strong>Limited to Photo Only</strong><br>
                        A package is already booked for this date. Only "Photo Only" package is available for booking.
                    </div>
                </div>
            `;
        }
        
        packageSelect.parentNode.appendChild(notice);
    }

    // Function to show error notices
    function showErrorNotice(message) {
        const existingNotice = document.getElementById('date-restriction-notice');
        if (existingNotice) {
            existingNotice.remove();
        }

        const notice = document.createElement('div');
        notice.id = 'date-restriction-notice';
        notice.className = 'mt-2 p-3 rounded-lg text-sm bg-red-50 text-red-700 border border-red-200';
        notice.innerHTML = `
            <div class="flex items-start">
                <svg class="flex-shrink-0 w-5 h-5 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                </svg>
                <div>${message}</div>
            </div>
        `;
        
        packageSelect.parentNode.appendChild(notice);
    }

    // Rest of the existing JavaScript code for payment handling...
    if (packageSelect) {
        packageSelect.addEventListener('change', function() {
            const packageInfo = this.options[this.selectedIndex].text;
            const priceMatch = packageInfo.match(/\(Rp ([\d.,]+)\)/);

            if (priceMatch && priceMatch[1]) {
                const priceText = priceMatch[1].replace(/\./g, '');
                packagePrice = parseInt(priceText, 10);
                priceInput.value = packagePrice;

                packageTotalElement.textContent = `Rp ${formatNumber(packagePrice)}`;
                const minDeposit = Math.ceil(packagePrice * minDepositPercentage / 100);
                minDepositElement.textContent = `Rp ${formatNumber(minDeposit)}`;
                depositAmountInput.value = minDeposit;
                depositAmountInput.min = minDeposit;
                depositAmountInput.max = packagePrice;

                updateDepositCalculations();
            }
        });
        packageSelect.dispatchEvent(new Event('change'));
    }

    paymentTypeInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'deposit') {
                depositInputContainer.classList.remove('hidden');
            } else {
                depositInputContainer.classList.add('hidden');
            }
        });
    });

    if (depositAmountInput) {
        depositAmountInput.addEventListener('input', updateDepositCalculations);
    }

    function updateDepositCalculations() {
        if (!packagePrice) return;

        const depositAmount = parseInt(depositAmountInput.value) || 0;
        const percentage = (depositAmount / packagePrice * 100).toFixed(0);
        const remainingAmount = packagePrice - depositAmount;

        depositPercentageElement.textContent = `${percentage}%`;
        remainingAmountElement.textContent = `Rp ${formatNumber(remainingAmount)}`;

        const minDeposit = Math.ceil(packagePrice * minDepositPercentage / 100);
        if (depositAmount < minDeposit) {
            depositAmountInput.setCustomValidity(`Minimum deposit is Rp ${formatNumber(minDeposit)} (${minDepositPercentage}%)`);
        } else if (depositAmount > packagePrice) {
            depositAmountInput.setCustomValidity(`Maximum deposit is Rp ${formatNumber(packagePrice)}`);
        } else {
            depositAmountInput.setCustomValidity('');
        }
    }

    if (payButton) {
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            depositModal.classList.remove('hidden');
        });
    }

    if (cancelDepositButton) {
        cancelDepositButton.addEventListener('click', function() {
            depositModal.classList.add('hidden');
        });
    }

    if (confirmBookingButton) {
        confirmBookingButton.addEventListener('click', function() {
            const paymentType = document.querySelector('input[name="payment_type"]:checked').value;
            let paymentAmount = packagePrice;
            let isDeposit = false;

            if (paymentType === 'deposit') {
                const depositAmount = parseInt(depositAmountInput.value) || 0;
                const minDeposit = Math.ceil(packagePrice * minDepositPercentage / 100);

                if (depositAmount < minDeposit || depositAmount > packagePrice) {
                    depositAmountInput.reportValidity();
                    return;
                }

                paymentAmount = depositAmount;
                isDeposit = true;
            }

            confirmBookingButton.textContent = 'Processing...';
            confirmBookingButton.disabled = true;

            const formData = new FormData(form);
            formData.append('payment_type', paymentType);
            formData.append('payment_amount', paymentAmount);
            formData.append('is_deposit', isDeposit ? '1' : '0');

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
                            window.location.href = '/booking/success?id=' + result.order_id;
                        },
                        onError: function(result) {
                            console.log('Payment error:', result);
                            alert('Payment failed. Please try again.');
                            resetBookingButton();
                        },
                        onClose: function() {
                            console.log('Customer closed the payment window');
                            resetBookingButton();
                        }
                    });
                } else if (data.error) {
                    console.error('Error:', data.error);
                    alert('Error: ' + data.error);
                    resetBookingButton();
                } else {
                    throw new Error('No payment token received');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                resetBookingButton();
            });
        });
    }

    function resetBookingButton() {
        confirmBookingButton.textContent = 'Proceed to Payment';
        confirmBookingButton.disabled = false;
        depositModal.classList.add('hidden');
    }

    function saveTransactionResult(result) {
        console.log('Transaction result saved:', result);
    }

    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});
    </script>
@endsection
