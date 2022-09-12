<?php

/**
 * zeromagaze functions and definitions
 * @link https://github.com/sasanurjaman/zeromagaze
 * @since zeromagaze 1.0
 */

/**
 * sets up default and register support theme
 * @since zeromagaze 1.0
 */
function zeromagaze_theme_support()
{
    // automatic feed link
    add_theme_support('automatic-feed-links');

    // post_thumbnail
    add_theme_support('post-thumbnails');

    // title tag
    add_theme_support('title-tag');

    // support html5, default search, comments
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    ));

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'zeromagaze_theme_support');

/**
 * register style & js
 * @since zeromagaze 1.0
 */
function zeromagaze_register_css_js()
{
    $theme_version = wp_get_theme()->get('Version');

    //  Google Fonts 
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', null, $theme_version, false);

    // Vendor CSS Files
    wp_enqueue_style('aos-css', get_theme_file_uri() . '/assets/vendor/aos/aos.css', null, $theme_version, false);
    wp_enqueue_style('bootstrap-css', get_theme_file_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', null, $theme_version, false);
    wp_enqueue_style('bootstrap-icons', get_theme_file_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', null, $theme_version, false);
    wp_enqueue_style('boxicons-css', get_theme_file_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', null, $theme_version, false);
    wp_enqueue_style('glightbox-css', get_theme_file_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', null, $theme_version, false);
    wp_enqueue_style('swiper-css', get_theme_file_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', null, $theme_version, false);

    // Template Main CSS
    wp_enqueue_style('style-css', get_theme_file_uri() . '/assets/css/style.css', null, $theme_version, false);

    // Vendor JS Files
    wp_enqueue_script('aos-js', get_theme_file_uri() . '/assets/vendor/aos/aos.js', null, $theme_version, false);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', null, $theme_version, false);
    wp_enqueue_script('glightbox-js', get_theme_file_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', null, $theme_version, false);
    wp_enqueue_script('isotope-layout-js', get_theme_file_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', null, $theme_version, false);
    wp_enqueue_script('swiper-js', get_theme_file_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', null, $theme_version, false);
    wp_enqueue_script('validate-js', get_theme_file_uri() . '/assets/vendor/php-email-form/validate.js', null, $theme_version, false);

    // Template Main JS File
    wp_enqueue_script('main-js', get_theme_file_uri() . '/assets/js/main.js', null, $theme_version, false);
}

add_action('wp_enqueue_scripts', 'zeromagaze_register_css_js');
