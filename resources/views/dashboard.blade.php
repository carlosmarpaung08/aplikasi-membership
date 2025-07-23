<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-2xl shadow-xl p-8 mx-4">
            <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                </svg>
                {{ __('Dashboard') }}
            </h2>
            <p class="text-indigo-100 mt-2 text-lg">Selamat datang kembali! Kelola konten dan akses premium Anda</p>
        </div>
    </x-slot>

    <div class="py-8 min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white/80 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-3xl border border-white/20 mb-8 hover:shadow-2xl transition-all duration-500 hover:scale-[1.02]">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ __("Selamat Datang!") }}</h3>
                            <p class="text-gray-600">Anda telah berhasil masuk ke sistem</p>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-6 text-white mb-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-semibold text-lg mb-2 opacity-90">Status Membership Anda</h4>
                                @php
                                    Auth::user()->refresh();
                                @endphp
                                <p class="text-3xl font-bold">{{ Auth::user()->membership_type }}</p>
                            </div>
                            <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
                        </svg>
                        Akses Konten Premium
                    </h3>

                    <div class="grid lg:grid-cols-2 gap-8">
                        
                        <div class="group">
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100 hover:shadow-xl transition-all duration-300 hover:scale-[1.02] h-full">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"/>
                                            <path d="M8 6h4v2H8V6zM8 10h4v2H8v-2z"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-800">Artikel Premium</h4>
                                </div>
                                
                                <div class="space-y-3">
                                    <a href="{{ route('artikel.tipe-a') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-blue-600">Artikel Tipe A</span>
                                            <span class="ml-2 text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">A, B, C</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-blue-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>

                                    <a href="{{ route('artikel.tipe-b') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-blue-600">Artikel Tipe B</span>
                                            <span class="ml-2 text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">B, C</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-blue-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>

                                    <a href="{{ route('artikel.tipe-c') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-blue-600">Artikel Tipe C</span>
                                            <span class="ml-2 text-xs bg-purple-100 text-purple-600 px-2 py-1 rounded-full">C only</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-blue-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl p-6 border border-rose-100 hover:shadow-xl transition-all duration-300 hover:scale-[1.02] h-full">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-pink-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2.5a.5.5 0 01.8-.4l5.7 3.8a.5.5 0 010 .8l-5.7 3.8a.5.5 0 01-.8-.4v-7.6z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold text-gray-800">Video Premium</h4>
                                </div>
                                
                                <div class="space-y-3">
                                    <a href="{{ route('video.tipe-a') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-rose-600">Video Tipe A</span>
                                            <span class="ml-2 text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">A, B, C</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-rose-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>

                                    <a href="{{ route('video.tipe-b') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-rose-600">Video Tipe B</span>
                                            <span class="ml-2 text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">B, C</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-rose-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>

                                    <a href="{{ route('video.tipe-c') }}" class="group/link flex items-center justify-between p-4 bg-white/70 hover:bg-white rounded-xl transition-all duration-200 hover:shadow-md hover:scale-[1.02]">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full mr-3"></div>
                                            <span class="font-medium text-gray-700 group-hover/link:text-rose-600">Video Tipe C</span>
                                            <span class="ml-2 text-xs bg-purple-100 text-purple-600 px-2 py-1 rounded-full">C only</span>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 group-hover/link:text-rose-600 group-hover/link:translate-x-1 transition-all duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-8">
                
                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-white/20">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="font-semibold text-gray-700">Statistik Cepat</h5>
                        <div class="w-8 h-8 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-800">24</p>
                    <p class="text-sm text-gray-500">Konten Tersedia</p>
                </div>

                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-white/20">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="font-semibold text-gray-700">Aktivitas Terakhir</h5>
                        <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-800">2 jam</p>
                    <p class="text-sm text-gray-500">Yang lalu</p>
                </div>

                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-white/20">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="font-semibold text-gray-700">Bantuan</h5>
                        <div class="w-8 h-8 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-2xl font-bold text-gray-800">24/7</p>
                    <p class="text-sm text-gray-500">Support Tersedia</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Peringatan Akses Ditolak --}}
    <div id="accessDeniedModal" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm mx-auto transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="sm:flex sm:items-start">
                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.18 3.374 1.98 3.374h14.64c1.8 0 2.846-1.874 1.98-3.374L13.94 3.376c-.863-1.5-3.033-1.5-3.896 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Akses Ditolak!
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500" id="modal-message">
                            {{ session('access_denied') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" onclick="closeAccessDeniedModal()">
                    Oke
                </button>
            </div>
        </div>
    </div>

    {{-- Script untuk menampilkan modal --}}
    @if (session('access_denied'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = document.getElementById('accessDeniedModal');
                if (modal) {
                    modal.classList.remove('hidden');
                }
            });

            function closeAccessDeniedModal() {
                const modal = document.getElementById('accessDeniedModal');
                if (modal) {
                    modal.classList.add('hidden');
                }
            }
        </script>
    @endif
</x-app-layout>