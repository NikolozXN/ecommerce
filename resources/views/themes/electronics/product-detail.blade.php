@extends('layouts.app')

@section('title', 'ESP32-S3 DevKit - CyberParts')

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
                <a href="cart.html" class="hover:text-cyan-500 transition-colors">Cart (2)</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-12 px-6 max-w-7xl mx-auto">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-xs text-gray-500 uppercase tracking-widest mb-8">
            <a href="index.html" class="hover:text-cyan-500">Home</a>
            <span>/</span>
            <a href="products.html" class="hover:text-cyan-500">Microcontrollers</a>
            <span>/</span>
            <span class="text-white">ESP32-S3 DevKit</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Images -->
            <div class="space-y-4">
                <div class="aspect-square bg-[#0A0A0A] border border-white/10 p-12 flex items-center justify-center overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1608500219063-e9134a625e19?w=800&q=80" class="w-full h-full object-contain mix-blend-screen hover:scale-110 transition-transform duration-500">
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <button class="aspect-square bg-[#0A0A0A] border border-cyan-500/50 p-2"><img src="https://images.unsplash.com/photo-1608500219063-e9134a625e19?w=200&q=80" class="w-full h-full object-contain mix-blend-screen"></button>
                    <button class="aspect-square bg-[#0A0A0A] border border-white/10 p-2 hover:border-cyan-500/30"><img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=200&q=80" class="w-full h-full object-contain mix-blend-screen grayscale"></button>
                    <button class="aspect-square bg-[#0A0A0A] border border-white/10 p-2 hover:border-cyan-500/30"><img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=200&q=80" class="w-full h-full object-contain mix-blend-screen grayscale"></button>
                </div>
            </div>

            <!-- Info -->
            <div>
                <div class="inline-block px-2 py-1 bg-cyan-900/30 text-cyan-400 text-[10px] font-bold uppercase tracking-widest mb-4 border border-cyan-500/30">
                    In Stock
                </div>
                <h1 class="text-4xl font-black uppercase mb-2">ESP32-S3 DevKit C</h1>
                <div class="text-gray-400 text-sm mb-6 font-mono">SKU: ESP-S3-WROOM-1</div>
                
                <div class="text-3xl font-bold text-white mb-8 border-b border-white/10 pb-8">
                    $12.99
                </div>

                <div class="prose prose-invert prose-sm text-gray-400 mb-8">
                    <p>The ESP32-S3 is a low-power MCU-based system on a chip (SoC) with integrated 2.4 GHz Wi-Fi and Bluetooth® Low Energy (Bluetooth LE). It consists of high-performance dual-core microprocessor (Xtensa® 32-bit LX7), a low power coprocessor, a Wi-Fi baseband, a Bluetooth LE baseband, RF module, and peripherals.</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-[#0A0A0A] border border-white/10 p-3">
                        <div class="text-[10px] text-gray-500 uppercase tracking-wider">Clock Speed</div>
                        <div class="font-bold text-cyan-400">240 MHz</div>
                    </div>
                    <div class="bg-[#0A0A0A] border border-white/10 p-3">
                        <div class="text-[10px] text-gray-500 uppercase tracking-wider">Flash Memory</div>
                        <div class="font-bold text-cyan-400">8 MB</div>
                    </div>
                    <div class="bg-[#0A0A0A] border border-white/10 p-3">
                        <div class="text-[10px] text-gray-500 uppercase tracking-wider">SRAM</div>
                        <div class="font-bold text-cyan-400">512 KB</div>
                    </div>
                    <div class="bg-[#0A0A0A] border border-white/10 p-3">
                        <div class="text-[10px] text-gray-500 uppercase tracking-wider">Interface</div>
                        <div class="font-bold text-cyan-400">Type-C</div>
                    </div>
                </div>

                <div class="flex gap-4 mb-8">
                    <div class="flex border border-white/20">
                        <button class="w-10 hover:bg-white/10 text-xl">-</button>
                        <input type="text" value="1" class="w-12 bg-transparent text-center border-x border-white/20 focus:outline-none">
                        <button class="w-10 hover:bg-white/10 text-xl">+</button>
                    </div>
                    <button class="flex-1 bg-cyan-600 hover:bg-cyan-500 text-black font-bold uppercase tracking-widest py-3 transition-all hover:shadow-[0_0_20px_rgba(6,182,212,0.4)]">
                        Add to Cart
                    </button>
                </div>

                <div class="flex gap-4 text-xs text-gray-500 uppercase tracking-widest border-t border-white/10 pt-6">
                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Original Part</span>
                    <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> Fast Shipping</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

