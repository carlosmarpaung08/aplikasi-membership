<x-app-layout>
    <x-slot name="header">
        {{-- Header dengan tema warna artikel --}}
        <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-2xl shadow-xl p-8 mx-4">
            <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                </svg>
                {{ __('Daftar Video') }}
            </h2>
            <p class="text-blue-100 mt-2 text-lg">Akses koleksi video premium berkualitas tinggi sesuai membership Anda</p>
        </div>
    </x-slot>

    {{-- Background div dengan tema warna artikel --}}
    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-3xl border border-white/20 mb-8 hover:shadow-2xl transition-all duration-500">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Video untuk Membership {{ $userMembershipType }}</h3>
                            <p class="text-gray-600">Anda memiliki akses ke {{ $displayLimit === PHP_INT_MAX ? 'semua' : $displayLimit }} video premium</p> {{-- Pastikan $displayLimit di sini --}}
                        </div>
                        {{-- Icon card dengan tema warna artikel --}}
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 5v10l7-5-7-5z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        {{-- Card Total Video dengan tema warna artikel --}}
                        <div class="bg-gradient-to-r from-green-400 to-emerald-500 rounded-2xl p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-green-100 text-sm font-medium">Total Video</p>
                                    <p class="text-2xl font-bold">{{ count($accessibleVideos) }}</p>
                                </div>
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {{-- Card Status Member dengan tema warna artikel --}}
                        <div class="bg-gradient-to-r from-blue-400 to-cyan-500 rounded-2xl p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-blue-100 text-sm font-medium">Status Member</p>
                                    <p class="text-2xl font-bold">{{ $userMembershipType }}</p>
                                </div>
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {{-- Card Batas Akses dengan tema warna artikel --}}
                        <div class="bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-purple-100 text-sm font-medium">Batas Akses</p>
                                    <p class="text-2xl font-bold">{{ $displayLimit === PHP_INT_MAX ? '∞' : $displayLimit }}</p>
                                </div>
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($accessibleVideos) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($accessibleVideos as $video)
                        <div class="group bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-[1.02] border border-white/20 overflow-hidden">
                            {{-- Header card video dengan tema warna artikel --}}
                            <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-6 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12"></div>
                                <div class="absolute bottom-0 left-0 w-16 h-16 bg-white/10 rounded-full -ml-8 -mb-8"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M8 5v10l7-5-7-5z"/>
                                            </svg>
                                        </div>
                                        <div class="flex flex-wrap gap-1">
                                            {{-- Menampilkan badge akses dari $video['access'] --}}
                                            @foreach($video['access'] as $accessType)
                                                <span class="text-xs font-bold px-2 py-1 rounded-full bg-white/20 text-white backdrop-blur-sm">
                                                    {{ $accessType }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <h4 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-100 transition-colors duration-300">
                                        {{ $video['title'] }}
                                    </h4>
                                </div>
                            </div>

                            <div class="p-6">
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ $video['description'] }}</p>
                                
                                {{-- Detail tambahan video --}}
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                        </svg>
                                        5:30 menit
                                    </div>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                        HD Quality
                                    </div>
                                </div>
                                
                                {{-- Access Types dengan tema warna artikel --}}
                                <div class="flex flex-wrap gap-2 mb-6">
                                    @foreach($video['access'] as $accessType)
                                        <span class="text-xs font-medium px-3 py-1.5 rounded-full border-2 {{ 
                                            $accessType === 'A' ? 'bg-green-50 text-green-700 border-green-200' : 
                                            ($accessType === 'B' ? 'bg-yellow-50 text-yellow-700 border-yellow-200' : 
                                            'bg-purple-50 text-purple-700 border-purple-200') 
                                        }}">
                                            <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Akses Tipe {{ $accessType }}
                                        </span>
                                    @endforeach
                                </div>

                                {{-- Watch Button dengan tema warna artikel --}}
                                <a href="{{ route('video.show', $video['id']) }}" class="group/btn w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 border border-transparent rounded-xl font-semibold text-sm text-white tracking-wide hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg hover:scale-[1.02]">
                                    <svg class="w-4 h-4 mr-2 group-hover/btn:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 5v10l7-5-7-5z"/>
                                    </svg>
                                    Tonton Video
                                    <svg class="w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl p-12 text-center border border-white/20">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-400 to-gray-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Belum Ada Video Tersedia</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">Saat ini tidak ada video yang tersedia untuk membership level Anda. Silakan periksa kembali nanti atau hubungi administrator.</p>
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 border border-transparent rounded-xl font-semibold text-sm text-white tracking-wide hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 hover:shadow-lg">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0L3.586 12l2.707-2.707a1 1 0 011.414 1.414L6.414 12l1.293 1.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M4.586 12a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H5.086a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                        </svg>
                        Kembali ke Dashboard
                    </a>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>