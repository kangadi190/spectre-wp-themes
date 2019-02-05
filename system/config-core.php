<?php
/**
 * Konfgurasi Situs
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

function spectre_theme_setup() {
	/**
	 * Dukungan Tema
	 * 
	 * @package Spectre Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0-Rebuild.20190125 
	 */
    add_theme_support( 'html5', array( 'comment-list' ) );
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails', array('post', 'page'));
	add_theme_support( 'automatic-feed-links' );
	add_editor_style('stylesheet-tinymce.css');

	/**
	 * Teks Domain Tema
	 * 
	 * @package Spectre Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0-Rebuild.20190125 
	 */
	load_theme_textdomain( 'spectre', get_template_directory() . '/system/i18n' );
	
	register_nav_menus( array(
		'primary' => __( 'Menu Utama', 'spectre' ),
		'secondary' => __( 'Menu Kaki', 'spectre' ),
	) );
}
add_action( 'after_setup_theme', 'spectre_theme_setup' );

/**
 * Panjang Konten
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */
if ( ! isset( $content_width ) ) $content_width = 900;

