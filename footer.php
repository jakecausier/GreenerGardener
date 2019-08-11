		</div>

		<footer id="page-footer">
			<div class="container d-relative">
				<nav id="footer-navigation" class="navbar navbar-dark mt-4">
					<div id="footer-social-icons">
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
		      <div id="page-sub-footer">
			    	<span id="copyright">&copy; <?php echo esc_html( date_i18n( __( 'Y', 'greenergardener' ) ) ); ?> <?php echo esc_html(get_bloginfo('name')); ?></span>
			    	<span id="creator">Site built by Jake Causier</span>
			    </div>
				</nav>

				<img src="<?php echo esc_url(wp_get_attachment_image_src(gardening_get_option('footer_logo_id'), 'large' )[0]) ?>" class="footer-logo" alt="<?php echo esc_html(get_bloginfo('name')) ?>">
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
</body>
</html>