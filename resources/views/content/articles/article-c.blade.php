<x-app-layout>
    <x-slot name="header">
        <!-- Header section with gradient background, icon, title, subtitle, and membership tags -->
        <div class="bg-gradient-to-r from-purple-600 via-indigo-600 to-pink-600 rounded-2xl shadow-xl p-8 mx-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                        <!-- Icon for exclusive content (e.g., a diamond) -->
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        {{ __('Konten Eksklusif: Masterclass & Wawasan Industri') }}
                    </h2>
                    <p class="text-purple-100 mt-2 text-lg">Selami wawasan mendalam dan strategi tingkat ahli</p>
                </div>
                <div class="hidden md:flex items-center space-x-2">
                    <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium">Eksklusif</span>
                    <span class="bg-purple-300 text-purple-900 px-3 py-1 rounded-full text-sm font-bold">Tipe C+</span>
                </div>
            </div>
        </div>
    </x-slot>

    <!-- Main content area with a gradient background -->
    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-purple-50 to-pink-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb Navigation -->
            <nav class="mb-8">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-white/20">
                    <ol class="flex items-center space-x-2 text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-purple-600 transition-colors duration-200 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L9 5.414V17a1 1 0 102 0V5.414l5.293 5.293a1 1 0 001.414-1.414l-7-7z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <li class="text-purple-600 font-medium">Artikel Tipe C</li>
                    </ol>
                </div>
            </nav>

            <!-- Exclusive Content Badge -->
            <div class="mb-6">
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl p-4 shadow-lg">
                    <div class="flex items-center justify-center text-white">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="font-bold text-lg">KONTEN EKSLUSIF TIPE C</span>
                        <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Main Article Card -->
            <article class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                
                <!-- Article Header -->
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 px-8 py-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-3">
                                <span class="bg-white/20 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Artikel #3</span>
                                <span class="bg-purple-200 text-purple-900 px-3 py-1 rounded-full text-sm font-bold">Expert</span>
                                <span class="bg-pink-200 text-pink-900 px-3 py-1 rounded-full text-sm font-bold ml-2">Eksklusif</span>
                            </div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2 leading-tight">
                                Tren Pasar & Prediksi Masa Depan
                            </h1>
                            <p class="text-purple-100 text-lg">Wawasan mendalam untuk keputusan strategis Anda</p>
                        </div>
                        <div class="hidden md:block w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center ml-6">
                            <!-- Icon for market trends/predictions -->
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="p-8 md:p-12">
                    
                    <!-- Welcome Section for Type C -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 mb-8 border-l-4 border-purple-500">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Selamat Datang, Anggota Tipe C!</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Anda adalah bagian dari komunitas elit kami dengan akses penuh ke seluruh perpustakaan konten. Artikel ini menyajikan wawasan eksklusif tentang tren pasar terkini, prediksi industri, dan analisis dari para ahli terkemuka.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="prose prose-lg max-w-none">
                        
                        <!-- Membership Benefits -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                Manfaat Keanggotaan Tipe C
                            </h3>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Sebagai anggota <span class="font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded-lg">Tipe C</span>, Anda memiliki akses tak terbatas ke seluruh perpustakaan konten, termasuk sesi Masterclass dan wawancara eksklusif. Ini adalah aset berharga untuk meningkatkan pemahaman Anda secara komprehensif.
                                </p>
                                
                                <!-- Benefits Grid -->
                                <div class="grid md:grid-cols-2 gap-4 mt-6">
                                    <div class="flex items-center p-4 bg-purple-50 rounded-xl">
                                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                                                <path d="M8 6h4v2H8V6zM8 10h4v2H8v-2z"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-purple-800">Akses Penuh Artikel</span>
                                    </div>
                                    <div class="flex items-center p-4 bg-pink-50 rounded-xl">
                                        <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-pink-800">Akses Penuh Video</span>
                                    </div>
                                    <div class="flex items-center p-4 bg-indigo-50 rounded-xl">
                                        <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-indigo-800">Masterclass Eksklusif</span>
                                    </div>
                                    <div class="flex items-center p-4 bg-purple-50 rounded-xl">
                                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.573a1 1 0 00.5.866l5.197 3a1 1 0 010 1.732l-5.197 3a1 1 0 00-.5.866V17a1 1 0 01-2 0v-1.573a1 1 0 00-.5-.866l-5.197-3a1 1 0 010-1.732l5.197-3a1 1 0 00.5-.866V3a1 1 0 011-1z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-purple-800">Wawasan Industri</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Further Exploration -->
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                Lanjutkan Eksplorasi
                            </h3>
                            
                            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-200">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Kami harap Anda menikmati konten eksklusif ini. Jangan ragu untuk menjelajahi lebih banyak artikel dan video di Dashboard Anda untuk terus meningkatkan pengetahuan dan keterampilan Anda.
                                </p>
                                
                                <!-- Call to Action -->
                                <div class="flex items-center justify-between bg-white rounded-xl p-4 mt-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-indigo-500 rounded-xl flex items-center justify-center mr-3">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-800">Kembali ke Dashboard</p>
                                            <p class="text-sm text-gray-500">Temukan lebih banyak konten premium</p>
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

                <!-- Article Footer -->
                <div class="bg-gray-50 px-8 py-6 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <em>Artikel ini hanya dapat diakses oleh member Tipe C</em>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Tipe C+</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation Section -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                
                <!-- Previous Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20 hover:shadow-md transition-all duration-200 cursor-pointer hover:bg-white/80">
                    <div class="flex items-center text-purple-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Artikel Sebelumnya</span>
                    </div>
                    <a href="{{ route('artikel.tipe-b') }}" class="text-purple-700 text-sm mt-1 font-medium block">Analisis Mendalam Fitur Premium</a>
                </div>

                <!-- Current Position -->
                <div class="bg-purple-500 rounded-xl p-4 shadow-lg text-white text-center">
                    <p class="font-semibold">Artikel 3 dari 3</p>
                    <p class="text-purple-100 text-sm">Seri Masterclass</p>
                </div>

                <!-- Next Article -->
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 shadow-sm border border-white/20">
                    <div class="flex items-center justify-end text-gray-500">
                        <span class="text-sm">Artikel Selanjutnya</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-gray-400 text-sm mt-1 text-right">Tidak ada</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
