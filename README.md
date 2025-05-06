# Laravel Project — HTML5 UP + Post CRUD

## 📋 Description

A Laravel 10+ demo project that integrates the [Editorial template from HTML5 UP](https://html5up.net/editorial), using Blade components, MVC structure, and resourceful routing. Includes basic page structure and full CRUD functionality for a `Post` model with mock data.

## 🚀 Requirements

- PHP 8.1+
- Composer
- Node.js + npm
- Laravel 10+
- Git

## ⚙️ Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Alex3584/html5up-laravel.git
   cd html5up-laravel
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install JS dependencies and compile assets:
   ```bash
   npm install
   npm run dev
   ```

4. Configure your database in `.env`, then run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

5. Start the local server:
   ```bash
   php artisan serve
   ```

6. Open in your browser:  
   [http://localhost:8000](http://localhost:8000)

## 📄 Main Routes

- `/` — Home page
- `/generic`, `/elements` — pages
- `/dashboard`, `/profile`, `/settings` — basic structure
- `/posts` — posts list (resource route)
- `/posts/create` — create a post
- `/posts/{post}` — view a post

## 🧪 Features

- Blade component-based layout
- HTML5 UP template integrated via layouts and includes
- Route model binding enabled
- Fully working CRUD for `Post`