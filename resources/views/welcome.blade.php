@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-rose-50 via-white to-rose-50/20">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-20">
        <!-- Stats Bar - Responsive -->
        <div class="md:mb-20">

            <div class="space-y-8">
                <div class="flex items-center gap-4 text-orange-500">
                    <img src="{{ asset('img/icon1.jpg') }}" alt="Mountain scene" class="w-16 h-16 object-cover rounded-xl">
                    <span class="font-medium text-lg">Explore Your Life</span>
                </div>
                
    
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Discover The <br/>
                    Best Destinations <br/>
                    In The World
                </h1>
    
                <p class="text-gray-600 text-lg max-w-md">
                    Let's find you dream destinations here we will recommend you a beautiful place and a cheap trip with your beloved family.
                </p>
    
                <div class="bg-gray-50 p-4 rounded-2xl flex flex-col md:flex-row gap-4">
                    <div class="flex-1 flex items-center gap-3">
                        <div class="p-3 bg-white rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm text-gray-500">Location</label>
                            <input type="text" placeholder="Where are you going?" class="w-full bg-transparent border-none p-0 focus:ring-0 text-gray-800">
                        </div>
                    </div>
    
                    <div class="flex-1 flex items-center gap-3">
                        <div class="p-3 bg-white rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm text-gray-500">Select Date</label>
                            <input type="date" class="w-full bg-transparent border-none p-0 focus:ring-0 text-gray-800">
                        </div>
                    </div>
    
                    <button class="bg-orange-500 text-white px-8 py-4 rounded-xl hover:bg-orange-600 transition-colors">
                        Get Started
                    </button>
                </div>
            </div>
  
            <img src="{{ asset('img/wed.jpg') }}" alt="Hot air balloon" class="w-full h-64 object-cover rounded-2xl">
            <img src="{{ asset('img/wed2.jpg') }}" alt="Beach walkway" class="w-full h-64 object-cover rounded-2xl">
            <img src="{{ asset('img/wed3.jpg') }}" alt="Tropical scene" class="w-full h-64 object-cover rounded-2xl">
            <img src="{{ asset('img/wed4.jpg') }}" alt="Mountain scene" class="w-full h-64 object-cover rounded-2xl">

            <div class="flex flex-col md:flex-row justify-between items-center mb-20 bg-white/50 backdrop-blur-sm p-6 rounded-3xl shadow-sm">
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-12 mb-4 sm:mb-0">
                    <!-- Item 1 -->
                    <div class="flex flex-col items-center gap-2">
                        <div class="p-3 bg-rose-50 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <p class="md:text-3xl text-xl font-bold text-gray-900">98%</p>
                            <p class="text-sm text-gray-500">Success Rate</p>
                        </div>
                    </div>
                </div>
            
                <!-- Button -->
                <div class="flex items-center gap-3 px-6 py-3 bg-rose-500 text-white rounded-2xl hover:bg-rose-600 transition-colors cursor-pointer">
                    <span class="font-medium">View Gallery</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>
            </div>
            
            
            <!-- Mobile Stats -->
            {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:text-2xl">
                <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl shadow-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-2 bg-rose-50 rounded-xl mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <p class="text-xl font-bold text-gray-900">1.2K+</p>
                        <p class="text-xs text-gray-500">Happy Clients</p>
                    </div>
                </div>
                <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl shadow-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-2 bg-blue-50 rounded-xl mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </div>
                        <p class="text-xl font-bold text-gray-900">15+</p>
                        <p class="text-xs text-gray-500">Years Experience</p>
                    </div>
                </div>
                <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl shadow-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-2 bg-green-50 rounded-xl mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-xl font-bold text-gray-900">98%</p>
                        <p class="text-xs text-gray-500">Success Rate</p>
                    </div>
                </div>
                <div class="bg-white/50 backdrop-blur-sm p-4 rounded-2xl shadow-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-2 bg-amber-50 rounded-xl mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <p class="text-xl font-bold text-gray-900">5.0</p>
                        <p class="text-xs text-gray-500">Rating</p>
                    </div>
                </div>
            </div> --}}

            
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

                <!-- Booking Form -->
                <form action="" method="POST" enctype="multipart/form-data" 
                class="bg-white/50 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-3xl shadow-lg">
              @csrf
              <div class="space-y-6 lg:space-y-8">
                  <!-- Personal Details -->
                  <div class="space-y-4 lg:space-y-6">
                      <h3 class="text-base lg:text-lg font-semibold text-gray-900">Personal Information</h3>
                      <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                          <div class="group">
                              <div class="relative">
                                  <input type="text" required
                                      class="peer w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                      placeholder=" ">
                                  <label class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all 
                                              peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base 
                                              peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                      Full Name
                                  </label>
                              </div>
                          </div>
     
                                <div class="group">
                                    <div class="relative">
                                        <input type="tel" required
                                            class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                            placeholder=" ">
                                        <label class="absolute left-6 top-4 text-gray-500 text-sm transition-all 
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
                                <input type="text" required
                                    class="peer w-full h-12 lg:h-14 px-4 lg:px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                    placeholder=" ">
                                <label class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all 
                                            peer-placeholder-shown:top-3.5 lg:peer-placeholder-shown:top-4 peer-placeholder-shown:text-base 
                                            peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                            Instagram Username
                                </label>
                            </div>
                        </div>
   
                              <div class="group">
                                  <div class="relative">
                                      <input type="email" required
                                          class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                          placeholder=" ">
                                      <label class="absolute left-6 top-4 text-gray-500 text-sm transition-all 
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
                                <input type="date" required
                                    class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                    placeholder="">
                                <label class="absolute left-4 lg:left-6 top-3.5 lg:top-4 text-gray-500 text-sm transition-all 
                                            ">
                                 
                                </label>
                            </div>
                        </div>
   
                              <div class="group">
                                  <div class="relative">
                                      <input type="time" required
                                          class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                          placeholder=" ">
                                      <label class="absolute left-6 top-4 text-gray-500 text-sm transition-all 
                                                  peer-placeholder-shown:top-4 peer-placeholder-shown:text-base 
                                                  peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                             
                                      </label>
                                  </div>
                              </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                        <div class="group">
                            <div class="relative">
                                <select required
                                class="w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all appearance-none">
                                <option value="">Select Photography Package</option>
                                <option>Before Wedding - Neubasic</option>
                                <option>Before Wedding - Neusweat</option>
                                <option>Traditional Sessions</option>
                                <option>Pre wedding Package</option>
                                <option>Wedding Intimate</option>
                                <option>Wedding Day Package</option>
                            </select>
                            </div>
                        </div>
   
                              <div class="group">
                                  <div class="relative">
                                      <input type="text" required
                                          class="peer w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all"
                                          placeholder=" ">
                                      <label class="absolute left-6 top-4 text-gray-500 text-sm transition-all 
                                                  peer-placeholder-shown:top-4 peer-placeholder-shown:text-base 
                                                  peer-focus:top-0 peer-focus:text-sm peer-focus:text-rose-500">
                                                  Event Address
                                      </label>
                                  </div>
                              </div>
                    </div>

                    
                    <div class="grid sm:grid-cols-2 gap-4 lg:gap-6">
                        <div class="group">
                            <div class="relative">
                                <input type="file" required
                                class="w-full h-14 px-6 bg-white rounded-xl border-0 shadow-sm outline-none ring-0 focus:ring-2 focus:ring-rose-100 transition-all
                                       file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 
                                       file:text-sm file:font-medium file:bg-rose-50 file:text-rose-500 
                                       hover:file:bg-rose-100">
                            <label class="absolute left-6 -top-6 text-gray-500 text-sm">
                                Payment Proof
                            </label>
                            </div>
                        </div>
   
                              <div class="group">
                                  <div class="relative">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                  </div>
                              </div>
                    </div>
                  </div>

                  <!-- [Other form sections with similar responsive adjustments] -->

                  <!-- Submit Button -->
                  <button type="submit" 
                      class="w-full h-12 lg:h-14 bg-rose-500 text-white rounded-xl hover:bg-rose-600 
                             transition-all duration-200 font-medium shadow-sm hover:shadow
                             flex items-center justify-center gap-2 group">
                      <span>Book Your Session</span>
                      <svg xmlns="http://www.w3.org/2000/svg" 
                           class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" 
                           fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                      </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
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
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 sm:gap-6">
                        <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                            <img src="{{ asset('img/wed2.jpg') }}" alt="Wedding Photo" 
                                class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                            <img src="{{ asset('img/wed3.jpg') }}" alt="Wedding Photo" 
                                class="w-full aspect-[4/5] sm:aspect-square object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>

                    <div class="relative group rounded-2xl lg:rounded-3xl overflow-hidden">
                        <img src="{{ asset('img/wed4.jpg') }}" alt="Wedding Photo" 
                            class="w-full aspect-[3/2] sm:aspect-video object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<style>
@keyframes float-1 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(0, -10px); }
}

.animate-float-1 {
    animation: float-1 6s ease-in-out infinite;
}
</style>
@endsection