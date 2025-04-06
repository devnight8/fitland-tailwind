<?php


function fitland_enqueue_assets()
{
    wp_enqueue_style('style-main', get_template_directory_uri() . '/src/output.css', [], null);
    // wp_enqueue_script('myshop-scripts', get_template_directory_uri() . '/dist/app.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'fitland_enqueue_assets');

add_action('after_setup_theme', 'init_theme_fit_land');
add_filter('show_admin_bar', '__return_true');


function init_theme_fit_land()
{
    add_theme_support('wp-block-styles');
    add_theme_support('menus');
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'admin-bar', array('callback' => '__return_true'), );

}

