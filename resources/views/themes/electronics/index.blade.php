@php
    // Mock Data for Electronics Theme
    $categories = [
        (object)['name' => 'Components', 'count' => 842, 'icon' => 'CPU'],
        (object)['name' => 'Sensors', 'count' => 324, 'icon' => 'Activity'],
        (object)['name' => 'Robotics', 'count' => 156, 'icon' => 'Bot'],
        (object)['name' => 'Displays', 'count' => 98, 'icon' => 'Monitor'],
        (object)['name' => 'Wireless', 'count' => 245, 'icon' => 'Wifi'],
        (object)['name' => 'Power', 'count' => 189, 'icon' => 'Battery'],
    ];

    $featured = [
        (object)[
            'name' => 'ESP32-S3 DevKit',
            'price' => 12.99,
            'image' => 'https://images.unsplash.com/photo-1608500219063-e9134a625e19?w=800&q=80',
            'badges' => ['New', 'Best Seller'],
            'specs' => ['WiFi + BT', 'Dual Core', '8MB Flash']
        ],
        (object)[
            'name' => 'Raspberry Pi 5 8GB',
            'price' => 79.99,
            'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80',
            'badges' => ['Hot'],
            'specs' => ['2.4GHz Quad', '8GB RAM', 'PCIe 2.0']
        ],
        (object)[
            'name' => 'OLED Display 0.96"',
            'price' => 4.50,
            'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80',
            'badges' => [],
            'specs' => ['128x64', 'I2C', 'White']
        ],
        (object)[
            'name' => 'NEMA 17 Stepper',
            'price' => 14.99,
            'image' => 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=800&q=80',
            'badges' => ['Restocked'],
            'specs' => ['1.5A', '48mm', 'High Torque']
        ]
    ];
@endphp

@extends('layouts.app')

@section('title', 'CyberParts - Electronics & Components')

