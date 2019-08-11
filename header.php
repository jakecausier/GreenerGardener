<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="navigation">

			<?php if (gardening_get_option('header_show_bar') == 'on') { ?>
				<nav id="top-navigation" class="navbar navbar-dark bg-dark">
					<div class="container">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="mailto:<?php echo gardening_get_option('contact_email'); ?>" title="E-mail me at <?php echo gardening_get_option('contact_email') ?>" alt="E-mail me at <?php echo gardening_get_option('contact_email') ?>" class="nav-link"><i class="fas fa-fw fa-envelope"></i> <?php echo gardening_get_option('contact_email'); ?></a>
							</li>
							<li class="nav-item">
								<a href="tel:<?php echo gardening_get_option('contact_phone'); ?>" title="Phone me at <?php echo gardening_get_option('contact_phone') ?>" alt="Phone me at <?php echo gardening_get_option('contact_phone') ?>" class="nav-link"><i class="fas fa-fw fa-phone"></i> <?php echo gardening_get_option('contact_phone'); ?></a>
							</li>
					</div>
				</nav>
			<?php } ?>

			<nav id="primary-navigation" class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container">
				  <a class="navbar-brand" href="<?php echo get_permalink(get_option('page_on_front')) ?>" aria-label="Homepage">
				    <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'large' )[0]) ?>" class="site-logo" alt="Logo">
				  </a>

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-navigation-dropdown" aria-controls="primary-navigation-dropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="primary-navigation-dropdown">
				  	<div class="nav-container ml-auto">
				  		<div id="header-social-icons">
								<?php if (!empty(gardening_get_option('contact_facebook'))) { ?>
									<a href="<?php echo gardening_get_option('contact_facebook'); ?>" target="_blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook fa-2x"></i></a>
								<?php } ?>
								<?php if (!empty(gardening_get_option('contact_instagram'))) { ?>
									<a href="<?php echo gardening_get_option('contact_instagram'); ?>" target="_blank" title="Instagram" alt="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
								<?php } ?>
							</div>
					  	<?php
				        wp_nav_menu([
				          'menu'            => 'primary-nav',
				          'theme_location'  => 'primary-nav',
				          'container'       => 'ul',
				          'container_id'    => false,
				          'container_class' => '',
				          'menu_id'         => false,
				          'menu_class'      => 'navbar-nav',
				          'depth'           => 4,
				          'fallback_cb'     => 'bs4navwalker::fallback',
				          'walker'          => new bs4navwalker()
				        ]);
				      ?>
				    </div>
				  </div>
				</div>
			</nav>

		</header>

		<div id="page-content" class="container">