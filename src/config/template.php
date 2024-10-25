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

    $bladeTemplates = [];

    foreach (scandir($path) as $file) {
        if (strpos($file, '.blade.php') === false) {
            continue;
        }

        $templateName = str_replace('.blade.php', '', $file);

        $full_path = $path.'/'.$file;
        if ( preg_match( '|Template Name:(.*)$|mi', file_get_contents( $full_path ), $header ) ) {
            $templateDescription = $header[1];
        } else {
            $templateDescription = $templateName;
        }

        $bladeTemplates[$templateName] = $templateDescription;
    }

    sort($bladeTemplates);

    return array_merge($templates, $bladeTemplates);
}

