<?php while( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card shadow">
        <!-- <?php echo the_post_thumbnail(); ?> -->
        <img src="<?php echo (has_post_thumbnail() ? spectre_featured_img() : get_template_directory_uri() . '/assets/images/no-image.jpg'); ?>" title="<?php echo the_title(); ?>" class="card-img-top"/>
        <div class="card-body">
            <h3><?php echo the_title(); ?></h3>
            <section><?php echo the_content(); ?></section>

            <hr/>
            <p class="text-muted"><?php echo post_date('l, j F Y'); ?></p>
        </div>
    </div>
</div>
<?php endwhile; ?>

<div class="card shadow mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <!-- <?php previous_posts_link(); ?> -->
                <?php previous_post_link('%link', '<i class="fas fa-fw fa-arrow-left"></i> ' . __('Posting Sebelumnnya', 'spectre') . '<br/>'.'%title'); ?>
            </div>
            <div class="col text-right">
                <?php next_post_link('%link', __('Posting Selanjutnya', 'spectre') . ' <i class="fas fa-fw fa-arrow-right"></i><br/>'.'%title'); ?>
            </div>
        </div>
    </div>
</div>

<?php wp_link_pages(); ?>

<div class="card shadow my-3">
    <div class="card-body">
        <?php comments_template('/comments.php'); ?>
    </div>
</div>