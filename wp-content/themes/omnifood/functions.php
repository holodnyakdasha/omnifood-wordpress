<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('wp_footer', 'script_theme');
add_action('wp_enqueue_scripts', 'load_font_awesome' );

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');

}
function load_font_awesome() {
    wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  }
function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Primary Menu' );
}

function script_theme() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js");
    wp_enqueue_script('jquery');
    wp_enqueue_script('icon', "https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js" );
    wp_enqueue_script('icon');
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', ['jquery'], null, true );
    wp_enqueue_script('default', get_template_directory_uri() . '/asssets/js/script.js' );


}

?>