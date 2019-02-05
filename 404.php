<?php
/**
 * Halaman 404
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
            <?php get_template_part('post/content', '404'); ?>
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
            <?php get_template_part('post/content', '404'); ?>
        </div>
        <?php else : ?>
        <div class="col-md-9">
            <?php get_template_part('post/content', '404'); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <?php endif; ?>
    <?php } ?> 
    </div>
 </div>
 <?php get_footer(); ?>