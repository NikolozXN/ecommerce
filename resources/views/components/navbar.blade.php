@props([
    'theme' => 'default',
    'logo' => 'Omnishop',
    'showCart' => true,
])

<nav class="bg-white/80 dark:bg-zinc-900/80 backdrop-blur-lg border-b border-gray-200/50 dark:border-zinc-800/50 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center gap-12">
                <a href="/" class="text-2xl font-black bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent tracking-tight">
                    {{ $logo }}
                </a>
                <div class="hidden lg:flex items-center gap-8">
                    <a href="/" class="nav-link-active">Home</a>
                    <a href="/products" class="nav-link">Products</a>
                    <a href="/categories" class="nav-link">Categories</a>
                    <a href="/about" class="nav-link">About</a>
                    <a href="/contact" class="nav-link">Contact</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                @if($showCart)
                <button class="hidden sm:flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800 rounded-lg transition-colors relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span class="hidden md:inline">Cart</span>
                    <span class="absolute -top-1 -right-1 px-2 py-0.5 text-xs font-bold bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full">3</span>
                </button>
                @endif
                <button @click="darkMode = !darkMode" class="p-2.5 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </button>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2.5 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition class="lg:hidden border-t border-gray-200 dark:border-zinc-800 bg-white dark:bg-zinc-900">
        <div class="px-4 py-4 space-y-2">
            <a href="/" class="block py-3 px-4 text-gray-900 dark:text-white font-semibold bg-gray-50 dark:bg-zinc-800 rounded-lg">Home</a>
            <a href="/products" class="block py-3 px-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg">Products</a>
            <a href="/categories" class="block py-3 px-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg">Categories</a>
            <a href="/about" class="block py-3 px-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg">About</a>
            <a href="/contact" class="block py-3 px-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white rounded-lg">Contact</a>
        </div>
    </div>
</nav>

