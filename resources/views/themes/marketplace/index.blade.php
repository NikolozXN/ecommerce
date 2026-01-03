@php
    $departments = ['Electronics', 'Home & Kitchen', 'Fashion', 'Health & Beauty', 'Toys & Games', 'Books', 'Sports', 'Automotive'];
    
    $deals = collect([
        (object) ['name' => '4K Monitor', 'discount' => '25%', 'price' => 299, 'old_price' => 399, 'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400'],
        (object) ['name' => 'Gaming Mouse', 'discount' => '40%', 'price' => 45, 'old_price' => 75, 'image' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=400'],
        (object) ['name' => 'Mechanical Keyboard', 'discount' => '15%', 'price' => 85, 'old_price' => 100, 'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=400'],
        (object) ['name' => 'Headset', 'discount' => '30%', 'price' => 55, 'old_price' => 79, 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400']
    ]);

    $recommendations = collect([
        (object) ['name' => 'Coffee Maker', 'price' => 89, 'rating' => 4.5, 'reviews' => 1200, 'image' => 'https://images.unsplash.com/photo-1517668808822-9ebb02f2a0e6?w=400'],
        (object) ['name' => 'Blender', 'price' => 45, 'rating' => 4.2, 'reviews' => 850, 'image' => 'https://images.unsplash.com/photo-1570222094114-28a9d8895272?w=400'],
        (object) ['name' => 'Toaster', 'price' => 35, 'rating' => 4.8, 'reviews' => 2100, 'image' => 'https://images.unsplash.com/photo-1583729244782-63928c08538c?w=400'],
        (object) ['name' => 'Mixer', 'price' => 120, 'rating' => 4.7, 'reviews' => 540, 'image' => 'https://images.unsplash.com/photo-1578643463396-099787290943?w=400'],
        (object) ['name' => 'Air Fryer', 'price' => 99, 'rating' => 4.6, 'reviews' => 3200, 'image' => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=400'],
        (object) ['name' => 'Rice Cooker', 'price' => 60, 'rating' => 4.4, 'reviews' => 900, 'image' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400']
    ]);
@endphp

@extends('layouts.app')

@section('title', 'GlobalMarket - Shop Everything')

@section('content')
<div class="bg-gray-100 min-h-screen text-gray-900 font-sans text-sm">
    
    <!-- Top Bar -->
    <div class="bg-[#232f3e] text-white py-2 px-4 text-xs flex justify-between">
        <div class="flex gap-4">
            <span>English (EN)</span>
            <span>USD ($)</span>
        </div>
        <div class="flex gap-4">
            <a href="#" class="hover:underline">Sell on GlobalMarket</a>
            <a href="#" class="hover:underline">Help</a>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-[#131921] text-white sticky top-0 z-50">
        <div class="container-fluid py-3 flex items-center gap-4">
            <a href="/" class="text-2xl font-bold tracking-tight">Global<span class="text-[#febd69]">Market</span></a>
            
            <button class="flex flex-col text-xs hover:outline hover:outline-1 px-2 py-1 rounded">
                <span class="text-gray-300">Deliver to</span>
                <span class="font-bold">New York 10001</span>
            </button>

            <!-- Search -->
            <div class="flex-1 flex rounded-md overflow-hidden h-10 focus-within:ring-2 focus-within:ring-[#febd69]">
                <select class="bg-gray-100 text-gray-700 text-xs px-2 border-r border-gray-300 outline-none">
                    <option>All</option>
                    @foreach($departments as $dept)
                    <option>{{ $dept }}</option>
                    @endforeach
                </select>
                <input type="text" class="flex-1 px-4 text-black outline-none" placeholder="Search GlobalMarket...">
                <button class="bg-[#febd69] hover:bg-[#f3a847] px-5 text-black">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>

            <div class="flex gap-4 items-center">
                <a href="#" class="flex flex-col text-xs hover:outline hover:outline-1 px-2 py-1 rounded">
                    <span class="text-gray-300">Hello, Sign in</span>
                    <span class="font-bold">Account & Lists</span>
                </a>
                <a href="#" class="flex flex-col text-xs hover:outline hover:outline-1 px-2 py-1 rounded">
                    <span class="text-gray-300">Returns</span>
                    <span class="font-bold">& Orders</span>
                </a>
                <a href="#" class="flex items-end hover:outline hover:outline-1 px-2 py-1 rounded">
                    <div class="relative">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="absolute -top-1 -right-1 bg-[#febd69] text-black text-xs font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                    </div>
                    <span class="font-bold text-sm ml-1">Cart</span>
                </a>
            </div>
        </div>
        
        <!-- Sub Nav -->
        <div class="bg-[#232f3e] text-white text-sm py-2 px-4 flex gap-4 overflow-x-auto">
            <button class="font-bold flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg> All</button>
            <a href="#" class="hover:underline whitespace-nowrap">Today's Deals</a>
            <a href="#" class="hover:underline whitespace-nowrap">Customer Service</a>
            <a href="#" class="hover:underline whitespace-nowrap">Registry</a>
            <a href="#" class="hover:underline whitespace-nowrap">Gift Cards</a>
            <a href="#" class="hover:underline whitespace-nowrap">Sell</a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="max-w-[1500px] mx-auto p-4 relative">
        
        <!-- Hero Slider Banner -->
        <div class="relative h-[300px] md:h-[400px] bg-gradient-to-b from-gray-300 to-gray-100 -mx-4 md:mx-0 overflow-hidden mb-8 md:mb-0">
            <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=1600&h=600&fit=crop" class="w-full h-full object-cover mask-gradient-bottom">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray-100"></div>
        </div>

        <!-- Cards Overlay -->
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-32 md:-mt-64 px-4">
            <!-- Card 1 -->
            <div class="bg-white p-4 flex flex-col h-[420px]">
                <h2 class="text-xl font-bold mb-4">Gaming Essentials</h2>
                <div class="grid grid-cols-2 gap-4 flex-1">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=200&h=200&fit=crop" class="w-full h-full object-cover">
                    <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=200&h=200&fit=crop" class="w-full h-full object-cover">
                    <img src="https://images.unsplash.com/photo-1605901309584-818e25960b8f?w=200&h=200&fit=crop" class="w-full h-full object-cover">
                    <img src="https://images.unsplash.com/photo-1598550476439-cce8e6f06600?w=200&h=200&fit=crop" class="w-full h-full object-cover">
                </div>
                <a href="#" class="text-blue-600 hover:underline hover:text-orange-700 text-sm mt-4">See more</a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-4 flex flex-col h-[420px]">
                <h2 class="text-xl font-bold mb-4">Shop by Category</h2>
                <div class="flex-1 bg-gray-50 flex items-center justify-center mb-4">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop" class="max-h-full">
                </div>
                <a href="#" class="text-blue-600 hover:underline hover:text-orange-700 text-sm">Shop Electronics</a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-4 flex flex-col h-[420px]">
                <h2 class="text-xl font-bold mb-4">Deals & Promotions</h2>
                <div class="flex-1 overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1607083206869-4c7672e72a8a?w=400&h=400&fit=crop" class="w-full h-full object-cover">
                </div>
                <a href="#" class="text-blue-600 hover:underline hover:text-orange-700 text-sm">Shop all deals</a>
            </div>

            <!-- Card 4 (Sign in) -->
            <div class="bg-white p-4 flex flex-col h-auto md:h-[150px] lg:h-[420px] justify-between">
                <div class="bg-gray-50 p-4 mb-4 hidden lg:block">
                    <h3 class="font-bold text-lg mb-2">Sign in for the best experience</h3>
                    <button class="bg-[#febd69] hover:bg-[#f3a847] w-full py-2 rounded-md text-sm border border-[#a88734] shadow-sm mb-2">Sign in securely</button>
                </div>
                <div class="flex-1 bg-gradient-to-br from-blue-100 to-purple-100 hidden lg:block"></div>
            </div>
        </div>

        <!-- Horizontal Scroll Section -->
        <div class="mt-8 bg-white p-6">
            <h2 class="text-xl font-bold mb-4">Best Sellers in Kitchen <a href="#" class="text-sm font-normal text-blue-600 hover:underline ml-2">See more</a></h2>
            <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide">
                @foreach($recommendations as $rec)
                <div class="min-w-[200px] cursor-pointer">
                    <div class="bg-gray-50 aspect-square mb-2 flex items-center justify-center">
                        <img src="{{ $rec->image }}" class="max-h-[180px] mix-blend-multiply">
                    </div>
                    <a href="#" class="hover:text-orange-700 hover:underline line-clamp-2 mb-1">{{ $rec->name }} - Premium Quality</a>
                    <div class="text-orange-500 text-sm font-bold">★★★★☆ <span class="text-blue-600 text-xs font-normal">({{ $rec->reviews }})</span></div>
                    <div class="text-lg font-bold">${{ $rec->price }} <span class="text-xs font-normal text-gray-500">Prime</span></div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Grid Layout -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Sidebar -->
            <div class="hidden lg:block space-y-6">
                <div class="bg-white p-4">
                    <h3 class="font-bold mb-2">Department</h3>
                    <ul class="space-y-1 text-sm">
                        @foreach($departments as $dept)
                        <li><a href="#" class="hover:text-orange-700 hover:underline">{{ $dept }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white p-4">
                    <h3 class="font-bold mb-2">Avg. Customer Review</h3>
                    <div class="space-y-1 text-sm text-blue-600 hover:text-orange-700 cursor-pointer">
                        <div>★★★★☆ & Up</div>
                        <div>★★★☆☆ & Up</div>
                        <div>★★☆☆☆ & Up</div>
                    </div>
                </div>
            </div>

            <!-- Main Feed -->
            <div class="lg:col-span-3">
                <div class="bg-white p-4 mb-4 flex justify-between items-center">
                    <h2 class="text-xl font-bold">Daily Deals</h2>
                    <a href="#" class="text-blue-600 hover:underline text-sm">See all deals</a>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach($deals as $deal)
                    <div class="bg-white p-4 border border-gray-200">
                        <div class="aspect-square flex items-center justify-center mb-4">
                            <img src="{{ $deal->image }}" class="max-h-[150px]">
                        </div>
                        <div class="flex gap-2 items-center mb-2">
                            <span class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-sm">{{ $deal->discount }} off</span>
                            <span class="text-red-600 text-xs font-bold">Deal</span>
                        </div>
                        <div class="mb-1">
                            <span class="text-lg font-bold">${{ $deal->price }}</span>
                            <span class="text-xs text-gray-500 line-through">${{ $deal->old_price }}</span>
                        </div>
                        <div class="text-sm truncate">{{ $deal->name }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="mt-12">
        <a href="#" class="block bg-[#37475a] hover:bg-[#485769] text-white text-center py-4 text-sm font-bold">Back to top</a>
        <div class="bg-[#232f3e] text-white py-12">
            <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 px-4 text-sm">
                <div>
                    <h3 class="font-bold mb-4">Get to Know Us</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:underline">Careers</a></li>
                        <li><a href="#" class="hover:underline">Blog</a></li>
                        <li><a href="#" class="hover:underline">About GlobalMarket</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Make Money with Us</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:underline">Sell products</a></li>
                        <li><a href="#" class="hover:underline">Sell on GlobalMarket Business</a></li>
                        <li><a href="#" class="hover:underline">Become an Affiliate</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Payment Products</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:underline">Business Card</a></li>
                        <li><a href="#" class="hover:underline">Shop with Points</a></li>
                        <li><a href="#" class="hover:underline">Reload Your Balance</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-4">Let Us Help You</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:underline">Your Account</a></li>
                        <li><a href="#" class="hover:underline">Your Orders</a></li>
                        <li><a href="#" class="hover:underline">Shipping Rates</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-[#131921] text-white py-8 text-center text-xs">
            <p>&copy; 1996-2024, GlobalMarket.com, Inc. or its affiliates</p>
        </div>
    </div>
</div>
@endsection