@section('content')
<div class="bg-[#050505] text-white min-h-screen font-mono selection:bg-cyan-500 selection:text-black">
    
    <!-- Top Bar -->
    <div class="bg-cyan-900/20 border-b border-cyan-500/20 text-[10px] uppercase tracking-widest py-2">
        <div class="container-fluid flex justify-between items-center text-cyan-400">
            <div class="flex gap-4">
                <span><span class="w-2 h-2 inline-block bg-green-500 rounded-full mr-1 animate-pulse"></span> System Online</span>
                <span>Global Shipping Active</span>
            </div>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white">Support</a>
                <a href="#" class="hover:text-white">Datasheets</a>
                <a href="#" class="hover:text-white">Forum</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-[#050505]/90 backdrop-blur border-b border-white/10">
        <div class="container-fluid h-20 flex items-center justify-between gap-8">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="relative w-10 h-10 bg-cyan-500/10 border border-cyan-500/50 flex items-center justify-center overflow-hidden group-hover:border-cyan-400 transition-colors">
                    <div class="absolute inset-0 bg-cyan-500/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-6 h-6 text-cyan-500 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg tracking-tight leading-none group-hover:text-cyan-400 transition-colors">CYBER<span class="text-cyan-500">PARTS</span></span>
                    <span class="text-[10px] text-gray-500 uppercase tracking-widest">Hardware Supply</span>
                </div>
            </a>

            <!-- Search -->
            <div class="hidden md:flex flex-1 max-w-2xl relative group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-4 w-4 text-gray-500 group-focus-within:text-cyan-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" class="w-full bg-[#0A0A0A] border border-white/10 text-sm py-3 pl-12 pr-20 focus:outline-none focus:border-cyan-500/50 focus:ring-1 focus:ring-cyan-500/50 transition-all placeholder-gray-600 font-mono" placeholder="Search by Part #, Keyword, or Category...">
                <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                    <kbd class="hidden sm:inline-block border border-white/10 rounded px-2 py-1 text-[10px] text-gray-500 font-sans">CMD+K</kbd>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center gap-6">
                <div class="hidden md:flex items-center gap-6 text-xs uppercase font-bold tracking-widest text-gray-400">
                    <a href="#" class="hover:text-cyan-500 transition-colors">Projects</a>
                    <a href="#" class="hover:text-cyan-500 transition-colors">Community</a>
                </div>
                <a href="#" class="relative p-2 hover:bg-white/5 transition-colors border border-transparent hover:border-white/10">
                    <svg class="w-6 h-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-cyan-500 rounded-full shadow-[0_0_10px_#06b6d4]"></span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content Grid -->
    <div class="flex flex-col lg:flex-row min-h-[calc(100vh-80px)]">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full lg:w-64 bg-[#080808] border-r border-white/5 lg:min-h-screen hidden lg:block p-6">
            <div class="mb-8">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Categories</h3>
                <ul class="space-y-1">
                    @foreach($categories as $category)
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-sm text-gray-400 hover:text-cyan-400 hover:bg-cyan-900/10 border border-transparent hover:border-cyan-900/30 transition-all group">
                            <span>{{ $category->name }}</span>
                            <span class="text-[10px] bg-white/5 px-1.5 py-0.5 rounded text-gray-600 group-hover:text-cyan-500 group-hover:bg-cyan-900/20 transition-colors">{{ $category->count }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Filters</h3>
                <div class="space-y-4">
                    <label class="flex items-center gap-2 text-sm text-gray-400 hover:text-white cursor-pointer group">
                        <div class="w-4 h-4 border border-white/20 bg-[#050505] group-hover:border-cyan-500 transition-colors"></div>
                        In Stock Only
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-400 hover:text-white cursor-pointer group">
                        <div class="w-4 h-4 border border-white/20 bg-[#050505] group-hover:border-cyan-500 transition-colors"></div>
                        On Sale
                    </label>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            
            <!-- Hero Banner -->
            <div class="relative h-[400px] bg-[#0A0A0A] overflow-hidden border-b border-white/5 group">
                <!-- Background Grid Animation -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
                
                <div class="absolute inset-0 flex items-center justify-between container-fluid px-12 relative z-10">
                    <div class="max-w-xl space-y-6">
                        <div class="inline-flex items-center gap-2 text-cyan-400 text-xs font-bold tracking-[0.2em] uppercase">
                            <span class="w-2 h-2 bg-cyan-400"></span>
                            New Arrival
                        </div>
                        <h1 class="text-6xl font-black uppercase tracking-tighter leading-[0.9] text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-500">
                            Neural <br> Processing <br> Unit v2
                        </h1>
                        <p class="text-gray-400 text-lg border-l-2 border-cyan-500 pl-4">
                            Next-gen AI acceleration for edge devices. <br>
                            <span class="text-cyan-400 font-bold">12 TOPS</span> performance.
                        </p>
                        <div class="pt-4 flex gap-4">
                            <button class="bg-cyan-600 hover:bg-cyan-500 text-black font-bold px-8 py-4 text-sm uppercase tracking-widest transition-all hover:shadow-[0_0_30px_rgba(6,182,212,0.4)]">
                                View Specs
                            </button>
                            <button class="border border-white/20 hover:border-white text-white font-bold px-8 py-4 text-sm uppercase tracking-widest transition-all">
                                Datasheet
                            </button>
                        </div>
                    </div>
                    
                    <!-- decorative visual -->
                    <div class="hidden lg:block w-96 h-96 relative">
                        <div class="absolute inset-0 bg-cyan-500/20 blur-[100px] animate-pulse"></div>
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" class="relative z-10 w-full h-full object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)] transform -rotate-12 hover:rotate-0 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 border-b border-white/5 bg-[#080808] divide-x divide-white/5">
                <div class="p-6 text-center group hover:bg-white/5 transition-colors">
                    <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">Stock Status</div>
                    <div class="text-green-400 font-bold font-mono group-hover:text-green-300">98.5% Available</div>
                </div>
                <div class="p-6 text-center group hover:bg-white/5 transition-colors">
                    <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">New Items</div>
                    <div class="text-white font-bold font-mono group-hover:text-cyan-400">+124 Today</div>
                </div>
                <div class="p-6 text-center group hover:bg-white/5 transition-colors">
                    <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">Shipping</div>
                    <div class="text-white font-bold font-mono">Global Express</div>
                </div>
                <div class="p-6 text-center group hover:bg-white/5 transition-colors">
                    <div class="text-xs text-gray-500 uppercase tracking-widest mb-1">Support</div>
                    <div class="text-white font-bold font-mono">24/7 Technical</div>
                </div>
            </div>

            <!-- Featured Products Grid -->
            <section class="p-8">
                <div class="flex items-end justify-between mb-8">
                    <div>
                        <h2 class="text-2xl font-bold uppercase tracking-wide">Featured Components</h2>
                        <div class="h-1 w-12 bg-cyan-500 mt-2"></div>
                    </div>
                    <a href="#" class="text-xs font-bold uppercase tracking-widest text-cyan-500 hover:text-white transition-colors">View All ></a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                    @foreach($featured as $product)
                    <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-cyan-500/50 transition-all duration-300 flex flex-col">
                        <!-- Image -->
                        <div class="aspect-square relative overflow-hidden bg-[#0F0F0F] p-8">
                            <div class="absolute top-0 right-0 p-3 flex flex-col gap-2 items-end z-20">
                                @foreach($product->badges as $badge)
                                <span class="text-[10px] font-bold bg-cyan-900/50 text-cyan-400 border border-cyan-500/30 px-2 py-1 uppercase tracking-wider">
                                    {{ $badge }}
                                </span>
                                @endforeach
                            </div>
                            <img src="{{ $product->image }}" class="w-full h-full object-contain mix-blend-screen opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-500">
                        </div>

                        <!-- Content -->
                        <div class="p-5 flex-1 flex flex-col border-t border-white/5 bg-[#0B0B0B] group-hover:bg-[#111] transition-colors">
                            <h3 class="font-bold text-lg mb-2 text-gray-200 group-hover:text-cyan-400 transition-colors line-clamp-1">{{ $product->name }}</h3>
                            
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($product->specs as $spec)
                                <span class="text-[10px] text-gray-500 border border-white/10 px-1.5 py-0.5">{{ $spec }}</span>
                                @endforeach
                            </div>

                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-white font-mono">${{ number_format($product->price, 2) }}</span>
                                <button class="w-8 h-8 bg-white/5 hover:bg-cyan-600 hover:text-black flex items-center justify-center border border-white/10 transition-all">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- Technical Categories -->
            <section class="p-8 border-t border-white/5">
                <h2 class="text-2xl font-bold uppercase tracking-wide mb-8">Hardware Catalog</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach($categories as $cat)
                    <a href="#" class="group border border-white/10 bg-[#0A0A0A] hover:bg-[#111] hover:border-cyan-500/30 p-6 flex flex-col items-center justify-center gap-4 transition-all">
                        <div class="w-12 h-12 rounded-full bg-white/5 group-hover:bg-cyan-500/10 flex items-center justify-center transition-colors">
                            <!-- Simple Icon Placeholder -->
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                            </svg>
                        </div>
                        <span class="text-sm font-bold uppercase tracking-wider text-gray-300 group-hover:text-white">{{ $cat->name }}</span>
                    </a>
                    @endforeach
                </div>
            </section>

        </main>
    </div>
</div>
@endsection
