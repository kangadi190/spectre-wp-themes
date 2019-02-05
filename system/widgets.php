<?php
/**
 * Konfgurasi Widget
 *
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125
 */
function widget_() {
    register_sidebar(
        array(
            'name'          => __( 'Bilah Sisi Utama', 'spectre' ),
            'id'            => 'sidebar-right',    // ID should be LOWERCASE  ! ! !
            'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre'),
            'class'         => 'sidebar-main mb-3',
            'before_widget' => '<div id="%1$s" class="widget card mb-3 shadow %2$s"><div class="card-body">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Bilah Sisi Sekunder', 'spectre' ),
            'id'            => 'sidebar-left',    // ID should be LOWERCASE  ! ! !
            'description'   => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre'),
            'class'         => 'sidebar-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widgettitle">',
            'after_title'   => '</div>',
        )
    );

    if (get_theme_mod('footer_column') == 1) {
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Kiri', 'spectre') ,
            'id' => 'footer-1', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Tengah Kiri', 'spectre') ,
            'id' => 'footer-2', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Tengah Kanan', 'spectre') ,
            'id' => 'footer-3', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Kanan', 'spectre') ,
            'id' => 'footer-4', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
    } else {
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Kiri', 'spectre') ,
            'id' => 'footer-1', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Tengah', 'spectre') ,
            'id' => 'footer-2', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
        register_sidebar(array(
            'name' => __('Bilah Sisi Kaki Kanan', 'spectre') ,
            'id' => 'footer-3', // ID should be LOWERCASE  ! ! !
            'description' => __('Tambahkan sebuah widget dengan menarik widget yag tersedia ke area ini.', 'spectre') ,
            'class' => 'footer-widget',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widgettitle">',
            'after_title' => '</div>',
        ));
    }
}
add_action('widgets_init', 'widget_');