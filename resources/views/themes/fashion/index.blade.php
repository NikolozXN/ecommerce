@php
    $featured_collection = [
        (object)[
            'name' => 'Oversized Wool Coat',
            'price' => 890,
            'image' => 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=800&q=80',
            'category' => 'Outerwear'
        ],
        (object)[
            'name' => 'Pleated Wide Trousers',
            'price' => 450,
            'image' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?w=800&q=80',
            'category' => 'Bottoms'
        ],
        (object)[
            'name' => 'Structured Blazer',
            'price' => 620,
            'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&q=80',
            'category' => 'Tailoring'
        ]
    ];
@endphp

@extends('layouts.app')

@section('title', 'VOGUE - High Fashion')

@section('content')
<div class="bg-white text-black min-h-screen font-serif selection:bg-black selection:text-white">
    
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 mix-blend-difference text-white">
        <div class="px-8 py-6 flex justify-between items-center">
            <a href="#" class="text-3xl font-black uppercase tracking-tighter">VOGUE</a>
            <div class="hidden md:flex gap-12 text-xs font-bold tracking-[0.2em] uppercase font-sans">
                <a href="#" class="hover:underline underline-offset-4">Collections</a>
                <a href="#" class="hover:underline underline-offset-4">Maison</a>
                <a href="#" class="hover:underline underline-offset-4">Campaigns</a>
            </div>
            <div class="flex gap-6 text-xs font-bold tracking-[0.2em] uppercase font-sans">
                <button>Search</button>
                <button>Cart (0)</button>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="relative h-screen flex flex-col justify-end pb-20 px-8">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=2400&q=80" class="w-full h-full object-cover grayscale brightness-90">
        </div>
        
        <div class="relative z-10 grid grid-cols-12 gap-8 items-end">
            <div class="col-span-12 md:col-span-8">
                <h1 class="text-[15vw] leading-[0.8] font-black uppercase text-white mix-blend-difference tracking-tighter">
                    Autumn<br>Winter
                </h1>
            </div>
            <div class="col-span-12 md:col-span-4 text-white mix-blend-difference font-sans">
                <p class="text-sm font-bold uppercase tracking-[0.2em] mb-8 border-t border-white pt-4">
                    Collection 2026
                </p>
                <p class="text-lg leading-relaxed mb-8 max-w-sm">
                    A study in contrast and silhouette. Exploring the boundaries between structure and fluidity.
                </p>
                <a href="#" class="inline-block px-8 py-4 bg-white text-black text-xs font-bold uppercase tracking-[0.2em] hover:bg-black hover:text-white transition-colors">
                    Explore Lookbook
                </a>
            </div>
        </div>
    </header>

    <!-- Editorial Layout -->
    <section class="py-32 px-4 md:px-8">
        <div class="grid grid-cols-12 gap-8 mb-32 items-center">
            <div class="col-span-12 md:col-span-5 order-2 md:order-1">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200&q=80" class="w-full aspect-[3/4] object-cover">
            </div>
            <div class="col-span-12 md:col-span-7 order-1 md:order-2 pl-0 md:pl-16">
                <span class="block text-xs font-bold font-sans uppercase tracking-[0.2em] text-gray-500 mb-4">The Philosophy</span>
                <h2 class="text-6xl md:text-8xl font-black uppercase leading-none mb-8">
                    Silent<br>Luxury
                </h2>
                <p class="text-xl font-sans text-gray-600 max-w-lg leading-relaxed">
                    We believe in the power of understatement. Quality that speaks in whispers, not shouts. Design that respects the wearer.
                </p>
            </div>
        </div>

        <!-- Featured Collection -->
        <div class="mb-32">
            <div class="flex justify-between items-end mb-12 border-b border-black pb-4">
                <h3 class="text-4xl font-bold uppercase tracking-tighter">New Arrivals</h3>
                <a href="#" class="text-xs font-bold font-sans uppercase tracking-[0.2em] hover:underline">View All</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-12">
                @foreach($featured_collection as $item)
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] overflow-hidden mb-6 relative">
                        <img src="{{ $item->image }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 grayscale group-hover:grayscale-0">
                        <div class="absolute bottom-4 left-4 bg-white px-3 py-1 text-[10px] font-sans font-bold uppercase tracking-[0.2em]">
                            {{ $item->category }}
                        </div>
                    </div>
                    <div class="flex justify-between items-start font-sans">
                        <div>
                            <h4 class="text-sm font-bold uppercase tracking-wider mb-1">{{ $item->name }}</h4>
                            <span class="text-xs text-gray-500">Available in 3 colors</span>
                        </div>
                        <span class="text-sm font-bold">${{ $item->price }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Full Width Banner -->
        <div class="relative h-[80vh] overflow-hidden mb-32 flex items-center justify-center text-center">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=2400&q=80" class="w-full h-full object-cover grayscale">
                <div class="absolute inset-0 bg-black/20"></div>
            </div>
            <div class="relative z-10 text-white max-w-2xl px-4">
                <h2 class="text-5xl md:text-7xl font-black uppercase tracking-tighter mb-8">Maison<br>Vogue</h2>
                <p class="text-lg font-sans mb-12">
                    Join our exclusive membership program for early access to collections and private events.
                </p>
                <form class="flex border-b border-white">
                    <input type="email" placeholder="ENTER YOUR EMAIL" class="bg-transparent w-full py-4 text-white placeholder-white/70 font-sans text-xs font-bold uppercase tracking-[0.2em] focus:outline-none">
                    <button class="text-xs font-bold font-sans uppercase tracking-[0.2em] px-4 hover:bg-white hover:text-black transition-colors">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="grid grid-cols-1 md:grid-cols-4 gap-12 font-sans text-xs font-bold uppercase tracking-[0.2em] border-t border-black pt-12">
            <div>
                <span class="block mb-6 text-gray-500">Customer Care</span>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:underline">Shipping</a></li>
                    <li><a href="#" class="hover:underline">Returns</a></li>
                    <li><a href="#" class="hover:underline">Size Guide</a></li>
                </ul>
            </div>
            <div>
                <span class="block mb-6 text-gray-500">Legal</span>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms of Use</a></li>
                </ul>
            </div>
            <div class="md:col-span-2 text-right">
                <span class="block mb-6 text-gray-500">Social</span>
                <div class="flex justify-end gap-6">
                    <a href="#" class="hover:underline">Instagram</a>
                    <a href="#" class="hover:underline">TikTok</a>
                    <a href="#" class="hover:underline">Pinterest</a>
                </div>
                <p class="mt-12 text-gray-400">© 2026 Vogue Inc.</p>
            </div>
        </footer>

    </section>
</div>
@endsection
