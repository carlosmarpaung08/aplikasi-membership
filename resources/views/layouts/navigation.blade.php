<nav x-data="{ open: false }" class="bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 border-b border-indigo-800 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center text-white text-2xl font-bold rounded-lg px-3 py-2 transition-all duration-200 hover:scale-105">
                        <!-- Custom SVG Logo: A stylized shield or badge representing membership/premium -->
                        <svg class="w-8 h-8 mr-2 text-pink-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1ZM12 6.3L13.71 9.5L17.5 10.1L14.75 12.8L15.42 16.58L12 14.77L8.58 16.58L9.25 12.8L6.5 10.1L10.29 9.5L12 6.3Z"/>
                        </svg>
                        Membership App
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-pink-200 transition-colors duration-200">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    {{-- UBAH INI: Mengarah ke daftar artikel --}}
                    <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel.*')" class="text-white hover:text-pink-200 transition-colors duration-200">
                        {{ __('Artikel') }}
                    </x-nav-link>
                    {{-- UBAH INI: Mengarah ke daftar video --}}
                    <x-nav-link :href="route('video.index')" :active="request()->routeIs('video.*')" class="text-white hover:text-pink-200 transition-colors duration-200">
                        {{ __('Video') }}
                    </x-nav-link>

                    {{-- Link khusus untuk Admin --}}
                    @can('manage-users')
                        <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="text-white hover:text-pink-200 transition-colors duration-200">
                            {{ __('Manajemen Pengguna') }}
                        </x-nav-link>
                    @endcan
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500 transition ease-in-out duration-150 shadow-md">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-gray-700 hover:bg-gray-100">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        {{-- Link Manajemen Pengguna di Dropdown (Opsional, tapi bagus untuk konsistensi) --}}
                        @can('manage-users')
                            <x-dropdown-link :href="route('admin.users.index')" class="text-gray-700 hover:bg-gray-100">
                                {{ __('Manajemen Pengguna') }}
                            </x-dropdown-link>
                        @endcan

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="text-red-600 hover:bg-red-50">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-indigo-200 hover:text-white hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-indigo-700">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:bg-indigo-600">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel.*')" class="text-white hover:bg-indigo-600">
                {{ __('Artikel') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('video.index')" :active="request()->routeIs('video.*')" class="text-white hover:bg-indigo-600">
                {{ __('Video') }}
            </x-responsive-nav-link>

            {{-- Link Manajemen Pengguna di Responsive Menu --}}
            @can('manage-users')
                <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="text-white hover:bg-indigo-600">
                    {{ __('Manajemen Pengguna') }}
                </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-indigo-600">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-indigo-200">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:bg-indigo-600">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                {{-- Link Manajemen Pengguna di Responsive Dropdown --}}
                @can('manage-users')
                    <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="text-white hover:bg-indigo-600">
                        {{ __('Manajemen Pengguna') }}
                    </x-responsive-nav-link>
                @endcan

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                        class="text-red-300 hover:bg-red-700">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>