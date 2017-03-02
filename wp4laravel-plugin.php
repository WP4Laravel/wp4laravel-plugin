<?php

require_once(__DIR__.'/src/config/storage.php');
require_once(__DIR__.'/src/config/template.php');
require_once(__DIR__.'/src/config/yoast.php');

add_action('after_setup_theme', function () {
    require_if_theme_supports('wp4laravel-dashboard', __DIR__.'/src/ui/dashboard.php');
    require_if_theme_supports('wp4laravel-editor', __DIR__.'/src/ui/editor.php');
    require_if_theme_supports('wp4laravel-footer', __DIR__.'/src/ui/footer.php');
    require_if_theme_supports('wp4laravel-login', __DIR__.'/src/ui/login.php');
    require_if_theme_supports('wp4laravel-menu', __DIR__.'/src/ui/menu.php');
    require_if_theme_supports('wp4laravel-tabs', __DIR__.'/src/ui/tabs.php');
    require_if_theme_supports('wp4laravel-toolbar', __DIR__.'/src/ui/toolbar.php');
}, 100);
