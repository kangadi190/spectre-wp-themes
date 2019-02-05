<?php
/**
 * Fungsi Tambahan
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

/**
 * Add Welcome message to dashboard
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */
function spectre_welcome(){
    $theme_page_url = 'https://docs.adiboocreative.xyz/themes/spectre';

    $message = sprintf(__( 'Terima kasih telah menggunakan tema kami. Kami harap anda menyukainya. Tolong jangan hapus link copyright di kaki tema sesuai dengan <a href="//www.adiboocreative.xyz/licenses/wordpress-themes/">lisensi</a> kami.<br/>Dokumentasi tema bisa anda temui di <a href="%1$s">sini</a><br/>Apabila ada bug atau kekeliruan dalam tema ini, mohon hubungi tim kami melalui.<br/>0812-3477-1365 (Whatsapp)<br/>Amir Zuhdi Wibowo (Facebook)', 'spectre' ),
        esc_url( $theme_page_url )
    );

    printf(
        '<div class="notice is-dismissible">
            <h3>'. __('Halo, Terima Kasih Telah Menggunakan Tema Kami!', 'spectre') .'</h3>
            <p>%1$s</p>
        </div>',
        $message
    );
    add_option( 'triggered_welcomet', '1', '', 'yes' );

}
add_action( 'admin_notices', 'spectre_welcome' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wp_bootstrap_starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'wp_bootstrap_starter_pingback_header' );

/**
 * Add Post Meta
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */
function post_date($data) { ?>
    <i class="fas fa-folder"></i> <?php echo the_category( ', ' ); ?> <i class="fas fa-calendar"></i> <?php echo get_the_date(); ?> <i class="fas fa-user"></i> <?php echo get_the_author(); ?> <i class="fas fa-tag"></i> <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
<?php }

function spectre_featured_img() {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];

    return $thumb_url;
}

/**
 * Custom Logo And Background
 * 
 * @author  Adiboo Creative Karya Mandiri
 * @package Spectre Themes
 * @since   1.0.1
 */

 function spectre_custom() {
    /**
     * Background Custom
     * 
     * @author  Adiboo Creative Karya Mandiri
     * @package Spectre Themes
     * @since   1.0.1
     */
    $defaults = array(
        'default-color'          => '',
        'default-image'          => '',
        'default-repeat'         => 'repeat',
        'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
        'default-attachment'     => 'scroll',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );

    /**
     * Custom Header
     * 
     * @author  Adiboo Creative Karya Mandiri
     * @package Spectre Themes
     * @since   1.0.1
     */
    $defaults = array(
        'default-image'          => '',
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-header', $defaults );

	/**
	 * Logo Kustom
	 * 
	 * @package Spectre Theme
	 * @auhor   Adiboo Creative Karya Mandiri
	 * @since   1.0.0-Rebuild.20190125 
	 */
    $defaults = array(
        'height'      => 30,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
 }
 add_action('after_setup_theme', 'spectre_custom');