# 🏠 Crafton Properties – Static Website

This project is a modern static website built using [Jigsaw](https://jigsaw.tighten.com/) - a PHP-based static site generator using Laravel Blade templates, Tailwind CSS, and Vite for asset bundling.

---

## 🚀 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/crafton-properties.git
cd crafton-properties
```

### 2. Install dependencies

Install PHP and JS dependencies:

```bash
composer install
npm install
```

### 3. Build the site locally

#### Development mode (watch + live reload)

```bash
npm run watch
```

#### Production build

```bash
npm run prod
```

---

## 📁 Project Structure

```
source/
├── _assets/         # JS, CSS compiled by laravel mix used in the project
├── _components/     # Reusable Blade components (buttons etc.)
├── _layouts/        # Main layout templates (e.g. `main.blade.php`)
├── _nav/            # Navigation menus
├── _sections/       # Page sections (e.g. hero, contact)
├── index.blade.php  # Home page template
├── assets           # static filles like images, fonts
```

### Root files

- `config.php` – Jigsaw site configuration
- `vite.config.js` / `webpack.mix.js` – Asset pipeline configuration (Vite/Webpack)
- `tailwind.config.js` – Tailwind CSS configuration
- `postcss.config.js` – PostCSS setup
- `.gitignore` – Files excluded from Git
- `netlify.toml` – Netlify deployment config (optional)

---

## 🌐 Building Pages

All templates are written using Laravel Blade syntax. The site’s layout is defined in:

```
source/_layouts/main.blade.php
```

Pages like the homepage (`index.blade.php`) extend this layout and include partials from `source/_sections/`.

---

## ⚙️ Scripts

| Command         | Description                       |
|----------------|-----------------------------------|
| `npm run watch`| Build + watch for changes         |
| `npm run prod` | Compile assets for production     |

---

## 📦 Deployment

This site is suitable for hosting on:
- **Netlify** (see `netlify.toml`)
- Any **static hosting** platform (just deploy the contents of `/build_local/`)

To deploy manually:

```bash
./vendor/bin/jigsaw build production
```

Then upload `/build_production` to your server.

---

## 🤝 Credits

Crafton design and development by Michał Sarzała.
