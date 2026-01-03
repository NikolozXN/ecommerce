@extends('layouts.app')

@section('title', 'CyberParts - Catalog')

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
                <a href="products.html" class="text-white">Catalog</a>
                <a href="cart.html" class="hover:text-cyan-500 transition-colors">Cart (2)</a>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen">
        <!-- Sidebar Filters -->
        <aside class="w-64 border-r border-white/10 p-6 hidden lg:block">
            <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-6">Filters</h3>
            
            <div class="mb-8">
                <h4 class="text-sm font-bold text-white mb-4">Price Range</h4>
                <input type="range" class="w-full accent-cyan-500 mb-2">
                <div class="flex justify-between text-xs text-gray-500">
                    <span>$0</span>
                    <span>$500</span>
                </div>
            </div>

            <div class="mb-8">
                <h4 class="text-sm font-bold text-white mb-4">Category</h4>
                <div class="space-y-2 text-sm text-gray-400">
                    <label class="flex items-center gap-2 cursor-pointer hover:text-cyan-400"><input type="checkbox" class="accent-cyan-500 bg-transparent border-white/20"> Microcontrollers</label>
                    <label class="flex items-center gap-2 cursor-pointer hover:text-cyan-400"><input type="checkbox" class="accent-cyan-500 bg-transparent border-white/20"> Sensors</label>
                    <label class="flex items-center gap-2 cursor-pointer hover:text-cyan-400"><input type="checkbox" class="accent-cyan-500 bg-transparent border-white/20"> Actuators</label>
                    <label class="flex items-center gap-2 cursor-pointer hover:text-cyan-400"><input type="checkbox" class="accent-cyan-500 bg-transparent border-white/20"> Displays</label>
                </div>
            </div>
        </aside>

        <!-- Product Grid -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold uppercase">All Components</h1>
                <select class="bg-[#0A0A0A] border border-white/10 text-sm p-2 outline-none focus:border-cyan-500 text-gray-400">
                    <option>Sort by: Newest</option>
                    <option>Sort by: Price (Low to High)</option>
                    <option>Sort by: Price (High to Low)</option>
                </select>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @for ($i = 0; $i < 12; $i++)
                <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-cyan-500/50 transition-all flex flex-col">
                    <a href="product-detail.html" class="aspect-square relative overflow-hidden bg-[#0F0F0F] p-8 block">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=500&q=80" class="w-full h-full object-contain mix-blend-screen opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-500">
                    </a>
                    <div class="p-5 flex-1 flex flex-col border-t border-white/5 bg-[#0B0B0B]">
                        <a href="product-detail.html" class="font-bold text-lg mb-2 text-gray-200 group-hover:text-cyan-400 transition-colors">OLED Module 0.96"</a>
                        <div class="mt-auto flex items-center justify-between">
                            <span class="text-xl font-bold text-white font-mono">$4.50</span>
                            <button class="w-8 h-8 bg-white/5 hover:bg-cyan-600 hover:text-black flex items-center justify-center border border-white/10 transition-all">
                                +
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 gap-2">
                <button class="px-4 py-2 border border-white/10 hover:border-cyan-500 text-gray-400 hover:text-cyan-500">1</button>
                <button class="px-4 py-2 border border-white/10 hover:border-cyan-500 text-gray-400 hover:text-cyan-500">2</button>
                <button class="px-4 py-2 border border-white/10 hover:border-cyan-500 text-gray-400 hover:text-cyan-500">3</button>
                <span class="px-4 py-2 text-gray-600">...</span>
                <button class="px-4 py-2 border border-white/10 hover:border-cyan-500 text-gray-400 hover:text-cyan-500">Next ></button>
            </div>
        </main>
    </div>
</div>
@endsection

