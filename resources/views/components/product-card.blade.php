@props([
    'product' => null,
    'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&h=600&fit=crop',
    'name' => 'Product Name',
    'price' => '$99.99',
    'originalPrice' => null,
    'rating' => 4.5,
    'reviews' => 128,
    'badge' => null,
    'href' => '#',
])

<a href="{{ $href }}" class="product-card group">
    <div class="product-card-image">
        <img src="{{ $image }}" alt="{{ $name }}" loading="lazy">
        @if($badge)
            <div class="absolute top-4 left-4">
                <span class="badge badge-primary">{{ $badge }}</span>
            </div>
        @endif
        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
            <button class="p-2 bg-white/90 dark:bg-zinc-800/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-indigo-600 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center gap-2 mb-2">
            <div class="flex text-yellow-400">
                @for($i = 0; $i < 5; $i++)
                    <svg class="w-4 h-4 {{ $i < floor($rating) ? 'fill-current' : ($i < $rating ? 'fill-current opacity-50' : 'fill-gray-300 dark:fill-gray-600') }}" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                @endfor
            </div>
            <span class="text-xs text-gray-500 dark:text-gray-400">({{ $reviews }})</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
            {{ $name }}
        </h3>
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-black text-gray-900 dark:text-white">{{ $price }}</p>
                @if($originalPrice)
                    <p class="text-sm text-gray-500 line-through">{{ $originalPrice }}</p>
                @endif
            </div>
            <button class="p-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl hover:shadow-lg transition-all opacity-0 group-hover:opacity-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </button>
        </div>
    </div>
</a>

