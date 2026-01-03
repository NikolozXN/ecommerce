<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
      x-data="{ 
        darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)
      }" 
      x-bind:class="{ 'dark': darkMode }"
      x-init="
        $watch('darkMode', value => {
          localStorage.setItem('darkMode', value);
          if (value) {
            document.documentElement.classList.add('dark');
          } else {
            document.documentElement.classList.remove('dark');
          }
        });
        if (darkMode) {
          document.documentElement.classList.add('dark');
        }
      ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Omnishop - Premium E-commerce')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    
    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-mono { font-family: 'Space Grotesk', monospace; } /* Using Space Grotesk as a modern technical font */
    </style>

    @stack('styles')
</head>
<body class="antialiased">
    @yield('content')
    
    @stack('scripts')
</body>
</html>
