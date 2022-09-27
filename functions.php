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

    // custom logo
    add_theme_support('custom-logo');

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

    load_theme_textdomain('zeromagaze');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Add theme support widget
    add_theme_support('widgets');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add theme support menu
    // add_theme_support('menus');
}
add_action('after_setup_theme', 'zeromagaze_theme_support');

// register style-js
require get_template_directory() . '/inc/style-js.php';

// register menu
require get_template_directory() . '/inc/menu.php';
