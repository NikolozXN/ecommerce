# 🚀 Setup Guide - Omnishop Premium Themes

## Quick Start

### 1. Install Dependencies
```bash
npm install
```

### 2. Build CSS
```bash
npm run build:css
```

This compiles Tailwind CSS to `public/build/assets/app.css`

### 3. View Themes

**Option A: Direct HTML (No Laravel)**
- Open any Blade file in a browser (they'll work as HTML)
- Or convert Blade syntax to pure HTML

**Option B: Laravel Project**
1. Copy files to your Laravel project
2. Create routes in `routes/web.php`:

```php
// Homepage themes
Route::get('/homepages/fashion', function () {
    return view('homepages.fashion');
});

Route::get('/homepages/electronics', function () {
    return view('homepages.electronics');
});

Route::get('/homepages/grocery', function () {
    return view('homepages.grocery');
});

Route::get('/homepages/luxury', function () {
    return view('homepages.luxury');
});

Route::get('/homepages/digital', function () {
    return view('homepages.digital');
});

Route::get('/homepages/marketplace', function () {
    return view('homepages.marketplace');
});

// Other pages
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

3. Update `resources/views/layouts/app.blade.php` to use Laravel's asset helper:
```blade
<link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
<script src="{{ asset('build/assets/app.js') }}" defer></script>
```

## File Structure

```
.
├── package.json
├── tailwind.config.js
├── vite.config.js
├── postcss.config.js
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind source
│   ├── js/
│   │   ├── app.js               # Alpine.js setup
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php    # Main layout
│       ├── components/          # Reusable components
│       ├── homepages/           # 6 homepage themes
│       ├── products/           # Product pages
│       ├── cart/               # Cart page
│       ├── checkout/           # Checkout page
│       └── categories/        # Category pages
└── public/
    └── build/
        └── assets/
            └── app.css          # Compiled CSS (generated)
```

## Development Workflow

### Watch Mode (Auto-rebuild CSS)
```bash
npm run dev
```

### Production Build
```bash
npm run build:css
```

## Using Components

All components are in `resources/views/components/`:

- `<x-button>` - Buttons with variants
- `<x-product-card>` - Product display cards
- `<x-navbar>` - Navigation bar
- `<x-footer>` - Footer component
- `<x-modal>` - Modal dialogs
- `<x-banner>` - Banner sections
- `<x-product-slider>` - Product carousels

## Customization

1. **Colors**: Edit `tailwind.config.js`
2. **Components**: Modify files in `resources/views/components/`
3. **Layouts**: Edit `resources/views/layouts/app.blade.php`
4. **Styles**: Add custom CSS in `resources/css/app.css`

## Notes

- All images use Unsplash URLs (replace in production)
- Dark mode works automatically
- All pages are fully responsive
- No backend logic - pure front-end templates

## Troubleshooting

**CSS not loading?**
- Run `npm run build:css`
- Check `public/build/assets/app.css` exists

**Components not working?**
- Make sure Alpine.js is loaded
- Check browser console for errors

**Images not showing?**
- Requires internet connection (Unsplash CDN)
- Replace with local images in production

