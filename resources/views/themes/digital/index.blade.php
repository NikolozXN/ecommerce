@php
    $products = collect([
        (object) [
            'name' => 'Cyber UI Kit',
            'category' => 'Figma',
            'price' => 49,
            'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=600&h=600&fit=crop',
            'downloads' => '2.4k'
        ],
        (object) [
            'name' => '3D Abstract Pack',
            'category' => 'Blender',
            'price' => 29,
            'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&h=600&fit=crop',
            'downloads' => '1.2k'
        ],
        (object) [
            'name' => 'Neon Icons',
            'category' => 'Icons',
            'price' => 19,
            'image' => 'https://images.unsplash.com/photo-1563089145-599997674d42?w=600&h=600&fit=crop',
            'downloads' => '5.6k'
        ],
        (object) [
            'name' => 'Glitch Shader',
            'category' => 'Unity',
            'price' => 35,
            'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=600&fit=crop',
            'downloads' => '800'
        ]
    ]);
@endphp

@extends('layouts.app')

@section('title', 'NEXUS - Digital Assets')

@section('content')
<div class="bg-[#050505] text-white min-h-screen font-mono selection:bg-cyan-500 selection:text-black">
    
    <!-- Navbar -->
    <nav class="border-b border-white/10 bg-[#050505]/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 bg-cyan-500 animate-pulse"></div>
                <span class="font-bold tracking-widest uppercase text-sm">NEXUS_STORE</span>
            </div>
            <div class="flex items-center gap-6 text-xs uppercase tracking-widest text-gray-400">
                <a href="#" class="hover:text-cyan-500 transition-colors">Assets</a>
                <a href="#" class="hover:text-cyan-500 transition-colors">Creators</a>
                <a href="#" class="hover:text-cyan-500 transition-colors">Community</a>
            </div>
            <button class="border border-white/20 hover:bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-widest transition-all">
                Login
            </button>
        </div>
    </nav>

    <!-- Hero -->
    <header class="relative py-32 px-6 overflow-hidden border-b border-white/10">
        <!-- Grid Background -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#050505_100%)]"></div>

        <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-block border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-bold px-2 py-1 mb-6 tracking-widest uppercase">
                    v.4.0 System Online
                </div>
                <h1 class="text-6xl lg:text-8xl font-black uppercase leading-[0.8] mb-8 tracking-tighter">
                    Digital<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">Reality</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-lg mb-10 leading-relaxed">
                    Premium digital assets for next-gen creators. 3D models, UI kits, textures, and code snippets.
                </p>
                <div class="flex gap-4">
                    <button class="bg-cyan-500 text-black font-bold px-8 py-4 text-sm uppercase tracking-widest hover:bg-cyan-400 transition-colors">
                        Browse_All
                    </button>
                    <button class="border border-white/20 text-white font-bold px-8 py-4 text-sm uppercase tracking-widest hover:border-white transition-colors">
                        Upload
                    </button>
                </div>
            </div>

            <!-- Glitch Card -->
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-lg blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                <div class="relative bg-[#0A0A0A] border border-white/10 rounded-lg p-1 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614728263952-84ea256f9679?w=800&h=600&fit=crop" class="w-full h-auto rounded filter contrast-125 hover:hue-rotate-15 transition-all duration-700">
                    <div class="absolute bottom-4 left-4 right-4 bg-black/80 backdrop-blur border border-white/10 p-4 rounded flex justify-between items-center">
                        <div>
                            <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">Featured Asset</div>
                            <div class="font-bold">Cyberpunk City Pack</div>
                        </div>
                        <div class="text-cyan-400 font-bold">$89</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Bar -->
    <div class="border-b border-white/10 bg-[#0A0A0A]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 divide-x divide-white/10">
            <div class="py-6 text-center">
                <div class="text-2xl font-bold text-white">2.4M+</div>
                <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Downloads</div>
            </div>
            <div class="py-6 text-center">
                <div class="text-2xl font-bold text-white">12k+</div>
                <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Creators</div>
            </div>
            <div class="py-6 text-center">
                <div class="text-2xl font-bold text-white">850+</div>
                <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">New Assets</div>
            </div>
            <div class="py-6 text-center">
                <div class="text-2xl font-bold text-white">4.9/5</div>
                <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Rating</div>
            </div>
        </div>
    </div>

    <!-- Marketplace Grid -->
    <section class="py-24 px-6 max-w-7xl mx-auto">
        <div class="flex items-end justify-between mb-16">
            <div>
                <h2 class="text-4xl font-bold uppercase mb-2">Trending_Assets</h2>
                <div class="h-1 w-20 bg-cyan-500"></div>
            </div>
            <div class="flex gap-2">
                <button class="w-10 h-10 border border-white/10 flex items-center justify-center hover:bg-white/5">&lt;</button>
                <button class="w-10 h-10 border border-white/10 flex items-center justify-center hover:bg-white/5">&gt;</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="group border border-white/10 bg-[#0A0A0A] hover:border-cyan-500/50 transition-colors p-4 relative">
                <div class="aspect-square bg-[#111] mb-4 overflow-hidden relative">
                    <img src="{{ $product->image }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-500">
                    <div class="absolute top-2 right-2 bg-black/80 text-white text-xs font-bold px-2 py-1 border border-white/20">
                        {{ $product->category }}
                    </div>
                </div>
                
                <h3 class="font-bold text-lg mb-1 group-hover:text-cyan-400 transition-colors">{{ $product->name }}</h3>
                <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                    <span>{{ $product->downloads }} Downloads</span>
                    <span>License: Pro</span>
                </div>
                
                <div class="flex items-center justify-between border-t border-white/10 pt-4">
                    <span class="text-xl font-bold text-white">${{ $product->price }}</span>
                    <button class="text-xs font-bold uppercase tracking-widest text-cyan-500 hover:text-white transition-colors">
                        Add to Cart >
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="border-t border-white/10 py-12 text-center text-xs text-gray-500 uppercase tracking-widest">
        <p>&copy; 2024 Nexus Digital Market. System Online.</p>
    </footer>
</div>
@endsection
