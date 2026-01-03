@extends('layouts.app')

@section('title', 'Orbit - Pricing & Plans')

@section('content')
<div class="bg-[#0B0C0E] text-white min-h-screen font-sans selection:bg-indigo-500 selection:text-white">
    
    <!-- Navbar (Same as Home) -->
    <nav class="fixed top-0 w-full z-50 border-b border-white/5 bg-[#0B0C0E]/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <a href="index.html" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-zinc-800 rounded-lg flex items-center justify-center font-bold text-lg text-zinc-400 hover:text-white transition-colors">&larr;</div>
                    <span class="font-bold text-lg tracking-tight">Orbit</span>
                </a>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                <a href="index.html" class="hover:text-white transition-colors">Features</a>
                <a href="#" class="text-white">Pricing</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="bg-white text-black px-5 py-2 rounded-full text-sm font-bold hover:bg-zinc-200 transition-colors">
                    Get Started
                </a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="pt-40 pb-20 px-6 text-center">
        <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-6">
            Simple, transparent <br>
            <span class="text-indigo-400">pricing.</span>
        </h1>
        <p class="text-xl text-zinc-400 max-w-xl mx-auto">
            No credit card required. Cancel anytime.
        </p>
    </header>

    <!-- Pricing Tables -->
    <section class="pb-32 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Starter -->
            <div class="bg-zinc-900/30 border border-white/10 rounded-3xl p-8 flex flex-col hover:border-white/20 transition-all">
                <h3 class="text-xl font-bold mb-2">Starter</h3>
                <p class="text-zinc-400 text-sm mb-6">Perfect for side projects.</p>
                <div class="text-4xl font-bold mb-6">$0 <span class="text-lg text-zinc-500 font-normal">/mo</span></div>
                
                <a href="#" class="w-full py-3 bg-zinc-800 hover:bg-zinc-700 rounded-full font-bold text-center transition-colors mb-8">Start for free</a>
                
                <ul class="space-y-4 text-sm text-zinc-300 flex-1">
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> 1 Project</li>
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> Community Support</li>
                    <li class="flex items-center gap-3"><span class="text-green-500">✓</span> 5GB Storage</li>
                </ul>
            </div>

            <!-- Pro (Highlighted) -->
            <div class="bg-zinc-900/80 border border-indigo-500 rounded-3xl p-8 flex flex-col relative transform md:-translate-y-4 shadow-2xl shadow-indigo-500/10">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest">Most Popular</div>
                
                <h3 class="text-xl font-bold mb-2 text-indigo-400">Pro</h3>
                <p class="text-zinc-400 text-sm mb-6">For growing businesses.</p>
                <div class="text-4xl font-bold mb-6">$29 <span class="text-lg text-zinc-500 font-normal">/mo</span></div>
                
                <a href="#" class="w-full py-3 bg-indigo-600 hover:bg-indigo-500 rounded-full font-bold text-center transition-colors mb-8 shadow-[0_0_20px_rgba(79,70,229,0.3)]">Get Started</a>
                
                <ul class="space-y-4 text-sm text-zinc-300 flex-1">
                    <li class="flex items-center gap-3"><span class="text-indigo-400">✓</span> Unlimited Projects</li>
                    <li class="flex items-center gap-3"><span class="text-indigo-400">✓</span> Priority Support</li>
                    <li class="flex items-center gap-3"><span class="text-indigo-400">✓</span> 50GB Storage</li>
                    <li class="flex items-center gap-3"><span class="text-indigo-400">✓</span> Analytics Dashboard</li>
                    <li class="flex items-center gap-3"><span class="text-indigo-400">✓</span> Custom Domain</li>
                </ul>
            </div>

            <!-- Enterprise -->
            <div class="bg-zinc-900/30 border border-white/10 rounded-3xl p-8 flex flex-col hover:border-white/20 transition-all">
                <h3 class="text-xl font-bold mb-2">Enterprise</h3>
                <p class="text-zinc-400 text-sm mb-6">For large-scale applications.</p>
                <div class="text-4xl font-bold mb-6">Custom</div>
                
                <a href="#" class="w-full py-3 bg-zinc-800 hover:bg-zinc-700 rounded-full font-bold text-center transition-colors mb-8">Contact Sales</a>
                
                <ul class="space-y-4 text-sm text-zinc-300 flex-1">
                    <li class="flex items-center gap-3"><span class="text-white">✓</span> Everything in Pro</li>
                    <li class="flex items-center gap-3"><span class="text-white">✓</span> Dedicated Support</li>
                    <li class="flex items-center gap-3"><span class="text-white">✓</span> Unlimited Storage</li>
                    <li class="flex items-center gap-3"><span class="text-white">✓</span> SLA & Contracts</li>
                </ul>
            </div>
            
        </div>
    </section>

</div>
@endsection

