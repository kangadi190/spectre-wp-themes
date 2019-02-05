<?php
/**
 * File CSS
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

function spectre_theme_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap-4.2.1-dist/css/bootstrap.min.css', null, '4.2.1' );
    wp_enqueue_style( 'fa-css', get_template_directory_uri() . '/assets/fontawesome-5.3.6/css/all.min.css', null, '3.5.6' );
    wp_enqueue_style( 'spetre-css', get_template_directory_uri() . '/assets/css/style.css', null, '1.0.0-rebuild.20190125' );
    wp_enqueue_style( 'bootstrap-addons-btn-css', get_template_directory_uri() . '/assets/css/btn.css', null, '1.0.0-rebuild.20190125' );
    wp_enqueue_style( 'addons-bootstrap-css', get_template_directory_uri() . '/assets/css/addons-bootstrap.css', null, '1.0.0-rebuild.20190125' );
    
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/jquery/jquery.min.js', null, '3.2.1' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap-4.2.1-dist/js/bootstrap.min.js', null, '4.2.1' );
    wp_enqueue_script( 'jquery-easing-js', get_template_directory_uri() . '/assets/jquery-easing/jquery.easing.min.js', null, '3.2.1' );
    wp_enqueue_script( 'fa-js', get_template_directory_uri() . '/assets/fontawesome-5.3.6/js/all.min.js', null, '3.5.6' );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'spectre_theme_scripts' );
