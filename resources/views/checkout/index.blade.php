@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<x-navbar />

<!-- Checkout Page -->
<section class="py-12 bg-gray-50 dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-12">Checkout</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Checkout Form -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Shipping Information -->
                <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Shipping Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                            <input type="text" class="input" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                            <input type="text" class="input" placeholder="Doe">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input type="email" class="input" placeholder="john@example.com">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Address</label>
                            <input type="text" class="input" placeholder="123 Main Street">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">City</label>
                            <input type="text" class="input" placeholder="New York">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">ZIP Code</label>
                            <input type="text" class="input" placeholder="10001">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Country</label>
                            <select class="input">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>United Kingdom</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="bg-white dark:bg-zinc-800 rounded-2xl border border-gray-200 dark:border-zinc-700 p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Payment Method</h2>
                    <div class="space-y-4">
                        <label class="flex items-center p-4 border-2 border-indigo-600 rounded-xl cursor-pointer">
                            <input type="radio" name="payment" value="card" class="text-indigo-600 focus:ring-indigo-500" checked>
                            <div class="ml-4">
                                <div class="font-semibold text-gray-900 dark:text-white">Credit Card</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Pay with credit or debit card</div>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 border-gray-200 dark:border-zinc-700 rounded-xl cursor-pointer hover:border-indigo-300">
                            <input type="radio" name="payment" value="paypal" class="text-indigo-600 focus:ring-indigo-500">
                            <div class="ml-4">
                                <div class="font-semibold text-gray-900 dark:text-white">PayPal</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Pay with your PayPal account</div>
                            </div>
                        </label>
                    </div>
                    <div class="mt-6 space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Card Number</label>
                            <input type="text" class="input" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Expiry Date</label>
                                <input type="text" class="input" placeholder="MM/YY">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">CVV</label>
                                <input type="text" class="input" placeholder="123">
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
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" alt="Product" class="w-16 h-16 rounded-lg object-cover">
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900 dark:text-white">Product Name</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Qty: 1</p>
                            </div>
                            <p class="font-bold text-gray-900 dark:text-white">$299</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=100&h=100&fit=crop" alt="Product" class="w-16 h-16 rounded-lg object-cover">
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900 dark:text-white">Another Product</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Qty: 2</p>
                            </div>
                            <p class="font-bold text-gray-900 dark:text-white">$598</p>
                        </div>
                    </div>
                    <div class="space-y-3 mb-6 pt-6 border-t border-gray-200 dark:border-zinc-700">
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
                        <div class="border-t border-gray-200 dark:border-zinc-700 pt-3">
                            <div class="flex justify-between">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">Total</span>
                                <span class="text-2xl font-black text-gray-900 dark:text-white">$986.70</span>
                            </div>
                        </div>
                    </div>
                    <x-button variant="primary" size="lg" class="w-full">
                        Place Order
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer />
@endsection

