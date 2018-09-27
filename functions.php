<?php

function theme_styles() {
	$assets_version = '20180925';

	wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/lib/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_css-theme', get_stylesheet_directory_uri() . '/css/lib/bootstrap/bootstrap-grid.min.css' );
	wp_enqueue_style( 'select2', get_stylesheet_directory_uri() . '/css/lib/select2.min.css' );
	wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/css/main.css', array(), $assets_version);
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

function load_custom_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '2.2.4', true);
    wp_enqueue_script( 'jquery' );
}
if(!is_admin()) {
    add_action('wp_enqueue_scripts', 'load_custom_scripts', 99);
}

function theme_js() {
	global $wp_scripts;
	wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/lib/bootstrap/bootstrap.min.js' );
	wp_enqueue_script( 'select2-js', get_stylesheet_directory_uri() . '/js/lib/select2.min.js' );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/main.js' );

}
add_action( 'wp_enqueue_scripts', 'theme_js');

/*
*  Change the Options Page menu to 'footer'
*/
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Kontakt') );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
