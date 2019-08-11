<?php get_header(); ?>
	<main class="row">

		<?php get_template_part('section', 'hero') ?>

		<?php if (!empty(get_post_meta(get_the_ID(), 'page_goals_group', true))) { ?>
			<section id="goals" class="col-12">
				<div class="row">
					<?php foreach (get_post_meta(get_the_ID(), 'page_goals_group', true) as $key => $goal) { ?>
						<div class="col-12 col-md-6 mb-4">
							<div class="goal-item">
								<?php if (!empty($goal['icon'])) { ?>
									<i class="fas fa-4x fa-<?php echo $goal['icon'] ?> mb-4"></i>
								<?php } ?>
								<?php echo wpautop($goal['content']) ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
		<?php } ?>

		<section id="services" class="col-12">
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
				<div class="col-12 col-md-8 offset-md-2">
					<h3 class="mb-4">SERVICES OFFERED</h3>

					<ul class="services-list">
						<?php
							if(!empty($services)) {
								foreach ($services as $key => $service) {
									echo '<li>' . $service->post_title .'</li>';
								}
							}
						?>
					</ul>
				</div>
			</div>
		</section>

		<?php if (have_posts()) : ?>
			<section id="content" class="col-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</section>
		<?php endif; ?>

		<?php
			if (get_post_meta(get_the_ID(), 'page_contact_show')) {
				get_template_part('section', 'contact');
			}
		?>

	</main>
<?php get_footer(); ?>