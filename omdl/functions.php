<?php


// Add theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');

// Load CSS
function omdl_enqueue_styles() {

  wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', [], '', 'all' );
  wp_enqueue_style( 'reset-css', get_stylesheet_directory_uri() . '/reset.css' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [ 'reset-css' ], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'omdl_enqueue_styles' );


// Load JS
function omdl_enqueue_scripts() {
  // wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
  wp_enqueue_script( 'jquery-js', get_stylesheet_directory_uri(). '/js/jquery-min.js', [ ], time(), true );
  wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/functions.js', [ 'jquery-js' ], time(), true );
}
add_action( 'wp_enqueue_scripts', 'omdl_enqueue_scripts' );

// Register Menu Locations
register_nav_menus([
  'main-menu' => esc_html__('Main Menu', 'OMDL')
]);


// Setup Widget Areas
function omdl_widgets_init(){
  register_sidebar([
    'name'          => esc_html__('Main Sidebar', 'omdl'),
    'id'            => 'main-sidebar',
    'description'   => esc_html__('Add widgets for main sidebar here', 'omdl')
  ]);

}
add_action('widgets_init','omdl_widgets_init');


?>
