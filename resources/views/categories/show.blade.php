@extends('layouts.app')

@section('title', 'Category - Products')

@section('content')
<x-navbar />

<!-- Category Page -->
<section class="py-12 bg-white dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Category Header -->
        <div class="mb-12">
            <h1 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-4">Category Name</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">Discover our curated selection</p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @for($i = 1; $i <= 12; $i++)
            <x-product-card 
                image="https://images.unsplash.com/photo-{{ 1500000000000 + $i }}?w=600&h=600&fit=crop"
                name="Product {{ $i }}"
                price="${{ 99 + $i * 10 }}"
                rating="{{ 4.0 + ($i % 10) / 10 }}"
                reviews="{{ 100 + $i * 20 }}"
                href="/products/{{ $i }}"
            />
            @endfor
        </div>
    </div>
</section>

<x-footer />
@endsection

