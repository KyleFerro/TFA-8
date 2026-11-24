# TFA-8: Resource Controllers and Authentication

This merge-ready package continues the Laravel POS work from TFA5 through TFA7. It includes:

- Customer and user `Route::resource()` declarations
- All seven resource-controller methods: `index`, `create`, `store`, `show`, `edit`, `update`, and `destroy`
- Laravel Breeze login and registration integration
- `auth` middleware on every customer and user management route
- User registration compatible with `username` and `full_name`
- Existing TFA7 avatar upload and WebP thumbnail preparation
- Feature tests for guest redirects and authenticated access
- Migrations and seeders required for submission

## Important: installation order

Work on a copy of the existing POS project.

### 1. Install Breeze first

From the existing Laravel POS project, run:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
```

Choose Blade and PHPUnit. Then install frontend dependencies:

```bash
npm install
npm run build
```

### 2. Merge this package into the project

Copy the folders from this package into the Laravel project root. When asked, merge folders and replace the matching TFA7 files.

The included registration controller and registration view intentionally replace Breeze's defaults so registration collects `username`, `full_name`, `email`, and `password`.

If the existing models contain additional relationships or methods, merge those parts instead of deleting them.

### 3. Load the protected resource routes

Remove the old TFA7 route declarations or this line if it exists:

```php
require __DIR__.'/tfa7.php';
```

Add this line to the bottom of `routes/web.php`:

```php
require __DIR__.'/tfa8.php';
```

Breeze normally adds this line automatically. Keep it:

```php
require __DIR__.'/auth.php';
```

### 4. Keep the image package from TFA7

If it is not already installed:

```bash
composer require intervention/image-laravel
php artisan vendor:publish --provider="Intervention\Image\Laravel\ServiceProvider"
php artisan storage:link
```

### 5. Run migrations and seeders

```bash
php artisan migrate
php artisan db:seed --class=CustomerSeeder
php artisan db:seed --class=UserSeeder
```

Sample local login:

- Email: `sample@example.com`
- Password: `password`

## Test access control

```bash
php artisan optimize:clear
php artisan route:list
php artisan test
```

Manual test:

1. Log out.
2. Visit `/customers` or `/users`.
3. Confirm Laravel redirects to `/login`.
4. Log in with a registered or seeded account.
5. Visit `/customers` or `/users` again.
6. Confirm the page loads normally.

## GitHub submission checklist

Commit the complete Laravel POS project, including controllers, models, migrations, seeders, views, routes, tests, `composer.json`, `composer.lock`, `package.json`, and the frontend lock file.

Do not commit `.env`, `vendor/`, `node_modules/`, database passwords, or uploaded avatar files.
