@extends('layouts.app')

@section('title', 'Omnishop - Premium Theme Collection')

@section('content')
<div class="bg-[#050505] text-white min-h-screen font-mono selection:bg-cyan-500 selection:text-black">
    
    <!-- Navbar -->
    <nav class="border-b border-white/10 bg-[#050505]/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 bg-cyan-500 animate-pulse"></div>
                <span class="font-bold tracking-widest uppercase text-sm">OMNISHOP_HUB</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-xs uppercase tracking-widest text-gray-400">
                <a href="#themes" class="hover:text-cyan-500 transition-colors">Themes</a>
                <a href="#" class="hover:text-cyan-500 transition-colors">Documentation</a>
                <a href="#" class="hover:text-cyan-500 transition-colors">Support</a>
            </div>
            <button class="border border-white/20 hover:bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-widest transition-all">
                Purchase License
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative py-24 px-6 overflow-hidden border-b border-white/10">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#050505_100%)]"></div>

        <div class="relative z-10 max-w-7xl mx-auto text-center">
            <div class="inline-block border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-bold px-3 py-1 mb-8 tracking-widest uppercase rounded-full">
                v2.0 System Online
            </div>
            <h1 class="text-5xl md:text-8xl font-black uppercase tracking-tighter mb-8 leading-none">
                Choose Your<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-pulse">Universe</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 leading-relaxed font-sans">
                Six distinct, production-ready e-commerce themes. Built with Tailwind CSS and Alpine.js. Designed for high conversion and maximum impact.
            </p>
        </div>
    </header>

    <!-- Themes Grid -->
    <section id="themes" class="py-24 px-6 max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Theme 1: Fashion -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-pink-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-pink-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">Fashion</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-pink-400 transition-colors">Vogue</h3>
                        <span class="text-xs text-gray-500 font-mono">v1.2</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">High-end editorial aesthetic with serif typography and brutalist layouts.</p>
                    <a href="/themes/fashion" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-pink-600 hover:border-pink-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

            <!-- Theme 2: Electronics -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-cyan-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-cyan-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">Electronics</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-cyan-400 transition-colors">Cyber</h3>
                        <span class="text-xs text-gray-500 font-mono">v2.0</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">Neon-accented, technical design perfect for gadgets, software, and gaming.</p>
                    <a href="/themes/electronics" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-cyan-600 hover:border-cyan-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

            <!-- Theme 3: Digital Assets -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-purple-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-purple-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1614728263952-84ea256f9679?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">Digital</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-purple-400 transition-colors">Nexus</h3>
                        <span class="text-xs text-gray-500 font-mono">v1.5</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">Dark mode marketplace for 3D assets, fonts, and digital downloads.</p>
                    <a href="/themes/digital" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-purple-600 hover:border-purple-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

            <!-- Theme 4: Local / Grocery -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-green-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-green-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">Grocery</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-green-400 transition-colors">Fresh</h3>
                        <span class="text-xs text-gray-500 font-mono">v1.1</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">Clean, organic aesthetics with vibrant colors for food and local delivery.</p>
                    <a href="/themes/local" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-green-600 hover:border-green-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

            <!-- Theme 5: Startup / SaaS -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-indigo-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-indigo-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">SaaS</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-indigo-400 transition-colors">Orbit</h3>
                        <span class="text-xs text-gray-500 font-mono">v1.8</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">Modern, glassmorphism-heavy design for startups and software products.</p>
                    <a href="/themes/startup" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-indigo-600 hover:border-indigo-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

            <!-- Theme 6: Marketplace -->
            <div class="group relative bg-[#0A0A0A] border border-white/10 hover:border-amber-500/50 transition-all duration-500 overflow-hidden">
                <div class="aspect-[4/3] relative overflow-hidden">
                    <div class="absolute inset-0 bg-amber-500/20 mix-blend-overlay z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <img src="https://images.unsplash.com/photo-1472851294608-415522f96319?w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="absolute top-4 right-4 z-20">
                        <span class="bg-black/80 text-white text-xs font-bold px-3 py-1 border border-white/20 uppercase tracking-widest">Market</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold uppercase tracking-tight group-hover:text-amber-400 transition-colors">Prime</h3>
                        <span class="text-xs text-gray-500 font-mono">v1.4</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-12">Information-dense layout for massive product catalogs and multi-vendor shops.</p>
                    <a href="/themes/marketplace" class="block w-full text-center py-4 border border-white/20 text-xs font-bold uppercase tracking-widest hover:bg-amber-600 hover:border-amber-600 hover:text-white transition-all">
                        Launch Demo
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/10 py-12 bg-[#050505] text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-black uppercase tracking-tighter mb-8 text-white">Omnishop</h2>
            <div class="flex justify-center gap-8 mb-8 text-xs font-bold uppercase tracking-widest text-gray-500">
                <a href="#" class="hover:text-white transition-colors">License</a>
                <a href="#" class="hover:text-white transition-colors">Documentation</a>
                <a href="#" class="hover:text-white transition-colors">Support</a>
                <a href="#" class="hover:text-white transition-colors">Github</a>
            </div>
            <p class="text-xs text-gray-600 uppercase tracking-widest">
                &copy; 2026 Omnishop. All Rights Reserved. System Active.
            </p>
        </div>
    </footer>
</div>
@endsection
