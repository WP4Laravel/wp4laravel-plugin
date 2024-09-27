# WP4Laravel WordPress plugin

This plugin makes WordPress and the `wp4laravel` theme work together with `wp4laravel/wp4laravel`.

## Installation

`composer require wp4laravel/wp4laravel-plugin`

## Functionality

### Blade template loading

When you have Blade templates in `resources/views` you can show them as templates in the WordPress edit screen.

Create a folder with the same name as the post type in `resources/views` and add a Blade template to it. `default.blade.php` will be used when you select WordPress default template.