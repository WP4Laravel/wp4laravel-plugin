<?php

add_filter('theme_templates', 'add_blade_templates', 10, 4);

function add_blade_templates(array $templates, WP_Theme $theme, WP_Post|null $post, string $post_type) {
    if (!defined('WP_TEMPLATE_DIR')) {
        return $templates;
    }

    if (!is_post_type_viewable($post_type)) {
        return $templates;
    }

    $path = WP_TEMPLATE_DIR.$post_type;

    if (!is_dir($path)) {
        return $templates;
    }

    $filtered = array_filter(scandir($path), function ($item) {
        return $item == '.' || $item == '..' || $item == 'default.blade.php' || strpos($item, ".blade.php") === false ? false : true;
    });

    $list = array_map(function ($item) {
        return str_replace(".blade.php", "", $item);
    }, $filtered);

    return array_merge($templates, array_combine($list, $list));
}

