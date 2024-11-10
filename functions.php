<?php

const devServer = 'uxpd.test';
const theme_name = 'leonidlezner';
const assets_path = 'public/';
const resources_path = 'src/';

function get_file_version($filePath)
{
    return filemtime(get_template_directory() . '/' . $filePath);
}

function get_versioned_asset($fileName)
{
    $filePath = assets_path . $fileName;
    $version = get_file_version($filePath);
    return get_assets_url() . $fileName . '?v=' . $version;
}

function get_assets_url()
{
    return get_template_directory_uri() . '/' . assets_path;
}

function get_font_url($fileName)
{
    return get_versioned_asset('fonts/' . $fileName);
}

function get_image_url($fileName)
{
    return get_versioned_asset('images/' . $fileName);
}

function get_lang($string)
{
    return __($string, theme_name);
}

function lang($string)
{
    echo get_lang($string);
}

function register_theme_menus()
{
    register_nav_menu('header-menu', get_lang('Header Menu'));
    register_nav_menu('footer-menu', get_lang('Footer Menu'));
}

function get_post_books()
{
    $book_aliases = get_post_meta(get_the_ID(), 'book');

    if (count($book_aliases)) {
        $books = get_posts([
            'orderby' => 'title',
            'post_type' => 'literature_book',
            'meta_query' => array(
                array(
                    'key'   => 'alias',
                    'value' => $book_aliases,
                )
            )
        ]);

        return $books;
    }

    return [];
}

function get_all_books()
{
    $books = get_posts([
        'orderby' => 'title',
        'post_type' => 'literature_book'
    ]);

    return $books;
}

add_action('after_setup_theme', function () {
    load_theme_textdomain(theme_name, get_template_directory() . '/' . resources_path . '/lang');

    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('automatic-feed-links');

    add_theme_support('post-thumbnails');

    add_theme_support('responsive-embeds');

    register_theme_menus();
});

// Cudos to kima for the implementation: https://github.com/axelilali/kima
add_action('wp_enqueue_scripts', function () {
    if ($_SERVER['SERVER_NAME'] == devServer && is_array(wp_remote_get('http://localhost:5173/'))) {
        wp_enqueue_script('vite', 'http://localhost:5173/@vite/client', [], null);
        wp_enqueue_script(theme_name, 'http://localhost:5173/src/js/app.js', [], null, true);
        wp_enqueue_style(theme_name, 'http://localhost:5173/src/css/app.css', [], 'null');
    } else {
        $manifestFile = get_theme_file_path('public/dist/.vite/manifest.json');

        if (file_exists($manifestFile)) {
            $manifest = json_decode(file_get_contents($manifestFile), true);
            wp_enqueue_script(theme_name, get_theme_file_uri('public/dist/' . $manifest['src/js/app.js']['file']), [], null, true);
            wp_enqueue_style(theme_name, get_theme_file_uri('public/dist/' . $manifest['src/css/app.css']['file']), [], null);
        }
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
});

add_filter('script_loader_tag', function (string $tag, string $handle, string $src) {
    if (in_array($handle, ['vite', theme_name])) {
        return '<script type="module" src="' . esc_url($src) . '" defer></script>';
    }
    return $tag;
}, 10, 3);

add_filter('nav_menu_link_attributes', function ($attributes, $item, $args) {
    if (property_exists($args, 'link_class')) {
        $attributes['class'] = $args->link_class;
    }
    return $attributes;
}, 1, 3);

add_filter('pre_get_posts', function ($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post'));
    }
    return $query;
});
