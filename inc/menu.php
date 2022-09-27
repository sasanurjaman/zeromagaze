<?php
// register menu
function zeromagaze_menu()
{
    register_nav_menus(array(
        'primary' => __('primary Menu', 'zeromagaze'),
        'social' => __('social Menu', 'zeromagaze')
    ));
}
add_action('init', 'zeromagaze_menu');

// add class menu li
function add_class_li_menu($classes, $item, $args)
{
    // in menu active
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_li_menu', 1, 3);

// add classes to menu acher tag
function add_link_attrs($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
add_filter('nav_menu_link_attributes', 'add_link_attrs');

// call menu
function zeromagaze_primary_menu()
{
    wp_nav_menu(array(
        'container' => '',
        'container_class' => '',
        'theme_location' => 'primary',
        'menu_class' => '',
        'add_li_class' => 'nav-link'
    ));
}
