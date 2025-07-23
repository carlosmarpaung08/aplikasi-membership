<x-app-layout>
    <x-slot name="header">
        {{-- Header dengan tema warna artikel --}}
        <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl shadow-xl p-8 mx-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                    </svg>
                    <div>
                        <h2 class="font-bold text-3xl text-white leading-tight">
                            {{ $video['title'] }}
                        </h2>
                        <p class="text-blue-100 mt-2 text-lg">Video Premium - Tonton dengan Kualitas Terbaik</p>
                    </div>
                </div>
                <div class="hidden md:block w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </div>
    </x-slot>

    {{-- Background div dengan tema warna artikel --}}
    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <a href="{{ route('video.index') }}" class="group inline-flex items-center px-6 py-3 bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl font-semibold text-sm text-gray-700 tracking-wide hover:bg-white hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:scale-[1.02]">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    Kembali ke Daftar Video
                </a>
            </div>

            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-3xl border border-white/20 mb-8 hover:shadow-2xl transition-all duration-500">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                    <div class="relative z-10">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                                </svg>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                {{-- Menampilkan badge akses dari $video['access'] --}}
                                @foreach($video['access'] as $accessType)
                                    <span class="text-sm font-bold px-3 py-1.5 rounded-full bg-white/20 text-white backdrop-blur-sm">
                                        Akses Tipe {{ $accessType }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">
                            {{ $video['title'] }}
                        </h1>
                        <p class="text-blue-100 text-lg leading-relaxed">{{ $video['description'] }}</p> {{-- Warna teks disesuaikan --}}
                    </div>
                </div>
            </div>

            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-3xl border border-white/20 mb-8 hover:shadow-2xl transition-all duration-500">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            </svg>
                            Video Premium HD
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            Durasi: 15 menit
                        </div>
                    </div>

                    <div class="relative aspect-video w-full bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-2xl mb-6 group hover:shadow-3xl transition-all duration-300">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="flex items-center justify-center h-full relative z-10">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-4 mx-auto group-hover:bg-white/30 transition-all duration-300 cursor-pointer">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <p class="text-white text-xl font-semibold mb-2">{{ $video['title'] }}</p>
                                <p class="text-white/80 text-sm">Klik untuk memutar video</p>
                            </div>
                        </div>
                        {{-- Tempat untuk embed video nyata --}}
                        {{-- <iframe width="100%" height="100%" src="http://googleusercontent.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="absolute inset-0"></iframe> --}}
                        
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <button class="text-white hover:text-blue-400 transition-colors duration-200"> {{-- Warna hover diubah --}}
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <div class="h-1 bg-white/20 rounded-full w-32">
                                        <div class="h-1 bg-blue-500 rounded-full w-8"></div> {{-- Warna progress bar diubah --}}
                                    </div>
                                    <span class="text-white text-xs">02:15 / 15:00</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-white/80 hover:text-white transition-colors duration-200">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.617.765L4.576 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.576l3.807-3.765A1 1 0 019.383 3.076zM6 8.5L4 9v2l2 .5V8.5z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <button class="text-white/80 hover:text-white transition-colors duration-200">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm6 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V4zm-6 6a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H4a1 1 0 01-1-1v-4zm6 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-3xl border border-white/20 hover:shadow-2xl transition-all duration-500">
                <div class="p-8 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100"> {{-- Warna card diubah --}}
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center mr-4"> {{-- Warna icon background diubah --}}
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-blue-700">1,234</p> {{-- Warna teks diubah --}}
                                    <p class="text-blue-600 text-sm font-medium">Total Views</p> {{-- Warna teks diubah --}}
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-green-50 to-indigo-50 rounded-2xl p-6 border border-green-100"> {{-- Warna card diubah --}}
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center mr-4"> {{-- Warna icon background diubah --}}
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-green-700">89</p>
                                    <p class="text-green-600 text-sm font-medium">Likes</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100"> {{-- Warna card diubah --}}
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mr-4"> {{-- Warna icon background diubah --}}
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-4 1-1-4 .257-.257A6 6 0 1118 8zm-6-2a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-purple-700">HD</p> {{-- Warna teks diubah --}}
                                    <p class="text-purple-600 text-sm font-medium">Quality</p> {{-- Warna teks diubah --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-500" fill="currentColor" viewBox="0 0 20 20"> {{-- Warna icon diubah --}}
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            Deskripsi Video
                        </h3>
                        <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-2xl p-6 border border-gray-200">
                            <p class="text-gray-700 leading-relaxed">{{ $video['description'] }}</p>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-8">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                                <span class="text-sm font-medium text-gray-600 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z" clip-rule="evenodd"/>
                                    </svg>
                                    Dapat diakses oleh:
                                </span>
                                <div class="flex flex-wrap gap-2">
                                    {{-- Menggunakan $video['access'] untuk menampilkan akses dengan warna --}}
                                    @foreach($video['access'] as $accessType)
                                        <span class="inline-flex items-center text-xs font-medium px-3 py-1.5 rounded-full border-2 {{ 
                                            $accessType === 'A' ? 'bg-green-50 text-green-700 border-green-200' : 
                                            ($accessType === 'B' ? 'bg-yellow-50 text-yellow-700 border-yellow-200' : 
                                            'bg-purple-50 text-purple-700 border-purple-200') 
                                        }}">
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Akses Tipe {{ $accessType }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <button class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-gray-100 to-gray-200 border border-gray-300 rounded-xl font-semibold text-sm text-gray-700 tracking-wide hover:from-gray-200 hover:to-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg hover:scale-[1.02]"> {{-- Warna focus ring diubah --}}
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                                    </svg>
                                    Bagikan
                                </button>
                                <button class="group inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-100 to-indigo-100 border border-blue-300 rounded-xl font-semibold text-sm text-blue-700 tracking-wide hover:from-blue-200 hover:to-indigo-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg hover:scale-[1.02]"> {{-- Warna button diubah --}}
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                    </svg>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex items-center justify-between">
                <a href="{{ route('video.index') }}" class="group inline-flex items-center px-6 py-3 bg-white/80 backdrop-blur-sm border border-white/20 rounded-2xl font-semibold text-sm text-gray-700 tracking-wide hover:bg-white hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:scale-[1.02]">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    Kembali ke Daftar Video
                </a>
                
                <div class="hidden md:flex items-center text-sm text-gray-500">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                    </svg>
                    Selesai menonton video
                </div>
            </div>

        </div>
    </div>
</x-app-layout>