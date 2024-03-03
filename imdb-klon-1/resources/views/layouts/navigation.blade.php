<x-app-layout>
    <nav x-data="{ open: false }" class="bg-gradient-to-b from-zinc-950 to-red-950 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0">
                <a>
                    <x-application-logo class="block w-12 h-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>

            <!-- Links -->
            <div class="hidden sm:flex space-x-8">
                @auth
                @if(auth()->user()->role === 'user')
                <x-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-nav-link>
                @elseif(auth()->user()->role === 'admin')
                <x-nav-link :href="route('dashboard.index')" class="text-white">
                    {{ __('Dashboard') }}
                </x-nav-link>
                @else
                <p class="text-white">User Role: {{ auth()->user()->role }}</p>
                @endif
                @endauth
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex items-center">
                <x-dropdown align="right" width="48">
                    <!-- ... (unchanged) ... -->
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <!-- ... (unchanged) ... -->
                </button>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                @auth
                @if(auth()->user()->role === 'user')
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                @else
                <x-responsive-nav-link :href="route('dashboard.index')" class="text-white">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                @endif
                <div x-data="{ role: '{{ auth()->user()->role }}' }">
                    <p x-text="'User Role: ' + role" class="text-white"></p>
                </div>
                @endauth
            </div>
        </div>
    </nav>
</x-app-layout>