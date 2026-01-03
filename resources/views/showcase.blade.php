<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnishop Premium Themes - Theme Showcase</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-zinc-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-16">
            <h1 class="text-5xl lg:text-6xl font-black text-gray-900 dark:text-white mb-4">
                Omnishop Premium Themes
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                6 Beautiful, Envato-ready E-commerce Homepage Designs
            </p>
            <div class="flex items-center justify-center gap-4">
                <button @click="darkMode = !darkMode" class="p-3 rounded-lg bg-white dark:bg-zinc-800 border border-gray-200 dark:border-zinc-700 hover:bg-gray-50 dark:hover:bg-zinc-700">
                    <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                    <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="/homepages/fashion" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">F</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Fashion E-commerce</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Pink/Rose theme for fashion brands</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>

            <a href="/homepages/electronics" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">E</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Electronics Store</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Blue/Cyan theme for tech products</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>

            <a href="/homepages/grocery" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">G</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Grocery Market</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Green/Emerald theme for local markets</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>

            <a href="/homepages/luxury" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-stone-500 to-neutral-600 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">L</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Luxury Brand</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Minimal/Stone theme for luxury brands</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>

            <a href="/homepages/digital" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">D</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Digital Products</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Indigo/Purple theme for startups</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>

            <a href="/homepages/marketplace" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="aspect-video bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
                        <span class="text-6xl font-black text-white">M</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2">Marketplace</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Multi-category marketplace theme</p>
                        <span class="text-sm text-indigo-600 dark:text-indigo-400 font-semibold group-hover:underline">View Theme →</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-16 text-center">
            <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Also Available</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/products" class="px-4 py-2 bg-gray-100 dark:bg-zinc-700 rounded-lg hover:bg-gray-200 dark:hover:bg-zinc-600">Products</a>
                    <a href="/cart" class="px-4 py-2 bg-gray-100 dark:bg-zinc-700 rounded-lg hover:bg-gray-200 dark:hover:bg-zinc-600">Cart</a>
                    <a href="/checkout" class="px-4 py-2 bg-gray-100 dark:bg-zinc-700 rounded-lg hover:bg-gray-200 dark:hover:bg-zinc-600">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

