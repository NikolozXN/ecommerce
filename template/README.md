# OmniShop Admin Template

Pure HTML/Tailwind CSS templates converted from Laravel Blade templates. All pages are standalone and work independently without any backend dependencies.

## Structure

```
template/
├── admin/
│   ├── dashboard.html          # Main admin dashboard with charts
│   ├── vendors.html            # Vendors listing page
│   ├── vendor-detail.html      # Individual vendor details
│   ├── orders.html             # Orders listing page
│   ├── order-detail.html       # Individual order details
│   └── subscriptions.html      # Subscriptions management page
└── README.md
```

## Features

- ✅ **Pure HTML** - No PHP, no Laravel dependencies
- ✅ **Tailwind CSS via CDN** - All styling preserved exactly
- ✅ **Alpine.js** - Interactive components and dark mode toggle
- ✅ **Chart.js** - Charts with static data
- ✅ **Dark Mode** - Fully functional with localStorage persistence
- ✅ **Responsive Design** - All Tailwind responsive classes preserved
- ✅ **Standalone Pages** - Each HTML file works independently

## Usage

Simply open any HTML file in a browser. All dependencies are loaded via CDN:

- Tailwind CSS: `https://cdn.tailwindcss.com`
- Alpine.js: `https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js`
- Chart.js: `https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js`

## Dark Mode

Dark mode toggle is available in the header of all admin pages. The preference is saved in localStorage and persists across page reloads.

## Navigation

All internal links use relative paths (e.g., `vendors.html`, `order-detail.html`). Make sure all files are in the same directory for navigation to work properly.

## Data

All data is static/hardcoded for demonstration purposes:
- Vendor information
- Order details
- Subscription data
- Chart data

## Design Preservation

All designs have been preserved exactly as they were in the original Blade templates:
- Colors and spacing remain unchanged
- Layout structure is identical
- Dark mode classes are preserved
- Responsive breakpoints maintained

## Browser Support

Works in all modern browsers that support:
- ES6 JavaScript
- CSS Grid and Flexbox
- localStorage API

