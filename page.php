<?php get_header(); ?>
	<main class="row">
		<?php get_template_part('section', 'hero') ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(['col-12']); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		<?php
			if (get_post_meta(get_the_ID(), 'page_contact_show')) {
				get_template_part('section', 'contact');
			}
		?>
	</main>
<?php get_footer(); ?>