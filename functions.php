<?php
function fireplace_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'fireplace_setup');


function frp_enqueue_assets() {
    wp_enqueue_style('frp-main-style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_style('frp-custom-style', get_template_directory_uri() . '/assets/css/custom-style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('frp-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'frp_enqueue_assets');

