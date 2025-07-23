<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 rounded-2xl shadow-xl p-8 mx-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                            <path d="M8 6h4v2H8V6zM8 10h4v2H8v-2z"/>
                        </svg>
                        {{ __('Dasar-Dasar Keanggotaan: Memulai') }}
                    </h2>
                    <p class="text-emerald-100 mt-2 text-lg">Panduan lengkap untuk memulai perjalanan Anda</p>
                </div>
                <div class="hidden md:flex items-center space-x-2">
                    <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">Reguler</span>
                    <span class="bg-emerald-400 text-emerald-900 px-3 py-1 rounded-full text-sm font-bold">Tipe A</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb -->
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
                        <li class="text-emerald-600 font-medium">Artikel Tipe A</li>
                    </ol>
                </div>
            </nav>

            <!-- Main Article Card -->
            <article class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                
                <!-- Article Header -->
                <div class="bg-gradient-to-r from-emerald-500 to-teal-500 px-8 py-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-3">
                                <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Artikel #1</span>
                                <span class="bg-emerald-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-bold">Pemula</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 leading-tight">
                                Pengantar Aplikasi Membership
                            </h1>
                            <p class="text-emerald-100 text-lg">Langkah pertama menuju pengalaman premium Anda</p>
                        </div>
                        <div class="hidden md:block w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center ml-6">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="p-8 md:p-12">
                    
                    <!-- Welcome Section -->
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 mb-8 border-l-4 border-emerald-500">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Selamat Datang di Platform Kami!</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Terima kasih telah bergabung dengan komunitas eksklusif kami. Artikel ini akan memperkenalkan Anda pada fitur-fitur dasar dan bagaimana memulai perjalanan premium Anda bersama kami.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="prose prose-lg max-w-none">
                        
                        <!-- Membership Benefits -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                Manfaat Keanggotaan Tipe A
                            </h3>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Sebagai anggota <span class="font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">Tipe A</span>, Anda memiliki akses ke konten dasar yang esensial untuk memahami platform kami. Paket ini dirancang khusus untuk memberikan fondasi yang kuat dalam perjalanan membership Anda.
                                </p>
                                
                                <!-- Benefits Grid -->
                                <div class="grid md:grid-cols-2 gap-4 mt-6">
                                    <div class="flex items-center p-4 bg-emerald-50 rounded-xl">
                                        <div class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                                                <path d="M8 6h4v2H8V6zM8 10h4v2H8v-2z"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-emerald-800">3 Artikel Pengantar</span>
                                    </div>
                                    <div class="flex items-center p-4 bg-teal-50 rounded-xl">
                                        <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-teal-800">3 Video Tutorial</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Getting Started -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                Mulai Perjalanan Anda
                            </h3>
                            
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-200">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Kami senang Anda bergabung dengan kami! Platform ini dirancang untuk memberikan pengalaman terbaik dalam mengakses konten premium. Jelajahi bagian <span class="font-semibold text-blue-600">"Akses Konten"</span> di Dashboard untuk menemukan artikel dan video lain yang tersedia untuk tipe keanggotaan Anda.
                                </p>
                                
                                <!-- Call to Action -->
                                <div class="flex items-center justify-between bg-white rounded-xl p-4 mt-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Kembali ke Dashboard</p>
                                            <p class="text-sm text-gray-500">Eksplorasi lebih banyak konten</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-xl transition-colors duration-200 flex items-center">
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

                <!-- Article Footer -->
                <div class="bg-gray-50 px-8 py-6 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <em>Artikel ini dapat diakses oleh semua tipe membership (A, B, C)</em>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Tipe A</span>
                            <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-medium">Tipe B</span>
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Tipe C</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation Section -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                
                <!-- Previous Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200">
                    <div class="flex items-center text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Artikel Sebelumnya</span>
                    </div>
                    <p class="text-gray-400 text-sm mt-1">Tidak ada</p>
                </div>

                <!-- Current Position -->
                <div class="bg-emerald-500 rounded-xl p-4 shadow-lg text-white text-center">
                    <p class="font-semibold">Artikel 1 dari 3</p>
                    <p class="text-emerald-100 text-sm">Seri Pengantar</p>
                </div>

                <!-- Next Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200 cursor-pointer hover:bg-white/80">
                    <div class="flex items-center justify-end text-emerald-600">
                        <span class="text-sm">Artikel Selanjutnya</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-emerald-700 text-sm mt-1 text-right font-medium">Fitur Lanjutan</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>