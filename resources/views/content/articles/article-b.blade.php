<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-amber-600 via-orange-600 to-red-600 rounded-2xl shadow-xl p-8 mx-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {{ __('Strategi Lanjutan: Mengoptimalkan Pengalaman Anda') }}
                    </h2>
                    <p class="text-amber-100 mt-2 text-lg">Tingkatkan skills dengan konten premium eksklusif</p>
                </div>
                <div class="hidden md:flex items-center space-x-2">
                    <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">Premium</span>
                    <span class="bg-amber-300 text-amber-900 px-3 py-1 rounded-full text-sm font-bold">Tipe B</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-amber-50 to-orange-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-white/20">
                    <ol class="flex items-center space-x-2 text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-amber-600 transition-colors duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L9 5.414V17a1 1 0 102 0V5.414l5.293 5.293a1 1 0 001.414-1.414l-7-7z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <li class="text-amber-600 font-medium">Artikel Tipe B</li>
                    </ol>
                </div>
            </nav>

            <!-- Premium Badge -->
            <div class="mb-6">
                <div class="bg-gradient-to-r from-amber-500 to-orange-500 rounded-2xl p-4 shadow-lg">
                    <div class="flex items-center justify-center text-white">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="font-bold text-lg">KONTEN PREMIUM EKSKLUSIF</span>
                        <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Main Article Card -->
            <article class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                
                <!-- Article Header -->
                <div class="bg-gradient-to-r from-amber-500 to-orange-500 px-8 py-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-3">
                                <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Artikel #2</span>
                                <span class="bg-amber-200 text-amber-900 px-3 py-1 rounded-full text-sm font-bold">Lanjutan</span>
                                <span class="bg-red-200 text-red-900 px-3 py-1 rounded-full text-sm font-bold ml-2">Premium</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 leading-tight">
                                Analisis Mendalam Fitur Premium
                            </h1>
                            <p class="text-amber-100 text-lg">Strategi eksklusif untuk memaksimalkan potensi Anda</p>
                        </div>
                        <div class="hidden md:block w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center ml-6">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="p-8 md:p-12">
                    
                    <!-- Premium Access Alert -->
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 mb-8 border-l-4 border-amber-500">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Akses Premium Eksklusif</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Selamat! Sebagai anggota <span class="font-bold text-amber-600 bg-amber-100 px-2 py-1 rounded-lg">Tipe B</span> atau lebih tinggi, Anda kini memiliki akses ke konten yang lebih mendalam dan strategi tingkat lanjut yang tidak tersedia untuk anggota reguler.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="prose prose-lg max-w-none">
                        
                        <!-- Advanced Features -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-orange-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.504 1.132a1 1 0 01.992 0l1.75 1a1 1 0 11-.992 1.736L10 3.152l-1.254.716a1 1 0 11-.992-1.736l1.75-1zM5.618 4.504a1 1 0 01-.372 1.364L5.016 6l.23.132a1 1 0 11-.992 1.736L3 7.723V8a1 1 0 01-2 0V6a.996.996 0 01.52-.878l1.734-.99a1 1 0 011.364.372zm8.764 0a1 1 0 011.364-.372l1.733.99A1.002 1.002 0 0118 6v2a1 1 0 11-2 0v-.277l-1.254.145a1 1 0 11-.992-1.736l.23-.132-.23-.132a1 1 0 01-.372-1.364zm-7 4a1 1 0 011.364-.372L10 8.848l1.254-.716a1 1 0 11.992 1.736L11 10.152V12a1 1 0 11-2 0v-1.848l-1.246-.284a1 1 0 01-.372-1.364zM3 11a1 1 0 011 1v.277l1.254-.145a1 1 0 01.992 1.736l-.23.132.23.132a1 1 0 01-.372 1.364l-1.733.99A1.002 1.002 0 013 15v-2a1 1 0 011-1zm14 0a1 1 0 011 1v2a.996.996 0 01-.52.878l-1.734.99a1 1 0 11-1.364-.372l.23-.132-.23-.132a1 1 0 11.992-1.736L17 12.277V12a1 1 0 011-1zm-9.618 5.504a1 1 0 011.364.372l.254.145V16a1 1 0 112 0v1.021l.254-.145a1 1 0 11.992 1.736l-1.735.992a.995.995 0 01-1.022 0l-1.735-.992a1 1 0 01-.372-1.364z"/>
                                    </svg>
                                </div>
                                Fitur Premium Yang Anda Dapatkan
                            </h3>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    Artikel ini membahas detail fitur-fitur premium yang dapat membantu Anda mendapatkan hasil maksimal dari keanggotaan Anda. Setiap strategi telah diuji dan terbukti memberikan ROI yang signifikan.
                                </p>
                                
                                <!-- Premium Features Grid -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-gradient-to-br from-amber-50 to-yellow-50 p-6 rounded-xl border border-amber-200">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center mr-3">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-amber-800">Studi Kasus Mendalam</h4>
                                        </div>
                                        <p class="text-amber-700 text-sm">Analisis detail dari implementasi nyata dengan data dan metrik yang terukur</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-orange-50 to-red-50 p-6 rounded-xl border border-orange-200">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-orange-500 rounded-xl flex items-center justify-center mr-3">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-orange-800">Tips Pro Eksklusif</h4>
                                        </div>
                                        <p class="text-orange-700 text-sm">Strategi rahasia yang hanya diketahui oleh praktisi tingkat expert</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-red-50 to-pink-50 p-6 rounded-xl border border-red-200">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-red-500 rounded-xl flex items-center justify-center mr-3">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-red-800">Trik Tersembunyi</h4>
                                        </div>
                                        <p class="text-red-700 text-sm">Fitur-fitur tersembunyi yang dapat meningkatkan produktivitas secara drastis</p>
                                    </div>

                                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 p-6 rounded-xl border border-purple-200">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-purple-500 rounded-xl flex items-center justify-center mr-3">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-purple-800">Analytics Premium</h4>
                                        </div>
                                        <p class="text-purple-700 text-sm">Dashboard analytics mendalam dengan insights yang actionable</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Exclusive Content -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                Konten Eksklusif Menanti Anda
                            </h3>
                            
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-200">
                                <p class="text-gray-700 leading-relaxed mb-6">
                                    Tingkatkan pengetahuan Anda dengan mengakses koleksi konten premium kami yang eksklusif untuk anggota Tipe B dan C. Setiap materi telah dikurasi khusus untuk memberikan value maksimal.
                                </p>
                                
                                <!-- Content Stats -->
                                <div class="grid md:grid-cols-2 gap-6 mb-6">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-purple-100">
                                        <div class="flex items-center mb-4">
                                            <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                                                    <path d="M8 6h4v2H8V6zM8 10h4v2H8v-2z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl text-purple-800">10 Artikel</h4>
                                                <p class="text-purple-600 text-sm">Strategi mendalam & case studies</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-pink-100">
                                        <div class="flex items-center mb-4">
                                            <div class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center mr-4">
                                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-xl text-pink-800">10 Video</h4>
                                                <p class="text-pink-600 text-sm">Tutorial premium & webinar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <div class="flex items-center justify-between bg-white rounded-xl p-6 shadow-lg">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-800">Jelajahi Semua Konten Premium</p>
                                            <p class="text-sm text-gray-500">Akses unlimited ke seluruh library</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-6 py-3 rounded-xl transition-all duration-200 flex items-center shadow-lg hover:shadow-xl">
                                        <span class="mr-2 font-medium">Mulai Sekarang</span>
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
                            <em>Artikel ini hanya dapat diakses oleh member Tipe B dan C</em>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-sm font-medium">Tipe B</span>
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Tipe C</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation Section -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                
                <!-- Previous Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200 cursor-pointer hover:bg-white/80">
                    <div class="flex items-center text-amber-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Artikel Sebelumnya</span>
                    </div>
                    <p class="text-amber-700 text-sm mt-1 font-medium">Pengantar Aplikasi</p>
                </div>

                <!-- Current Position -->
                <div class="bg-amber-500 rounded-xl p-4 shadow-lg text-white text-center">
                    <p class="font-semibold">Artikel 2 dari 3</p>
                    <p class="text-amber-100 text-sm">Seri Premium</p>
                </div>

                <!-- Next Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200 cursor-pointer hover:bg-white/80">
                    <div class="flex items-center justify-end text-amber-600">
                        <span class="text-sm">Artikel Selanjutnya</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-amber-700 text-sm mt-1 text-right font-medium">Master Class</p>
                </div>
            </div>

            <!-- Premium Upgrade Banner (Optional for Type A users) -->
            <div class="mt-8 bg-gradient-to-r from-amber-600 via-orange-600 to-red-600 rounded-2xl p-6 shadow-xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <div class="text-white">
                            <h3 class="text-xl font-bold mb-1">Nikmati Konten Premium Lainnya</h3>
                            <p class="text-orange-100 text-sm">Upgrade ke Tipe C untuk akses master class eksklusif</p>
                        </div>
                    </div>
                    <button class="bg-white text-orange-600 px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition-colors duration-200 shadow-lg hover:shadow-xl">
                        Upgrade Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
