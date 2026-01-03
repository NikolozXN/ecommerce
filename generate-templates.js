const fs = require('fs');
const path = require('path');

const templates = [
    { id: 'luxury', name: 'Luxury Premium', color: 'from-pink-500 to-rose-500', gradient: 'from-pink-600 to-rose-600' },
    { id: 'tech', name: 'Tech Store', color: 'from-blue-500 to-cyan-500', gradient: 'from-blue-600 to-cyan-600' },
    { id: 'fashion', name: 'Fashion Boutique', color: 'from-purple-500 to-pink-500', gradient: 'from-purple-600 to-pink-600' },
    { id: 'organic', name: 'Organic Market', color: 'from-green-500 to-emerald-500', gradient: 'from-green-600 to-emerald-600' },
    { id: 'sports', name: 'Sports Gear', color: 'from-orange-500 to-red-500', gradient: 'from-orange-600 to-red-600' },
    { id: 'books', name: 'Book Store', color: 'from-amber-500 to-yellow-500', gradient: 'from-amber-600 to-yellow-600' },
    { id: 'furniture', name: 'Furniture Shop', color: 'from-stone-500 to-neutral-500', gradient: 'from-stone-600 to-neutral-600' },
    { id: 'jewelry', name: 'Jewelry Store', color: 'from-yellow-400 to-amber-500', gradient: 'from-yellow-500 to-amber-600' },
    { id: 'gaming', name: 'Gaming Hub', color: 'from-indigo-500 to-purple-500', gradient: 'from-indigo-600 to-purple-600' }
];

