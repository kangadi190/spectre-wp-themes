<?php while( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card shadow">
        <!-- <?php echo the_post_thumbnail(); ?> -->
        <img src="<?php echo (has_post_thumbnail() ? spectre_featured_img() : get_template_directory_uri() . '/assets/images/no-image.jpg'); ?>" title="<?php echo the_title(); ?>" class="card-img-top"/>
        <div class="card-body">
            <h3><?php echo the_title(); ?></h3>
            <section><?php echo the_content(); ?></section>
        </div>
    </div>
</div>
<?php endwhile; ?>
