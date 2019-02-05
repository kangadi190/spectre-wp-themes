<?php
/**
 * Halaman Depan
 * 
 * @package Spectre Theme
 * @auhor   Adiboo Creative Karya Mandiri
 * @since   1.0.0-Rebuild.20190125 
 */

 get_header(); ?>
 <div class="container" id="main-post">
    <div class="row">
    <?php if(get_theme_mod('blog_layout') === 3) { ?>
        <div class="col-md-3">
            <?php get_sidebar('left'); ?>
        </div>
        <div class="col-md-6">
            <?php (have_posts() ? get_template_part('post/content', 'single') : get_template_part('post/content', 'none') ); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    <?php } else { ?>
        <?php if(get_theme_mod('sidebar_layout') === 'left') : ?>
        <div class="col-md-3">
            <?php get_sidebar('left'); ?>
        </div>
        <div class="col-md-9">
            <?php (have_posts() ? get_template_part('post/content', 'single') : get_template_part('post/content', 'none') ); ?>
        </div>
        <?php else : ?>
        <div class="col-md-9">
            <?php (have_posts() ? get_template_part('post/content', 'single') : get_template_part('post/content', 'none') ); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <?php endif; ?>
    <?php } ?> 
    </div>
 </div>
 <?php get_footer(); ?>