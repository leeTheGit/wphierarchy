<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery','link', 'image' ,'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');


//load css
function wphierarchy_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}

add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );

register_nav_menus(
    [
        'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy'),
        'footer-menu' => esc_html__( 'Main Foooter Menu', 'wpheirarchy'),
        
    ]
);


function wpheirarchy_widgets_init() {
    register_sidebar([
        "name"=> esc_html__( 'Main Sidebar', 'wpheirarchy'),
        "id" => 'main-sidebar',
        'description'=> esc_html__( 'Add widgets for main sidebar', 'wpheirarchy'),
        "before_widget"=> '<section class="widget>"',
        "after_widget"=> '</section>',
        "before_title"=> '<h2 class="widget-title">',
        "after_title"=> '</h2>',
    ]);
}

add_action('widgets_init', 'wpheirarchy_widgets_init');