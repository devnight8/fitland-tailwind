<?php

/**
 * Theme functions and definitions
 */


// Include WordPress core functions
require_once(ABSPATH . 'wp-includes/functions.php');
require_once(ABSPATH . 'wp-includes/plugin.php');


add_action('after_setup_theme', 'init_theme_fit_land');

function fitland_enqueue_assets()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/src/output.css', [], null);
}

function fitland_enqueue_scripts()
{
    // Example of how to enqueue your JS files
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'fitland_enqueue_scripts');
add_action('wp_enqueue_scripts', 'fitland_enqueue_assets');


function init_theme_fit_land()
{
    add_theme_support('wp-block-styles');
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('admin-bar', array('callback' => '__return_true'));
}
