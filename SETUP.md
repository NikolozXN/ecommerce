# Setup Instructions

## Quick Start

1. **Install Dependencies**
   ```bash
   npm install
   ```

2. **Build CSS (Development Mode)**
   ```bash
   npm run dev
   ```
   This watches for changes and rebuilds automatically.

3. **Build CSS (Production)**
   ```bash
   npm run build
   ```

4. **View Templates**
   - Open `template/index.html` in your browser
   - Use the dropdown to switch between templates
   - All templates are in `template/templates/` folder

## File Structure

```
.
├── package.json              # NPM dependencies
├── tailwind.config.js        # Tailwind configuration
├── src/
│   └── input.css            # Tailwind source CSS
├── dist/
│   └── output.css           # Compiled CSS (generated)
└── template/
    ├── index.html           # Template switcher homepage
    ├── templates/
    │   ├── modern/          # Template 1: Modern Minimal
    │   ├── luxury/          # Template 2: Luxury Premium
    │   ├── tech/            # Template 3: Tech Store
    │   ├── fashion/         # Template 4: Fashion Boutique
    │   ├── organic/         # Template 5: Organic Market
    │   ├── sports/          # Template 6: Sports Gear
    │   ├── books/           # Template 7: Book Store
    │   ├── furniture/       # Template 8: Furniture Shop
    │   ├── jewelry/         # Template 9: Jewelry Store
    │   └── gaming/          # Template 10: Gaming Hub
    └── admin/               # Admin panel templates
```

## Features

- ✅ **10 Beautiful Templates** - Each with unique design
- ✅ **Tailwind CLI** - Latest Tailwind CSS v3.4+
- ✅ **Dark Mode** - Toggle on all pages
- ✅ **Template Switcher** - Easy navigation between templates
- ✅ **Responsive** - Mobile-first design
- ✅ **Alpine.js** - Lightweight interactivity

## Adding New Templates

1. Create a new folder in `template/templates/`
2. Add template files (index.html, products.html, etc.)
3. Update the templates array in `template/index.html`
4. Rebuild CSS: `npm run build`

## Development Tips

- Run `npm run dev` for live CSS rebuilding
- All templates use the same CSS file: `dist/output.css`
- Dark mode preference is saved in localStorage
- Template selection is saved in localStorage

