@extends('layouts.app')

@section('title', 'Your Cart - CyberParts')

@section('content')
<div class="bg-[#050505] text-white min-h-screen font-mono selection:bg-cyan-500 selection:text-black">
    <!-- Navbar (Reused) -->
    <nav class="sticky top-0 z-50 bg-[#050505]/90 backdrop-blur border-b border-white/10">
        <div class="container-fluid h-20 flex items-center justify-between gap-8">
            <a href="index.html" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10 bg-cyan-500/10 border border-cyan-500/50 flex items-center justify-center overflow-hidden group-hover:border-cyan-400 transition-colors">
                    <svg class="w-6 h-6 text-cyan-500 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg tracking-tight leading-none group-hover:text-cyan-400 transition-colors">CYBER<span class="text-cyan-500">PARTS</span></span>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-6 text-xs uppercase font-bold tracking-widest text-gray-400">
                <a href="products.html" class="hover:text-cyan-500 transition-colors">Catalog</a>
                <a href="cart.html" class="text-white">Cart (2)</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-12 px-6 max-w-7xl mx-auto">
        <h1 class="text-3xl font-black uppercase mb-8 border-b border-white/10 pb-4">Shopping Cart</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Cart Items -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Item 1 -->
                <div class="flex gap-6 bg-[#0A0A0A] border border-white/10 p-4 relative group">
                    <div class="w-24 h-24 bg-[#0F0F0F] border border-white/5 p-2">
                        <img src="https://images.unsplash.com/photo-1608500219063-e9134a625e19?w=200&q=80" class="w-full h-full object-contain mix-blend-screen">
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">ESP32-S3 DevKit C</h3>
                            <button class="text-gray-600 hover:text-red-500 transition-colors">×</button>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 font-mono">SKU: ESP-S3-WROOM-1</div>
                        <div class="flex justify-between items-center">
                            <div class="flex border border-white/10 bg-black">
                                <button class="w-8 hover:bg-white/10">-</button>
                                <input type="text" value="1" class="w-8 bg-transparent text-center text-sm focus:outline-none">
                                <button class="w-8 hover:bg-white/10">+</button>
                            </div>
                            <div class="font-bold text-cyan-400">$12.99</div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-6 bg-[#0A0A0A] border border-white/10 p-4 relative group">
                    <div class="w-24 h-24 bg-[#0F0F0F] border border-white/5 p-2">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=200&q=80" class="w-full h-full object-contain mix-blend-screen">
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">OLED Display 0.96"</h3>
                            <button class="text-gray-600 hover:text-red-500 transition-colors">×</button>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 font-mono">SKU: OLED-12864-W</div>
                        <div class="flex justify-between items-center">
                            <div class="flex border border-white/10 bg-black">
                                <button class="w-8 hover:bg-white/10">-</button>
                                <input type="text" value="2" class="w-8 bg-transparent text-center text-sm focus:outline-none">
                                <button class="w-8 hover:bg-white/10">+</button>
                            </div>
                            <div class="font-bold text-cyan-400">$9.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary -->
            <div class="bg-[#0A0A0A] border border-white/10 p-8 h-fit">
                <h3 class="text-lg font-bold uppercase mb-6">Order Summary</h3>
                <div class="space-y-4 mb-8 text-sm">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal</span>
                        <span class="text-white">$21.99</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Shipping</span>
                        <span class="text-white">$5.00</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Tax</span>
                        <span class="text-white">$1.80</span>
                    </div>
                    <div class="border-t border-white/10 pt-4 flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span class="text-cyan-400">$28.79</span>
                    </div>
                </div>
                <button class="w-full bg-cyan-600 hover:bg-cyan-500 text-black font-bold uppercase tracking-widest py-4 transition-all hover:shadow-[0_0_20px_rgba(6,182,212,0.4)]">
                    Checkout Securely
                </button>
                <div class="text-center mt-4 text-[10px] text-gray-600 uppercase tracking-widest">
                    Encrypted Transaction
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

