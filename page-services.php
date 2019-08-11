<?php get_header(); ?>
	<main class="row">
		<?php get_template_part('section', 'hero') ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(['col-12']); ?>>
			<?php
				$args = array(
					'post_type' => ['services'],
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'order' => 'ASC'
				);
				$services = get_posts($args);
			?>
			<div class="row">
				<div class="col-12 col-lg-6 offset-lg-3">
					<ul class="services-list row">
						<?php
							if(!empty($services)) {
								foreach ($services as $key => $service) {
									echo '<li class="col-md-6 col-12"><span>' . $service->post_title .'</span></li>';
								}
							}
						?>
					</ul>
				</div>
			</div>
		</article>
		<?php
			if (get_post_meta(get_the_ID(), 'page_contact_show')) {
				get_template_part('section', 'contact');
			}
		?>
	</main>
<?php get_footer(); ?>