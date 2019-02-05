<?php $no = 0; while( have_posts() ) : $no++; the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card shadow-lg mb-3">
        <?php if($no % 2 === 1) : ?>
        <div class="row no-gutters">
            <div class="col-md-3 left-image" style="background: url(<?php echo (has_post_thumbnail() ? spectre_featured_img() : get_template_directory_uri() . '/assets/images/no-image.jpg'); ?>) no-repeat center center;background-size:cover;">&nbsp;</div>
            <div class="col-md-9">
                <div class="card-body">
                    <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                    <p><?php echo the_excerpt(__('Baca Lagi', 'spectre') . ' <i class="fas fa-arrow-right"></i>'); ?></p>
                    <hr>
                    <p class="text-muted"><?php echo post_date('l, j F Y'); ?></p>
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="row no-gutters flex-column-reverse flex-md-row">
            <div class="col-md-9">
                <div class="card-body">
                    <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                    <p><?php echo the_excerpt(__('Baca Lagi', 'spectre') . ' <i class="fas fa-arrow-right"></i>'); ?></p>
                    <hr>
                    <p class="text-muted"><?php echo post_date('l, j F Y'); ?></p>
                </div>
            </div>
            <div class="col-md-3 right-image" style="background: url(<?php echo (has_post_thumbnail() ? spectre_featured_img() : get_template_directory_uri() . '/assets/images/no-image.jpg'); ?>) no-repeat center center;background-size:cover;">&nbsp;</div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endwhile; ?>

<?php spectre_pagination(); ?>
