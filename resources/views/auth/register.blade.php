<x-guest-layout>
    <!-- Background with gradient -->
    <div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-md">
            
            <!-- Header Section -->
            <div class="text-center mb-8">
                <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-2xl shadow-xl p-6 mb-6">
                    <!-- Custom SVG Logo: A stylized shield or badge representing membership/premium -->
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center justify-center mt-4">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 12C17.21 12 19 10.21 19 8S17.21 4 15 4 11 5.79 11 8 12.79 12 15 12ZM6 10V7H4V10H1V12H4V15H6V12H9V10H6ZM15 14C12.33 14 7 15.33 7 18V20H23V18C23 15.33 17.67 14 15 14Z"/>
                        </svg>
                        {{ __('Daftar') }}
                    </h2>
                    <p class="text-indigo-100 mt-2 text-lg">Buat akun Anda untuk akses premium</p>
                </div>
            </div>

            <!-- Registration Form Card -->
            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                <div class="p-8">
                    
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf

                        <!-- Name Field -->
                        <div class="space-y-2">
                            <x-input-label for="name" :value="__('Name')" class="text-gray-700 font-semibold" />
                            <x-text-input 
                                id="name" 
                                class="block mt-1 w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white hover:shadow-md" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name" 
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address Field -->
                        <div class="mt-4 space-y-2">
                            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
                            <x-text-input 
                                id="email" 
                                class="block mt-1 w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white hover:shadow-md" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autocomplete="username" 
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password Field -->
                        <div class="mt-4 space-y-2">
                            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
                            <x-text-input 
                                id="password" 
                                class="block mt-1 w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white hover:shadow-md"
                                type="password"
                                name="password"
                                required 
                                autocomplete="new-password" 
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mt-4 space-y-2">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 font-semibold" />
                            <x-text-input 
                                id="password_confirmation" 
                                class="block mt-1 w-full px-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white hover:shadow-md"
                                type="password"
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password" 
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Register Button and Already Registered link -->
                        <div class="flex flex-col space-y-4 mt-6">
                            <x-primary-button class="w-full justify-center py-3 px-6 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02]">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>

                    {{-- Separator --}}
                    <div class="flex items-center my-8">
                        <hr class="flex-grow border-t border-gray-200">
                        <span class="mx-4 text-gray-500 font-medium bg-white/50 px-3 py-1 rounded-full text-sm">ATAU</span>
                        <hr class="flex-grow border-t border-gray-200">
                    </div>

                    {{-- Social Register Buttons --}}
                    <div class="space-y-3">
                        <!-- Google Register -->
                        <a 
                            href="{{ route('social.login', 'google') }}" 
                            class="group w-full inline-flex items-center justify-center px-6 py-3 bg-white border border-gray-200 rounded-xl font-semibold text-gray-700 hover:bg-red-50 hover:border-red-200 hover:text-red-600 shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.02]"
                        >
                            <svg class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12.0003 4.28694C14.0211 4.28694 15.8239 5.04944 17.2003 6.32623L20.2003 3.32623C18.0003 1.29177 15.1003 0 12.0003 0C7.20033 0 3.00033 2.61058 0.600326 6.32623L4.60033 9.32623C5.70033 6.94191 8.60033 4.28694 12.0003 4.28694Z" fill="#EA4335"></path>
                                <path d="M23.3601 11.2173H22.9201L22.8301 10.7418H12.0001V13.8698H18.7801C18.6601 14.5463 18.2701 15.5458 17.6501 16.2917C16.8901 17.2158 15.8001 18.0663 14.6501 18.7428L18.6501 21.7428C21.1601 19.3585 23.3601 15.7538 23.3601 11.2173Z" fill="#4285F4"></path>
                                <path d="M0.600326 6.32623C0.210326 7.42571 0 8.71714 0 10.1583C0 11.5995 0.210326 12.8909 0.600326 13.9904L4.60033 10.9904C4.19033 9.94191 4.19033 7.84686 4.60033 6.7984Z" fill="#FBBC04"></path>
                                <path d="M12.0001 23.9998C15.1001 23.9998 17.8001 22.8463 19.8001 20.8118L15.8001 17.8118C14.6501 18.5743 13.5601 19.1868 12.0001 19.1868C8.60013 19.1868 5.70013 17.0917 4.60013 14.7075L0.600126 17.7075C3.00013 21.4231 7.20013 23.9998 12.0001 23.9998Z" fill="#34A853"></path>
                            </svg>
                            <span>Register with Google</span>
                        </a>

                        <!-- Facebook Register -->
                        <a 
                            href="{{ route('social.login', 'facebook') }}" 
                            class="group w-full inline-flex items-center justify-center px-6 py-3 bg-white border border-gray-200 rounded-xl font-semibold text-gray-700 hover:bg-blue-50 hover:border-blue-200 hover:text-blue-600 shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.02]"
                        >
                            <svg class="w-5 h-5 mr-3 group-hover:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.35C0 23.407.593 24 1.325 24h11.496v-9.294H9.692V11.237h3.129V8.798c0-3.09 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.916.001c-1.503 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.666h-3.12V24h6.115c.732 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z"/>
                            </svg>
                            <span>Register with Facebook</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-500">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition-colors duration-200">Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
