<header class="w-full">
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100" aria-label="navigation">
        <!-- Primary Navigation Menu -->
        <div class="mx-auto px-6">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="/">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('some-page-route')" :active="request()->routeIs('some-page-route')">
                    {{ __('go to some page') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('beranda')" :active="request()->routeIs('beranda')">
                    {{ __('Beranda') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('penting')" :active="request()->routeIs('penting')">
                    {{ __('Penting') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('kategori')" :active="request()->routeIs('kategori')">
                    {{ __('Kategori') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('signup')" :active="request()->routeIs('signup')">
                    {{ __('Sign Up') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </nav>
</header>
