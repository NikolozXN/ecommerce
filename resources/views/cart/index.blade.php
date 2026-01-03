@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<x-navbar />

<!-- Cart Page -->
<section class="py-12 bg-white dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-12">Shopping Cart</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-6">
                    <div class="flex items-start gap-6">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" alt="Product" class="w-24 h-24 rounded-lg object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Premium Product Name</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Color: Black | Size: M</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2 border border-gray-300 dark:border-zinc-600 rounded-lg">
                                        <button class="px-3 py-2 hover:bg-gray-50 dark:hover:bg-zinc-700">-</button>
                                        <span class="px-4 py-2 font-semibold">1</span>
                                        <button class="px-3 py-2 hover:bg-gray-50 dark:hover:bg-zinc-700">+</button>
                                    </div>
                                    <p class="text-xl font-black text-gray-900 dark:text-white">$299</p>
                                </div>
                                <button class="text-red-600 hover:text-red-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-6">
                    <div class="flex items-start gap-6">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200&h=200&fit=crop" alt="Product" class="w-24 h-24 rounded-lg object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Another Product</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Color: Silver | Size: L</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2 border border-gray-300 dark:border-zinc-600 rounded-lg">
                                        <button class="px-3 py-2 hover:bg-gray-50 dark:hover:bg-zinc-700">-</button>
                                        <span class="px-4 py-2 font-semibold">2</span>
                                        <button class="px-3 py-2 hover:bg-gray-50 dark:hover:bg-zinc-700">+</button>
                                    </div>
                                    <p class="text-xl font-black text-gray-900 dark:text-white">$598</p>
                                </div>
                                <button class="text-red-600 hover:text-red-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-6 sticky top-24">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Order Summary</h2>
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between text-gray-600 dark:text-gray-400">
                            <span>Subtotal</span>
                            <span>$897</span>
                        </div>
                        <div class="flex justify-between text-gray-600 dark:text-gray-400">
                            <span>Shipping</span>
                            <span>Free</span>
                        </div>
                        <div class="flex justify-between text-gray-600 dark:text-gray-400">
                            <span>Tax</span>
                            <span>$89.70</span>
                        </div>
                        <div class="border-t border-gray-200 dark:border-zinc-700 pt-4">
                            <div class="flex justify-between">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">Total</span>
                                <span class="text-2xl font-black text-gray-900 dark:text-white">$986.70</span>
                            </div>
                        </div>
                    </div>
                    <x-button href="/checkout" variant="primary" size="lg" class="w-full">
                        Proceed to Checkout
                    </x-button>
                    <a href="/products" class="block text-center mt-4 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer />
@endsection

