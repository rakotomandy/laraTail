# =============================================================================

# LARAVEL 11 + TAILWIND CSS + BREEZE (2025) – FULL SETUP GUIDE

# Works 100% on Windows, macOS, Linux

# =============================================================================

# 1. Go to the folder where you want your project

# Example: Desktop

cd C:\Users\Samson\desktop

# macOS/Linux → cd ~/Desktop

# 2. Create a brand-new Laravel 11 project

# This downloads Laravel + all core files

composer create-project laravel/laravel laraTail

# → Creates folder "laraTail" with a fresh Laravel installation

# 3. Enter the project folder (IMPORTANT!)

cd laraTail

# From now on, ALL commands must be run to be run inside this folder

# 4. Install Laravel Breeze (adds the "breeze" Artisan command)

# --dev = only needed during development

composer require laravel/breeze --dev

# → Downloads Breeze + Tailwind + authentication scaffolding

# 5. Install Breeze stack of your choice

# Choose ONE of the following:

# Option A → React + Inertia + Tailwind (most popular in 2025)

php artisan breeze:install react

# Option B → Vue + Inertia + Tailwind

# php artisan breeze:install vue

# Option C → Classic Blade + Alpine + Tailwind (simple & fast)

# php artisan breeze:install blade

# Option D → API only (no frontend)

# php artisan breeze:install api

# 6. Install Node.js dependencies (Tailwind, Vite, React/Vue, etc.)

npm install

# → Creates node_modules and downloads Tailwind + React (if you chose it)

# 7. Compile assets (Tailwind CSS + JS)

npm run dev

# → Generates public/build/manifest.json and CSS/JS files

# → Run this every time you change CSS or JS

# In production you will run: npm run build

# 8. (Optional but recommended) Create database tables

# This creates users table + migrations for Breeze auth

php artisan migrate

# 9. Start the Laravel development server

php artisan serve

# → Server runs at http://localhost:8000

# 10. Open your browser

# → http://localhost:8000

# You now have:

# • Laravel 11

# • Tailwind CSS fully working

# • Authentication (Login / Register / Dashboard)

# • React or Blade (depending on your choice)

# =============================================================================

# ONE-LINER (copy-paste everything for React + Tailwind)

# =============================================================================

cd C:\Users\Samson\desktop && composer create-project laravel/laravel laraTail && cd laraTail && composer require laravel/breeze --dev && php artisan breeze:install react && npm install && npm run dev && php artisan migrate && php artisan serve

# =============================================================================

# Useful commands you will use later

# =============================================================================

npm run dev          # Development (with hot-reload)
npm run build        # Production build (smaller files)
php artisan serve    # Start server
php artisan migrate  # Run database migrations
php artisan tinker   # Play with Laravel in console
php artisan route:list  # See all routes

# =============================================================================

# You're done! Enjoy Laravel + Tailwind

# =============================================================================
