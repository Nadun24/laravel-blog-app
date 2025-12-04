# Laravel Blog Application

A simple blog application built with Laravel 12 and Blade templating engine.

## Description

This is a blog application that allows users to browse articles organized by categories. Built using Laravel framework with traditional server-side rendering using Blade templates.

## Features

- Home page displaying blog categories
- About page
- Contact page
- Article viewing
- Category management
- Clean and modular Blade layout system

## Requirements

- PHP >= 8.2
- Composer
- MySQL/MariaDB
- Node.js and NPM

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd test-project
```

2. Install PHP dependencies
```bash
composer install
```

3. Install Node.js dependencies
```bash
npm install
```

4. Copy the environment file
```bash
copy .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_project
DB_USERNAME=root
DB_PASSWORD=
```

7. Create the database
```bash
# Create a database named 'test_project' in your MySQL server
```

8. Run migrations
```bash
php artisan migrate
```

9. Build frontend assets
```bash
npm run build
```

## Usage

### Development

Start the development server:
```bash
php artisan serve
```

For live asset compilation:
```bash
npm run dev
```

Or run all development services concurrently:
```bash
composer dev
```

Visit `http://localhost:8000` in your browser.

### Testing

Run the test suite:
```bash
composer test
```

Or:
```bash
php artisan test
```

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php
│   └── Models/
│       ├── User.php
│       └── Category.php
├── database/
│   └── migrations/
├── resources/
│   └── views/
│       ├── layout/
│       │   ├── app.blade.php
│       │   └── blog.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── contact.blade.php
│       └── article.blade.php
└── routes/
    └── web.php
```

## Routes

- `GET /` - Home page (displays categories)
- `GET /about` - About page
- `GET /contact-us` - Contact page
- `GET /article` - Article page

## Models

### Category
Main model for organizing blog content into categories.

## Development Tools

This project includes:
- **Laravel Pint**: PHP code style fixer
- **Laravel Sail**: Docker development environment
- **Laravel Tinker**: REPL for interacting with your application
- **Laravel Pail**: Log viewer
- **PHPUnit**: Testing framework

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For issues and questions, please open an issue in the repository.
