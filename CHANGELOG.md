# Changelog

## 0.4.2

Fix bug in template select box.

## 0.4.1

Add support for WordPress template names inside your Blade templates with: `{{-- Template name: My template --}}`. This gives the template in WordPress a nice name. It works the same as with custom WordPress templates: https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use

## 0.4.0

By using the filter `theme_templates` the template aren't only available on the edit page. ACF now shows them in the Post template options in the location rules section.

You can remove the `theme/wp4laravel/template-*.php` files. Adjust the ACF config files and `wp_postmeta` table accordingly.

## 0.3.0

- Remove help tab

## 0.2.0

- PSR-2 code formatting
- Fix showing all templates in the template list

## 0.1.0

Inception of the plugin.