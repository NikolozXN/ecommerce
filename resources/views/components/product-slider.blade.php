@props([
    'title' => 'Featured Products',
    'products' => [],
])

<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl lg:text-4xl font-black text-gray-900 dark:text-white">{{ $title }}</h2>
            <div class="flex gap-2">
                <button class="p-2 border border-gray-300 dark:border-zinc-600 rounded-lg hover:bg-gray-50 dark:hover:bg-zinc-800 slider-prev">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="p-2 border border-gray-300 dark:border-zinc-600 rounded-lg hover:bg-gray-50 dark:hover:bg-zinc-800 slider-next">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="product-slider overflow-hidden">
            <div class="flex gap-8 transition-transform duration-500" style="transform: translateX(0)">
                @for($i = 1; $i <= 8; $i++)
                <div class="flex-shrink-0 w-80">
                    <x-product-card 
                        image="https://images.unsplash.com/photo-{{ 1500000000000 + $i }}?w=600&h=600&fit=crop"
                        name="Product {{ $i }}"
                        price="${{ 99 + $i * 10 }}"
                        rating="{{ 4.0 + ($i % 10) / 10 }}"
                        reviews="{{ 100 + $i * 20 }}"
                        href="/products/{{ $i }}"
                    />
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.product-slider');
    sliders.forEach(slider => {
        const container = slider.querySelector('.flex');
        const prevBtn = slider.parentElement.querySelector('.slider-prev');
        const nextBtn = slider.parentElement.querySelector('.slider-next');
        let position = 0;
        const itemWidth = 320 + 32; // width + gap
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                position = Math.max(position - itemWidth * 3, -(container.scrollWidth - slider.offsetWidth));
                container.style.transform = `translateX(${position}px)`;
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                position = Math.min(position + itemWidth * 3, 0);
                container.style.transform = `translateX(${position}px)`;
            });
        }
    });
});
</script>

