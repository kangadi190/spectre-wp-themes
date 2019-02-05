<?php
/**
 * Customizer Tema WordPress
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 * @url     https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
 */

/* Panel Header Setting */
function spectre_header_theme_customizer($customize) {
    $customize->add_panel('header_settings', array(
        'title'       => __('Pengaturan Kepala Tema', 'spectre'),

        'capability'  => 'edit_theme_options',
        'priority'    => 10,
    ) );

    $customize->add_section('navigation_options', array(
        'title'       => __('Pengaturan Navigasi Tema', 'spectre'),
        'description' => __('Atur bagian kepala laman sesuai dengan keinginan anda.', 'spectre'),
        'panel'       => 'header_settings',

        'priority'    => 100,
        'capability'  => 'edit_theme_options',
    ) );

    if(get_theme_mod('image_options') == 2) {
        /**
         * Kustom URL
         * 
         * @package Spectre Theme
         * @auhor   Adiboo Creative Karya Mandiri
         * @since   1.0.0-Rebuild.20190125 
         */
        $customize->add_setting( 'url_custom', array(
                'default'           => '',
                'transport'         => 'refresh',
                'sanitize_callback' => ''
            )
        );

        $customize->add_control( 'url_custom', array(
                'label'        => __( 'Ganti URL Logo Menu', 'spectre' ),
                'description'  => esc_html__( 'Ganti logo tema anda.', 'spectre' ),
                'section'      => 'navigation_options',
                'priority'     => 10, // Optional. Order priority to load the control. Default: 10
                'type'         => 'input', // Can be either text, email, url, number, hidden, or date
                'capability'   => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs'  => array(
                    'class'       => 'form-control',
                    'style'       => 'width: 100%;',
                    'placeholder' => 'https://www.adiboocreative.xyz/logo.png',
                ),
            )
        );
    }

    /**
     * Opsi Logo
     * 
     * @package Spectre Theme
     * @auhor   Adiboo Creative Karya Mandiri
     * @since   1.0.0-Rebuild.20190125 
     */
    $customize->add_setting( 'image_options', array(
        'default'           => 0,
        'transport'         => 'refresh',
        'sanitize_callback' => ''
        )
    );

    $customize->add_control( 'image_options', array(
            'label'        => __( 'Pilih Tipe Logo Menu', 'spectre' ),
            'description'  => esc_html__( 'Pilih opsi anda dalam menentukan ingin menggunakan uploader logo atau dari custom url?', 'spectre' ),
            'section'      => 'navigation_options',
            'priority'     => 10, // Optional. Order priority to load the control. Default: 10
            'type'         => 'radio', // Can be either text, email, url, number, hidden, or date
            'capability'   => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'choices'      => array(
                0        => __('Default (Hanya nama situs saja)', 'spectre'),
                1        => __('Logo Uploader', 'spectre'),
                2        => __('URL Custom', 'spectre'),
            ),
        )
    );
}
add_action('customize_register', 'spectre_header_theme_customizer');

function spectre_footer_theme_customizer($customize) {
    /**
     * Pengaturan Kaki Tema
     * @package Spectre Theme
     * @auhor   Adiboo Creative Karya Mandiri
     * @since   1.0.0-Rebuild.20190125 
     */
    $customize->add_panel('footer_settings', array(
        'title'       => __('Pengaturan Kaki Tema', 'spectre'),

        'capability'  => 'edit_theme_options',
        'priority'    => 10,
    ) );

    $customize->add_section('footer_options_primary', array(
        'title'       => __('Pengaturan Utama Kaki', 'spectre'),
        'description' => __('Atur bagian kaki laman sesuai dengan keinginan anda.', 'spectre'),
        'panel'       => 'footer_settings',

        'priority'    => 99,
        'capability'  => 'edit_theme_options',
    ) );

    /**
     * Opsi Kolom Footer
     * 
     * @package Spectre Theme
     * @auhor   Adiboo Creative Karya Mandiri
     * @since   1.0.0-Rebuild.20190125 
     */
    $customize->add_setting( 'footer_column', array(
        'default'           => 0,
        'transport'         => 'refresh',
        'sanitize_callback' => ''
        )
    );

    $customize->add_control( 'footer_column', array(
            'label'        => __( 'Pilih Tipe Widget Footer Atas', 'spectre' ),
            'description'  => esc_html__( 'Pilih opsi anda untuk gaya kaki tema bagian atas sesuai dengan keinginan anda.', 'spectre' ),
            'section'      => 'footer_options_primary',
            'priority'     => 10, // Optional. Order priority to load the control. Default: 10
            'type'         => 'radio', // Can be either text, email, url, number, hidden, or date
            'capability'   => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'choices'      => array(
                0        => __('Default (3 Kolom)', 'spectre'),
                1        => __('Perusahaan (6 + 2 + 2 + 2)', 'spectre'),
                2        => __('Blog Personal (3 + 3 + 3 + 3)', 'spectre'),
                3        => __('Blog Personal (4 + 4 + 4) (Versi Beta)', 'spectre'),
            ),
        )
    );

    /**
     * Opsi Kolom Footer Bawah
     * 
     * @package Spectre Theme
     * @auhor   Adiboo Creative Karya Mandiri
     * @since   1.0.0-Rebuild.20190125 
     */
    $customize->add_setting( 'footer_bottom_column', array(
        'default'           => 0,
        'transport'         => 'refresh',
        'sanitize_callback' => ''
        )
    );

    $customize->add_control( 'footer_bottom_column', array(
            'label'        => __( 'Pilih Tipe Widget Footer Bawah', 'spectre' ),
            'description'  => esc_html__( 'Pilih opsi anda untuk gaya kaki tema bagian bawah sesuai dengan keinginan anda.', 'spectre' ),
            'section'      => 'footer_options_primary',
            'priority'     => 10, // Optional. Order priority to load the control. Default: 10
            'type'         => 'radio', // Can be either text, email, url, number, hidden, or date
            'capability'   => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
            'choices'      => array(
                0        => __('Default (2 Kolom Biasa)', 'spectre'),
                1        => __('Perusahaan (2 Kolom Dengan Menu)', 'spectre'),
                2        => __('Blog Personal (Dua Kolom Dengan Menu)', 'spectre'),
                3        => __('Blog Personal (Dua Kolom Biasa) (Versi Beta)', 'spectre'),
            ),
        )
    );
} 
add_action('customize_register', 'spectre_footer_theme_customizer');
