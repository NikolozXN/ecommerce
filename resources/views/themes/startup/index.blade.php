@extends('layouts.app')

@section('title', 'Orbit - SaaS E-commerce Theme')

@section('content')
<div class="bg-[#0B0C0E] text-white min-h-screen font-sans selection:bg-indigo-500 selection:text-white overflow-x-hidden">
    
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 border-b border-white/5 bg-[#0B0C0E]/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center font-bold text-lg">O</div>
                <span class="font-bold text-lg tracking-tight">Orbit</span>
            </div>
            
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                <a href="#features" class="hover:text-white transition-colors">Features</a>
                <a href="#customers" class="hover:text-white transition-colors">Customers</a>
                <a href="products.html" class="hover:text-white transition-colors">Pricing</a>
                <a href="#about" class="hover:text-white transition-colors">Company</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="#" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors hidden sm:block">Sign In</a>
                <a href="products.html" class="bg-white text-black px-5 py-2 rounded-full text-sm font-bold hover:bg-zinc-200 transition-colors">
                    Get Started
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-48 pb-32 px-6 border-b border-white/5 overflow-hidden">
        <!-- Background Gradients -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] -z-10 opacity-50"></div>
        <div class="absolute bottom-0 right-0 w-[800px] h-[600px] bg-purple-600/10 rounded-full blur-[128px] -z-10 opacity-30"></div>

        <div class="max-w-7xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-xs font-medium text-indigo-300 mb-8 animate-fade-in">
                <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                <span>Orbit v2.0 is now available</span>
            </div>
            
            <h1 class="text-6xl md:text-8xl font-bold tracking-tight mb-8 leading-[1.1] bg-clip-text text-transparent bg-gradient-to-b from-white to-white/50 animate-slide-up">
                Infrastructure for <br>
                <span class="text-indigo-400">modern commerce.</span>
            </h1>
            
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto mb-12 leading-relaxed animate-slide-up" style="animation-delay: 0.1s">
                A unified platform to manage subscriptions, billing, and payments. 
                Designed for scale, built for developers, loved by teams.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-slide-up" style="animation-delay: 0.2s">
                <a href="products.html" class="w-full sm:w-auto px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-white rounded-full font-bold transition-all hover:scale-105 shadow-[0_0_40px_-10px_rgba(79,70,229,0.5)]">
                    Start Building &rarr;
                </a>
                <a href="#" class="w-full sm:w-auto px-8 py-4 bg-zinc-900 border border-zinc-800 hover:bg-zinc-800 text-white rounded-full font-bold transition-all">
                    View Documentation
                </a>
            </div>

            <!-- Dashboard Preview -->
            <div class="mt-24 relative mx-auto max-w-5xl perspective-1000 animate-slide-up" style="animation-delay: 0.3s">
                <div class="relative bg-[#0B0C0E] border border-white/10 rounded-xl shadow-2xl overflow-hidden transform rotate-x-12 hover:rotate-x-0 transition-transform duration-1000 ease-out group">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/10 to-purple-500/10 opacity-50"></div>
                    <!-- Mock Browser Toolbar -->
                    <div class="h-10 border-b border-white/10 flex items-center px-4 gap-2 bg-[#111]">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-500/20 border border-red-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/20 border border-yellow-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/20 border border-green-500/50"></div>
                        </div>
                        <div class="ml-4 px-3 py-1 bg-[#222] rounded text-[10px] text-zinc-500 font-mono w-64 text-center">orbit.com/dashboard</div>
                    </div>
                    <!-- Mock Dashboard Content -->
                    <div class="p-8 grid grid-cols-3 gap-6">
                        <!-- Chart Card -->
                        <div class="col-span-2 bg-zinc-900/50 border border-white/5 rounded-lg p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="font-medium text-zinc-300">Revenue</h3>
                                <span class="text-xs text-green-400 bg-green-400/10 px-2 py-1 rounded">+24.5%</span>
                            </div>
                            <div class="h-32 flex items-end gap-2">
                                <div class="w-full bg-indigo-500/20 h-[40%] rounded-sm relative group-hover:h-[60%] transition-all duration-700 delay-100"></div>
                                <div class="w-full bg-indigo-500/30 h-[60%] rounded-sm relative group-hover:h-[80%] transition-all duration-700 delay-200"></div>
                                <div class="w-full bg-indigo-500/40 h-[30%] rounded-sm relative group-hover:h-[50%] transition-all duration-700 delay-300"></div>
                                <div class="w-full bg-indigo-500/60 h-[70%] rounded-sm relative group-hover:h-[90%] transition-all duration-700 delay-100"></div>
                                <div class="w-full bg-indigo-500 h-[50%] rounded-sm relative group-hover:h-[75%] transition-all duration-700"></div>
                            </div>
                        </div>
                        <!-- Stats Card -->
                        <div class="space-y-4">
                            <div class="bg-zinc-900/50 border border-white/5 rounded-lg p-4">
                                <div class="text-xs text-zinc-500 mb-1">Active Users</div>
                                <div class="text-2xl font-bold text-white">12,403</div>
                            </div>
                            <div class="bg-zinc-900/50 border border-white/5 rounded-lg p-4">
                                <div class="text-xs text-zinc-500 mb-1">Churn Rate</div>
                                <div class="text-2xl font-bold text-white">0.8%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Partners / Logos -->
    <div class="py-12 border-b border-white/5 bg-black/20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-xs font-bold text-zinc-600 uppercase tracking-widest mb-8">Trusted by industry leaders</p>
            <div class="flex flex-wrap justify-center gap-12 opacity-40 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Simple SVG Placeholders for Logos -->
                <svg class="h-8" viewBox="0 0 100 30" fill="currentColor"><rect width="20" height="20" rx="4"/><rect x="25" width="20" height="20" rx="10"/><rect x="50" width="20" height="20" rx="4"/></svg>
                <svg class="h-8" viewBox="0 0 100 30" fill="currentColor"><circle cx="15" cy="15" r="10"/><circle cx="45" cy="15" r="10"/><circle cx="75" cy="15" r="10"/></svg>
                <svg class="h-8" viewBox="0 0 100 30" fill="currentColor"><path d="M10 5 L20 25 L30 5" stroke="currentColor" stroke-width="4"/><path d="M40 5 L40 25" stroke="currentColor" stroke-width="4"/></svg>
                <svg class="h-8" viewBox="0 0 100 30" fill="currentColor"><rect x="10" y="5" width="20" height="20"/><rect x="40" y="5" width="20" height="20" transform="rotate(45 50 15)"/></svg>
            </div>
        </div>
    </div>

    <!-- Bento Grid Features -->
    <section id="features" class="py-32 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-20 text-center">Powerful features for<br>fast-moving teams.</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1: Large -->
                <div class="md:col-span-2 bg-zinc-900/30 border border-white/10 rounded-3xl p-10 relative overflow-hidden group hover:border-indigo-500/50 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <h3 class="text-2xl font-bold mb-4 relative z-10">Real-time Analytics</h3>
                    <p class="text-zinc-400 mb-8 max-w-md relative z-10">Monitor your business performance with live data updates. No page refreshes required.</p>
                    <div class="relative z-10 h-64 bg-[#050505] rounded-lg border border-white/5 p-4 overflow-hidden">
                        <!-- Animated Graph Lines -->
                        <svg class="w-full h-full" viewBox="0 0 400 200">
                            <path d="M0 150 C 100 150, 100 50, 200 50 S 300 150, 400 150" fill="none" stroke="#6366f1" stroke-width="2" class="drop-shadow-[0_0_10px_rgba(99,102,241,0.5)]">
                                <animate attributeName="d" dur="5s" repeatCount="indefinite"
                                    values="M0 150 C 100 150, 100 50, 200 50 S 300 150, 400 150;
                                            M0 150 C 100 100, 100 150, 200 150 S 300 50, 400 50;
                                            M0 150 C 100 150, 100 50, 200 50 S 300 150, 400 150" />
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Feature 2: Tall -->
                <div class="md:row-span-2 bg-zinc-900/30 border border-white/10 rounded-3xl p-10 relative overflow-hidden group hover:border-purple-500/50 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 text-purple-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Lightning Fast</h3>
                    <p class="text-zinc-400 mb-8">Optimized for speed. <br>99.9% uptime SLA guaranteed.</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-zinc-300">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            Global Edge Network
                        </div>
                        <div class="flex items-center gap-3 text-sm text-zinc-300">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            Auto-scaling Infrastructure
                        </div>
                        <div class="flex items-center gap-3 text-sm text-zinc-300">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            DDoS Protection
                        </div>
                    </div>
                </div>

                <!-- Feature 3: Small -->
                <div class="bg-zinc-900/30 border border-white/10 rounded-3xl p-10 relative overflow-hidden group hover:border-pink-500/50 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-tr from-pink-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <h3 class="text-xl font-bold mb-2">Global Payments</h3>
                    <p class="text-zinc-400 text-sm">Accept payments in 135+ currencies.</p>
                </div>

                <!-- Feature 4: Small -->
                <div class="bg-zinc-900/30 border border-white/10 rounded-3xl p-10 relative overflow-hidden group hover:border-blue-500/50 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <h3 class="text-xl font-bold mb-2">Team Collaboration</h3>
                    <p class="text-zinc-400 text-sm">Built-in roles and permissions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 bg-[#050505] py-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-6 gap-10">
            <div class="col-span-2">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-6 h-6 bg-zinc-800 rounded flex items-center justify-center text-xs font-bold">O</div>
                    <span class="font-bold">Orbit</span>
                </div>
                <p class="text-zinc-500 text-sm max-w-xs">
                    Making the world's best companies better at managing their revenue.
                </p>
            </div>
            
            <div class="flex flex-col gap-4">
                <span class="font-bold text-white text-sm">Product</span>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">Features</a>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">Pricing</a>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">Changelog</a>
            </div>
            
            <div class="flex flex-col gap-4">
                <span class="font-bold text-white text-sm">Company</span>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">About</a>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">Careers</a>
                <a href="#" class="text-zinc-500 hover:text-white text-sm">Contact</a>
            </div>
        </div>
    </footer>
</div>
@endsection