function createTemplateFiles(template) {
    const dir = path.join(__dirname, 'template', 'templates', template.id);
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
    }

    const indexHtml = `<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>${template.name} - Premium E-commerce</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-zinc-900">
    <nav class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="text-2xl font-bold bg-gradient-to-r ${template.gradient} bg-clip-text text-transparent">${template.name}</a>
                <div class="flex items-center gap-6">
                    <a href="index.html" class="text-gray-900 dark:text-white font-medium">Home</a>
                    <a href="products.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Products</a>
                    <a href="about.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">About</a>
                    <a href="contact.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Contact</a>
                    <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-700">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative overflow-hidden bg-gradient-to-br ${template.color} py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl lg:text-6xl font-bold text-white mb-6">Welcome to ${template.name}</h1>
            <p class="text-xl text-white/90 mb-8">Discover premium products designed for excellence</p>
            <a href="products.html" class="inline-block px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition-colors">Shop Now</a>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-12">Featured Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                ${[1,2,3,4].map(i => `
                <a href="product.html" class="group">
                    <div class="bg-white dark:bg-zinc-800 rounded-xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-xl transition-all">
                        <div class="aspect-square bg-gray-100 dark:bg-zinc-700 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-${1500000000000 + i}?w=400&h=400&fit=crop" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Premium Product ${i}</h3>
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">$${(299 + i * 50)}</p>
                        </div>
                    </div>
                </a>
                `).join('')}
            </div>
        </div>
    </section>

    <footer class="bg-zinc-900 dark:bg-black text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">&copy; 2024 ${template.name}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>`;

    const productsHtml = `<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - ${template.name}</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-zinc-900">
    <nav class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="text-2xl font-bold bg-gradient-to-r ${template.gradient} bg-clip-text text-transparent">${template.name}</a>
                <div class="flex items-center gap-6">
                    <a href="index.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Home</a>
                    <a href="products.html" class="text-gray-900 dark:text-white font-medium">Products</a>
                    <a href="about.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">About</a>
                    <a href="contact.html" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">All Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            ${Array.from({length: 12}, (_, i) => `
            <a href="product.html" class="group">
                <div class="bg-white dark:bg-zinc-800 rounded-xl overflow-hidden border border-gray-200 dark:border-zinc-700 hover:shadow-xl transition-all">
                    <div class="aspect-square bg-gray-100 dark:bg-zinc-700 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-${1500000000000 + i}?w=400&h=400&fit=crop" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Product ${i + 1}</h3>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">$${(199 + i * 30)}</p>
                    </div>
                </div>
            </a>
            `).join('')}
        </div>
    </main>
</body>
</html>`;

    const productHtml = `<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - ${template.name}</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-zinc-900">
    <nav class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="text-2xl font-bold bg-gradient-to-r ${template.gradient} bg-clip-text text-transparent">${template.name}</a>
                <div class="flex items-center gap-6">
                    <a href="index.html" class="text-gray-600 dark:text-gray-400">Home</a>
                    <a href="products.html" class="text-gray-600 dark:text-gray-400">Products</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&h=800&fit=crop" alt="Product" class="w-full rounded-xl">
            </div>
            <div>
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Premium Product</h1>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mb-6">$299</p>
                <p class="text-gray-600 dark:text-gray-400 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button class="w-full px-6 py-4 bg-gradient-to-r ${template.gradient} text-white rounded-lg font-semibold hover:opacity-90 transition-opacity">Add to Cart</button>
            </div>
        </div>
    </main>
</body>
</html>`;

    const aboutHtml = `<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ${template.name}</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-zinc-900">
    <nav class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="text-2xl font-bold bg-gradient-to-r ${template.gradient} bg-clip-text text-transparent">${template.name}</a>
                <div class="flex items-center gap-6">
                    <a href="index.html" class="text-gray-600 dark:text-gray-400">Home</a>
                    <a href="products.html" class="text-gray-600 dark:text-gray-400">Products</a>
                    <a href="about.html" class="text-gray-900 dark:text-white font-medium">About</a>
                    <a href="contact.html" class="text-gray-600 dark:text-gray-400">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">About ${template.name}</h1>
        <div class="prose prose-lg dark:prose-invert">
            <p class="text-gray-600 dark:text-gray-400 mb-6">We are dedicated to providing the highest quality products and exceptional customer service.</p>
            <p class="text-gray-600 dark:text-gray-400">Our mission is to deliver excellence in every aspect of your shopping experience.</p>
        </div>
    </main>
</body>
</html>`;

    const contactHtml = `<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ${template.name}</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white dark:bg-zinc-900">
    <nav class="bg-white dark:bg-zinc-800 border-b border-gray-200 dark:border-zinc-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.html" class="text-2xl font-bold bg-gradient-to-r ${template.gradient} bg-clip-text text-transparent">${template.name}</a>
                <div class="flex items-center gap-6">
                    <a href="index.html" class="text-gray-600 dark:text-gray-400">Home</a>
                    <a href="products.html" class="text-gray-600 dark:text-gray-400">Products</a>
                    <a href="about.html" class="text-gray-600 dark:text-gray-400">About</a>
                    <a href="contact.html" class="text-gray-900 dark:text-white font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">Contact Us</h1>
        <form class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 dark:border-zinc-600 rounded-lg bg-white dark:bg-zinc-800">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <input type="email" class="w-full px-4 py-2 border border-gray-300 dark:border-zinc-600 rounded-lg bg-white dark:bg-zinc-800">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 dark:border-zinc-600 rounded-lg bg-white dark:bg-zinc-800"></textarea>
            </div>
            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r ${template.gradient} text-white rounded-lg font-semibold hover:opacity-90 transition-opacity">Send Message</button>
        </form>
    </main>
</body>
</html>`;

    fs.writeFileSync(path.join(dir, 'index.html'), indexHtml);
    fs.writeFileSync(path.join(dir, 'products.html'), productsHtml);
    fs.writeFileSync(path.join(dir, 'product.html'), productHtml);
    fs.writeFileSync(path.join(dir, 'about.html'), aboutHtml);
    fs.writeFileSync(path.join(dir, 'contact.html'), contactHtml);
}

// Generate all templates
templates.forEach(createTemplateFiles);
console.log('✅ All templates generated successfully!');

