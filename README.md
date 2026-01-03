# Omnishop Premium Themes

**Premium, Envato-ready front-end themes** for Omnishop e-commerce platform. Beautiful, modern designs built with Laravel Blade, Tailwind CSS, and Alpine.js.

## 🎨 Features

- ✅ **6 Unique Homepage Designs** - Fashion, Electronics, Grocery, Luxury, Digital, Marketplace
- ✅ **Latest Tailwind CSS** - Compiled via Vite, no CDN dependencies
- ✅ **Fully Responsive** - Mobile-first design, works on all devices
- ✅ **Dark Mode Support** - Class-based + system preference detection
- ✅ **Reusable Components** - Blade components for cards, buttons, modals, sliders
- ✅ **Product Pages** - Listing, detail, category pages
- ✅ **Cart & Checkout** - Complete UI (no backend logic)
- ✅ **Modern Design** - Premium typography, spacing, hover effects, micro-interactions
- ✅ **Laravel Ready** - Proper Blade structure, ready for Laravel integration

## 📁 Project Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Main layout
│   ├── components/
│   │   ├── button.blade.php        # Button component
│   │   ├── product-card.blade.php  # Product card component
│   │   ├── navbar.blade.php        # Navigation component
│   │   ├── footer.blade.php        # Footer component
│   │   ├── modal.blade.php         # Modal component
│   │   ├── banner.blade.php        # Banner component
│   │   └── product-slider.blade.php # Product slider component
│   ├── homepages/
│   │   ├── fashion.blade.php       # Fashion e-commerce
│   │   ├── electronics.blade.php   # Electronics store
│   │   ├── grocery.blade.php       # Grocery/local market
│   │   ├── luxury.blade.php        # Minimal/luxury brand
│   │   ├── digital.blade.php       # Digital products/startup
│   │   └── marketplace.blade.php   # Multi-category marketplace
│   ├── products/
│   │   ├── index.blade.php         # Product listing
│   │   └── show.blade.php         # Product detail
│   ├── cart/
│   │   └── index.blade.php         # Shopping cart
│   ├── checkout/
│   │   └── index.blade.php         # Checkout page
│   └── categories/
│       └── show.blade.php          # Category page
├── css/
│   └── app.css                     # Tailwind CSS source
└── js/
    ├── app.js                      # Alpine.js setup
    └── bootstrap.js                 # Bootstrap file
```

## 🚀 Installation

### Prerequisites

- Node.js 18+ and npm
- Laravel 10+ (for Blade templates)
- PHP 8.1+

### Setup Steps

1. **Install Dependencies**
   ```bash
   npm install
   ```

2. **Build Assets (Development)**
   ```bash
   npm run dev
   ```
   This starts Vite dev server with hot reload.

3. **Build Assets (Production)**
   ```bash
   npm run build
   ```
   This compiles and minifies CSS/JS for production.

## 📖 Usage

### In Laravel Project

1. Copy all files to your Laravel project
2. Install dependencies: `npm install`
3. Run `npm run dev` for development or `npm run build` for production
4. Create routes in `routes/web.php`:

```php
Route::get('/', function () {
    return view('homepages.fashion'); // or any other homepage
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/products/{id}', function ($id) {
    return view('products.show');
});

Route::get('/cart', function () {
    return view('cart.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});
```

### Using Components

```blade
<!-- Button -->
<x-button variant="primary" size="lg" href="/products">
    Shop Now
</x-button>

<!-- Product Card -->
<x-product-card 
    image="https://example.com/image.jpg"
    name="Product Name"
    price="$99.99"
    rating="4.5"
    reviews="128"
    badge="New"
    href="/products/1"
/>

<!-- Banner -->
<x-banner 
    title="Summer Sale"
    subtitle="Up to 50% off"
    buttonText="Shop Now"
    buttonHref="/sale"
/>

<!-- Modal -->
<x-modal id="example-modal" title="Example Modal">
    Modal content here
</x-modal>
```

## 🎨 Homepage Themes

### 1. Fashion E-commerce
- Pink/Rose color scheme
- Category grid layout
- Trendy product displays
- Perfect for fashion brands

### 2. Electronics Store
- Blue/Cyan color scheme
- Tech-focused categories
- Icon-based navigation
- Ideal for electronics retailers

### 3. Grocery/Local Market
- Green/Emerald color scheme
- Fresh produce focus
- Quick category access
- Great for local markets

### 4. Minimal/Luxury Brand
- Stone/Neutral color scheme
- Minimalist design
- Large hero sections
- Perfect for luxury brands

### 5. Digital Products/Startup
- Indigo/Purple color scheme
- Digital product focus
- Modern startup aesthetic
- Ideal for SaaS/digital products

### 6. Multi-Category Marketplace
- Multi-color gradient scheme
- Multiple category showcase
- Marketplace-style layout
- Perfect for multi-vendor platforms

## 🎯 Components

### Button Component
- Variants: `primary`, `secondary`, `outline`, `ghost`
- Sizes: `sm`, `md`, `lg`
- Supports links and buttons

### Product Card Component
- Image, name, price display
- Rating and reviews
- Badge support
- Hover effects

### Navbar Component
- Responsive navigation
- Dark mode toggle
- Mobile menu
- Cart indicator

### Footer Component
- Multi-column layout
- Social links
- Footer navigation

## 🌙 Dark Mode

Dark mode is automatically enabled based on:
1. User's localStorage preference
2. System preference (if no localStorage value)

Toggle is available in navbar on all pages.

## 📱 Responsive Design

All pages are fully responsive:
- Mobile: Single column layouts
- Tablet: 2-column grids
- Desktop: 3-4 column grids
- Large screens: Optimized spacing

## 🖼️ Images

All images use Unsplash URLs for demo purposes. Replace with your own images in production:

```blade
<!-- Replace Unsplash URLs -->
<img src="https://images.unsplash.com/photo-..." />

<!-- With your images -->
<img src="{{ asset('images/products/product.jpg') }}" />
```

## 🎨 Customization

### Colors

Edit `tailwind.config.js` to customize colors:

```js
theme: {
  extend: {
    colors: {
      primary: {
        // Your color palette
      }
    }
  }
}
```

### Typography

Fonts are loaded from Google Fonts (Inter). Change in `layouts/app.blade.php`.

### Components

All components are in `resources/views/components/`. Customize as needed.

## 📦 Envato Ready

These themes are designed to be:
- ✅ Standalone HTML/CSS/JS (can be converted)
- ✅ Laravel Blade compatible
- ✅ Well-documented
- ✅ Premium quality
- ✅ Easy to customize
- ✅ Production-ready

## 🔧 Development

### Watch Mode
```bash
npm run dev
```
Starts Vite dev server with hot reload.

### Production Build
```bash
npm run build
```
Compiles and minifies for production.

## 📄 License

Free to use for personal and commercial projects.

## 🤝 Support

For issues or questions, please refer to the documentation or create an issue.

---

**Built with ❤️ using Tailwind CSS, Alpine.js, and Laravel Blade**
