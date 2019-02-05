<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="charset" content="utf-8"/>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Lanjut ke konten', 'spectre' ); ?></a>

	<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top shadow">
		<div class="container" >

			<?php if(get_theme_mod('image_options') == 2) : ?>
			<a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo get_theme_mod('url_custom'); ?>" height="30px"/></a>
			<?php elseif(get_theme_mod('image_options') == 1): 

			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) { ?>
			<a href="<?php echo home_url(); ?>" class="navbar-brand"><img src="<?php echo $logo[0]; ?>" height="30px"/></a>	
			<?php } ?>
			<?php else : ?>			
			<a href="<?php echo home_url(); ?>" class="navbar-brand"><?php echo bloginfo('name'); ?></a>
			<?php endif; ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'spectre' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Menu wordpress akan tampil di sini -->
			<?php if(has_nav_menu('primary')) : wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Spectre_Nav_Walker(),
				)
			); else : ?>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span> </a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Services</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
					<li class="nav-item btn-group" role="group" aria-label="Basic example"> 
						<a href="button" class="btn btn-outline-secondary">Masuk Akun</a> 
						<a href="button" class="btn btn-outline-secondary">Daftar</a>
					</li>
				</ul>
			</div>
			<?php endif; ?>
		</div><!-- .container -->

	</nav><!-- .site-navigation -->

	<header class="jumbotron mt-5">
		<div class="main-title container pb-3">
			<h3><?php echo get_bloginfo('name'); ?></h3>
			<p><?php echo get_bloginfo('description'); ?></p>
		</div>
	</header>