@props([
    'image' => null,
    'title' => 'Banner Title',
    'subtitle' => 'Banner subtitle',
    'buttonText' => 'Shop Now',
    'buttonHref' => '/products',
    'gradient' => 'from-indigo-600 via-purple-600 to-pink-600',
])

<section class="relative overflow-hidden rounded-3xl">
    @if($image)
        <img src="{{ $image }}" alt="Banner" class="w-full h-full object-cover absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/40"></div>
    @else
        <div class="absolute inset-0 bg-gradient-to-r {{ $gradient }}"></div>
    @endif
    <div class="relative px-8 py-16 md:py-24 text-center">
        <h2 class="text-4xl lg:text-5xl font-black text-white mb-4">{{ $title }}</h2>
        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">{{ $subtitle }}</p>
        <x-button href="{{ $buttonHref }}" variant="secondary" size="lg">
            {{ $buttonText }}
        </x-button>
    </div>
</section>

