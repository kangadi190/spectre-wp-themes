<?php if(get_theme_mod('footer_column') == 1) {
    get_template_part('parts/footer/footer', 'company');
} elseif(get_theme_mod('footer_column') == 2) {
    get_template_part('parts/footer/footer', 'blog-col-3');
} else {
    get_template_part('parts/footer/footer', 'default');
} ?>

<?php wp_footer(); ?>
</body>
</html>