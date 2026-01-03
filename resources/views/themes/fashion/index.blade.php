@php
    $featured = (object) [
        'name' => 'The Autumn Coat',
        'price' => 299.00,
        'image' => 'https://images.unsplash.com/photo-1544957992-20516f573135?w=800&h=1000&fit=crop'
    ];
@endphp

@extends('layouts.app')

@section('title', 'VOGUE - Fashion Redefined')

@section('content')
<div class="bg-[#fcfbf9] text-[#1a1a1a] min-h-screen font-serif selection:bg-black selection:text-white">
    
    <!-- Minimal Header -->
    <nav class="fixed w-full z-50 mix-blend-difference text-white top-0 left-0 px-8 py-6 flex justify-between items-end">
        <a href="/" class="text-xs font-sans font-bold tracking-[0.2em] uppercase">Omnishop</a>
        <div class="text-4xl font-black tracking-tighter uppercase leading-none">Vogue</div>
        <div class="text-xs font-sans font-bold tracking-[0.2em] uppercase">Bag (0)</div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center justify-center pt-20 pb-20 px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 w-full max-w-[1800px] mx-auto items-center">
            
            <!-- Left Text -->
            <div class="hidden md:block col-span-3 space-y-12">
                <div class="space-y-2">
                    <p class="font-sans text-xs font-bold tracking-widest uppercase text-gray-500">Collection</p>
                    <p class="text-4xl italic">Autumn /<br>Winter 2024</p>
                </div>
                <div class="space-y-2">
                    <p class="font-sans text-xs font-bold tracking-widest uppercase text-gray-500">Photography</p>
                    <p class="text-xl">Sarah Moon</p>
                </div>
            </div>

            <!-- Main Image -->
            <div class="col-span-12 md:col-span-6 relative z-10">
                <div class="aspect-[3/4] overflow-hidden relative group">
                    <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=1200&h=1600&fit=crop" class="w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-105" alt="Fashion Model">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-black/10">
                        <span class="font-sans text-xs font-bold uppercase tracking-widest text-white border border-white px-6 py-3 backdrop-blur-md">Explore Campaign</span>
                    </div>
                </div>
                <h1 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[15vw] leading-none font-black text-transparent stroke-text pointer-events-none z-20 mix-blend-difference text-white opacity-90">
                    VOGUE
                </h1>
            </div>

            <!-- Right Text -->
            <div class="col-span-12 md:col-span-3 flex flex-col justify-between h-full py-12">
                <div class="text-right md:text-left">
                    <p class="text-2xl leading-relaxed max-w-xs ml-auto md:ml-0">
                        "Fashion is not something that exists in dresses only."
                    </p>
                    <p class="mt-4 font-sans text-xs font-bold uppercase tracking-widest text-gray-400">— Coco Chanel</p>
                </div>
                <div class="mt-12 text-right md:text-left">
                     <a href="#shop" class="group inline-flex items-center gap-4 font-sans text-xs font-bold uppercase tracking-widest">
                        <span class="w-12 h-px bg-black group-hover:w-20 transition-all"></span>
                        Scroll Down
                     </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Editorial Layout Grid -->
    <section id="shop" class="py-32 px-4 md:px-12">
        <div class="max-w-[1600px] mx-auto">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24 border-b border-black py-8">
                <h2 class="text-6xl md:text-8xl italic">New Arrivals</h2>
                <a href="#" class="font-sans text-xs font-bold uppercase tracking-widest hover:underline mb-4 md:mb-2">View All Products</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-32">
                
                <!-- Product 1 -->
                <div class="group cursor-pointer space-y-6">
                    <div class="relative aspect-[3/4] overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=800&h=1000&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                        <div class="absolute bottom-4 left-4 font-sans text-xs font-bold uppercase bg-white px-3 py-1">Best Seller</div>
                    </div>
                    <div class="flex justify-between items-start border-t border-black pt-4">
                        <div>
                            <h3 class="text-2xl italic group-hover:pl-4 transition-all duration-300">The Trench</h3>
                            <p class="font-sans text-xs text-gray-500 mt-1 uppercase tracking-wider">Outerwear</p>
                        </div>
                        <span class="font-sans font-bold">$499</span>
                    </div>
                </div>

                <!-- Product 2 (Offset) -->
                <div class="group cursor-pointer space-y-6 md:mt-32">
                    <div class="relative aspect-[3/4] overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1515347619252-60a6bf4fffce?w=800&h=1000&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start border-t border-black pt-4">
                        <div>
                            <h3 class="text-2xl italic group-hover:pl-4 transition-all duration-300">Silk Blouse</h3>
                            <p class="font-sans text-xs text-gray-500 mt-1 uppercase tracking-wider">Tops</p>
                        </div>
                        <span class="font-sans font-bold">$245</span>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group cursor-pointer space-y-6">
                    <div class="relative aspect-[3/4] overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1550614000-4b9519e02d48?w=800&h=1000&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start border-t border-black pt-4">
                        <div>
                            <h3 class="text-2xl italic group-hover:pl-4 transition-all duration-300">Pleated Skirt</h3>
                            <p class="font-sans text-xs text-gray-500 mt-1 uppercase tracking-wider">Bottoms</p>
                        </div>
                        <span class="font-sans font-bold">$189</span>
                    </div>
                </div>

                 <!-- Product 4 (Large) -->
                 <div class="group cursor-pointer col-span-1 md:col-span-2 relative mt-32">
                    <div class="aspect-[16/9] overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1600&h=900&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 flex items-center justify-center">
                             <h3 class="text-6xl text-white mix-blend-difference italic opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform translate-y-10 group-hover:translate-y-0">The Evening Edit</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Lookbook Section -->
    <section class="bg-black text-white py-40 overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 pointer-events-none">
            <div class="absolute w-96 h-96 bg-purple-500 rounded-full blur-[128px] top-1/4 -left-20"></div>
            <div class="absolute w-96 h-96 bg-blue-500 rounded-full blur-[128px] bottom-1/4 -right-20"></div>
        </div>
        
        <div class="container mx-auto px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <div class="space-y-12">
                    <h2 class="text-7xl md:text-9xl font-serif italic leading-[0.8]">
                        Bold<br>
                        <span class="font-sans not-italic font-black text-transparent stroke-text-white text-5xl md:text-7xl tracking-tighter">MOVES</span>
                    </h2>
                    <p class="text-xl text-gray-400 max-w-md font-sans font-light leading-relaxed">
                        Discover the new season's defining silhouettes. Structured tailoring meets fluid drapery in a collection designed for the modern muse.
                    </p>
                    <a href="#" class="inline-block border border-white px-12 py-4 font-sans text-xs font-bold uppercase tracking-[0.2em] hover:bg-white hover:text-black transition-colors">
                        View Lookbook
                    </a>
                </div>
                <div class="relative">
                     <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=800&h=1000&fit=crop" class="w-3/4 ml-auto filter sepia-[.25] contrast-125">
                     <div class="absolute -bottom-12 -left-12 bg-white text-black p-8 max-w-xs">
                        <p class="font-serif italic text-2xl">"Elegance is refusal."</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#fcfbf9] text-black py-20 border-t border-black px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <div class="text-4xl font-black uppercase tracking-tighter mb-2">Vogue</div>
                <p class="font-sans text-xs font-bold uppercase tracking-widest text-gray-500">&copy; 2024 Omnishop</p>
            </div>
            <div class="flex gap-8 font-sans text-xs font-bold uppercase tracking-widest">
                <a href="#" class="hover:underline">Instagram</a>
                <a href="#" class="hover:underline">Facebook</a>
                <a href="#" class="hover:underline">Pinterest</a>
            </div>
        </div>
    </footer>
</div>
@endsection
