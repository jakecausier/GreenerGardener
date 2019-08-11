<?php get_header(); ?>
	<main class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('section', 'hero') ?>
			<div class="col-12 <?php echo (is_active_sidebar('blog_sidebar') ? 'col-md-9' : ''); ?>">
				<div class="row">
					<?php get_template_part('entry') ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>