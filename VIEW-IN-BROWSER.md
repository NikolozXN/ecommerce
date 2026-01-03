# 🌐 How to View Templates in Browser

## ✅ Method 1: Direct File Open (Easiest)

1. Navigate to: `template/index.html`
2. Double-click the file
3. It will open in your default browser!

**File Path:**
```
c:\Users\User\OneDrive\Desktop\ecommerce themes\template\index.html
```

---

## 🚀 Method 2: Local Server (Recommended)

### Option A: Using Node.js Server (Included)

```bash
npm start
```

Then open: **http://localhost:3000**

### Option B: Using Python (if installed)

```bash
# Python 3
python -m http.server 8000

# Then open: http://localhost:8000/template/index.html
```

### Option C: Using VS Code Live Server Extension

1. Install "Live Server" extension in VS Code
2. Right-click on `template/index.html`
3. Select "Open with Live Server"

---

## 📍 Direct File Paths

**Main Template Switcher:**
```
template/index.html
```

**Individual Templates:**
- Modern: `template/templates/modern/index.html`
- Luxury: `template/templates/luxury/index.html`
- Tech: `template/templates/tech/index.html`
- Fashion: `template/templates/fashion/index.html`
- Organic: `template/templates/organic/index.html`
- Sports: `template/templates/sports/index.html`
- Books: `template/templates/books/index.html`
- Furniture: `template/templates/furniture/index.html`
- Jewelry: `template/templates/jewelry/index.html`
- Gaming: `template/templates/gaming/index.html`

**Admin Templates:**
- Dashboard: `template/admin/dashboard.html`
- Vendors: `template/admin/vendors.html`
- Orders: `template/admin/orders.html`
- etc.

---

## 💡 Quick Tips

1. **Start with `template/index.html`** - This is the template switcher homepage
2. **Use the dropdown** - Click "Switch Template" to navigate between templates
3. **Dark Mode** - Toggle available on every page
4. **All links work** - Navigation between pages is fully functional

---

## 🐛 Troubleshooting

**CSS not loading?**
- Make sure you ran: `npm run build`
- Check that `dist/output.css` exists

**Images not showing?**
- Templates use Unsplash images (requires internet connection)
- All images load from CDN

**Links not working?**
- Make sure you're opening from the correct directory
- Use a local server for best results

---

## 🎯 Quick Start Command

```bash
# Build CSS first
npm run build

# Then start server
npm start

# Open browser to: http://localhost:3000
```

