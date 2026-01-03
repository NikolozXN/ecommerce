@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<x-navbar />

<!-- Product Detail Page -->
<section class="py-12 bg-white dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                <li><a href="/" class="hover:text-gray-900 dark:hover:text-white">Home</a></li>
                <li>/</li>
                <li><a href="/products" class="hover:text-gray-900 dark:hover:text-white">Products</a></li>
                <li>/</li>
                <li class="text-gray-900 dark:text-white">Product Name</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <div class="aspect-square bg-gray-100 dark:bg-zinc-800 rounded-2xl overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop" alt="Product" class="w-full h-full object-cover">
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="aspect-square bg-gray-100 dark:bg-zinc-800 rounded-lg overflow-hidden border-2 border-indigo-600">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 dark:bg-zinc-800 rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700 hover:border-indigo-300 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 dark:bg-zinc-800 rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700 hover:border-indigo-300 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 dark:bg-zinc-800 rounded-lg overflow-hidden border border-gray-200 dark:border-zinc-700 hover:border-indigo-300 cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" alt="Thumbnail" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <div class="mb-4">
                    <span class="badge badge-primary">New Arrival</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-4">Premium Product Name</h1>
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        @endfor
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">(128 reviews)</span>
                </div>
                <div class="mb-8">
                    <p class="text-4xl font-black text-gray-900 dark:text-white mb-2">$299</p>
                    <p class="text-lg text-gray-500 line-through">$399</p>
                </div>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                    Experience superior quality with our premium product. Featuring exceptional design, premium materials, and outstanding performance. Perfect for everyday use.
                </p>

                <!-- Options -->
                <div class="space-y-6 mb-8">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Color</label>
                        <div class="flex gap-3">
                            <button class="w-12 h-12 rounded-lg border-2 border-indigo-600 bg-indigo-600"></button>
                            <button class="w-12 h-12 rounded-lg border-2 border-gray-300 dark:border-zinc-600 bg-gray-200 dark:bg-zinc-700 hover:border-indigo-300"></button>
                            <button class="w-12 h-12 rounded-lg border-2 border-gray-300 dark:border-zinc-600 bg-gray-800 dark:bg-zinc-900 hover:border-indigo-300"></button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Size</label>
                        <div class="flex gap-3">
                            <button class="px-6 py-3 border-2 border-indigo-600 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-lg font-semibold">S</button>
                            <button class="px-6 py-3 border-2 border-gray-300 dark:border-zinc-600 rounded-lg font-semibold hover:border-indigo-300">M</button>
                            <button class="px-6 py-3 border-2 border-gray-300 dark:border-zinc-600 rounded-lg font-semibold hover:border-indigo-300">L</button>
                            <button class="px-6 py-3 border-2 border-gray-300 dark:border-zinc-600 rounded-lg font-semibold hover:border-indigo-300">XL</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Quantity</label>
                        <div class="flex items-center gap-4">
                            <button class="w-12 h-12 border border-gray-300 dark:border-zinc-600 rounded-lg hover:bg-gray-50 dark:hover:bg-zinc-800">-</button>
                            <span class="text-xl font-bold text-gray-900 dark:text-white">1</span>
                            <button class="w-12 h-12 border border-gray-300 dark:border-zinc-600 rounded-lg hover:bg-gray-50 dark:hover:bg-zinc-800">+</button>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <x-button variant="primary" size="lg" class="flex-1">
                        Add to Cart
                    </x-button>
                    <button class="px-6 py-4 border-2 border-gray-300 dark:border-zinc-600 rounded-xl hover:bg-gray-50 dark:hover:bg-zinc-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Features -->
                <div class="border-t border-gray-200 dark:border-zinc-700 pt-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm text-gray-600 dark:text-gray-400">Free Shipping</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="text-sm text-gray-600 dark:text-gray-400">Secure Payment</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <span class="text-sm text-gray-600 dark:text-gray-400">30-Day Returns</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600 dark:text-gray-400">24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-16">
            <div class="border-b border-gray-200 dark:border-zinc-700">
                <nav class="flex gap-8">
                    <button class="pb-4 border-b-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 font-semibold">Description</button>
                    <button class="pb-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Reviews</button>
                    <button class="pb-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Shipping</button>
                </nav>
            </div>
            <div class="mt-8 prose prose-lg dark:prose-invert max-w-none">
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    This premium product features exceptional quality and design. Made with the finest materials and attention to detail, it's built to last and designed to impress.
                </p>
            </div>
        </div>
    </div>
</section>

<x-footer />
@endsection

