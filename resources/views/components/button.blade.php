@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'href' => null,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';
    
    $variantClasses = [
        'primary' => 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white hover:from-indigo-700 hover:to-purple-700 focus:ring-indigo-500 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5',
        'secondary' => 'bg-white dark:bg-zinc-800 text-gray-900 dark:text-white border-2 border-gray-200 dark:border-zinc-700 hover:border-indigo-300 dark:hover:border-indigo-700 focus:ring-indigo-500',
        'outline' => 'border-2 border-gray-300 dark:border-zinc-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-800 focus:ring-gray-500',
        'ghost' => 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-zinc-800 focus:ring-gray-500',
    ];
    
    $sizeClasses = [
        'sm' => 'px-4 py-2 text-sm rounded-lg',
        'md' => 'px-6 py-3 text-base rounded-lg',
        'lg' => 'px-8 py-4 text-lg rounded-xl',
    ];
    
    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $sizeClasses[$size];
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif

