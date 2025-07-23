<x-app-layout>
    <x-slot name="header">
        <!-- Header section with gradient background, icon, title, subtitle, and membership tags -->
        <div class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 rounded-2xl shadow-xl p-8 mx-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                        <!-- Icon for video content (e.g., a play button) -->
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                        </svg>
                        {{ __('Video Tutorial: Navigasi Antarmuka Pengguna') }}
                    </h2>
                    <p class="text-emerald-100 mt-2 text-lg">Panduan visual untuk memulai perjalanan Anda</p>
                </div>
                <div class="hidden md:flex items-center space-x-2">
                    <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">Tutorial</span>
                    <span class="bg-emerald-400 text-emerald-900 px-3 py-1 rounded-full text-sm font-bold">Tipe A</span>
                </div>
            </div>
        </div>
    </x-slot>

    <!-- Main content area with a gradient background -->
    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="mb-8">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-white/20">
                    <ol class="flex items-center space-x-2 text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-emerald-600 transition-colors duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L9 5.414V17a1 1 0 102 0V5.414l5.293 5.293a1 1 0 001.414-1.414l-7-7z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <li class="text-emerald-600 font-medium">Video Tipe A</li>
                    </ol>
                </div>
            </nav>

            <!-- Main Video Card -->
            <article class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                
                <!-- Video Header -->
                <div class="bg-gradient-to-r from-emerald-500 to-teal-500 px-8 py-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-3">
                                <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Video #1</span>
                                <span class="bg-emerald-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-bold">Pemula</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 leading-tight">
                                Tour Aplikasi Anda
                            </h1>
                            <p class="text-emerald-100 text-lg">Panduan visual untuk mengenal platform kami</p>
                        </div>
                        <div class="hidden md:block w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center ml-6">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Video Content -->
                <div class="p-8 md:p-12">
                    
                    <!-- Video Player Section -->
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 mb-8 border-l-4 border-emerald-500">
                        <div class="flex flex-col items-start">
                            <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center mb-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Tonton Tutorial Lengkapnya</h3>
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Video ini akan memandu Anda mengenal antarmuka pengguna kami. Pelajari cara menemukan konten, mengelola profil, dan memanfaatkan fitur dasar sebagai anggota <span class="font-bold text-emerald-600 bg-emerald-100 px-2 py-1 rounded-lg">Tipe A</span>.
                                </p>
                                <div class="aspect-video w-full bg-gray-200 flex items-center justify-center text-gray-500 rounded-lg overflow-hidden shadow-lg border border-gray-300">
                                    <!-- Placeholder for video embed -->
                                    {{-- <p class="text-lg font-semibold">Simulasi Video Player untuk Tutorial Dasar</p> --}}
                                    {{-- Uncomment and replace VIDEO_ID_HERE with actual YouTube/Vimeo ID --}}
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="prose prose-lg max-w-none">
                        
                        <!-- Video Highlights -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                Poin Penting Video
                            </h3>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Video ini mencakup dasar-dasar navigasi dan fitur kunci yang akan membantu Anda memulai pengalaman membership Anda dengan lancar.
                                </p>
                                
                                <!-- Highlights List -->
                                <ul class="list-none p-0 m-0 space-y-3">
                                    <li class="flex items-center p-3 bg-emerald-50 rounded-xl">
                                        <div class="w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-emerald-800">Pengenalan Dashboard</span>
                                    </li>
                                    <li class="flex items-center p-3 bg-teal-50 rounded-xl">
                                        <div class="w-6 h-6 bg-teal-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-teal-800">Mencari Konten</span>
                                    </li>
                                    <li class="flex items-center p-3 bg-cyan-50 rounded-xl">
                                        <div class="w-6 h-6 bg-cyan-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-cyan-800">Mengelola Profil</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                Lanjutkan Belajar
                            </h3>
                            
                            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-200">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Siap untuk mempelajari lebih banyak? Jelajahi video tutorial lainnya yang tersedia untuk tipe keanggotaan Anda di Dashboard.
                                </p>
                                
                                <!-- CTA Button -->
                                <div class="flex items-center justify-between bg-white rounded-xl p-4 mt-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-indigo-500 rounded-xl flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Kembali ke Dashboard</p>
                                            <p class="text-sm text-gray-500">Temukan lebih banyak tutorial</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-xl transition-colors duration-200 flex items-center">
                                        <span class="mr-2">Jelajahi</span>
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Footer -->
                <div class="bg-gray-50 px-8 py-6 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <em>Video ini dapat diakses oleh semua tipe membership (A, B, C)</em>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tipe A</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Tipe B</span>
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Tipe C</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation Section -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                
                <!-- Previous Video -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200">
                    <div class="flex items-center text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Video Sebelumnya</span>
                    </div>
                    <p class="text-gray-400 text-sm mt-1">Tidak ada</p>
                </div>

                <!-- Current Position -->
                <div class="bg-emerald-500 rounded-xl p-4 shadow-lg text-white text-center">
                    <p class="font-semibold">Video 1 dari 3</p>
                    <p class="text-emerald-100 text-sm">Seri Pengantar</p>
                </div>

                <!-- Next Video -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200 cursor-pointer hover:bg-white/80">
                    <div class="flex items-center justify-end text-emerald-600">
                        <span class="text-sm">Video Selanjutnya</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <a href="{{ route('video.tipe-b') }}" class="text-emerald-700 text-sm mt-1 text-right font-medium">Fitur Lanjutan</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
