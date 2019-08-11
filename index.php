<?php get_header(); ?>
	<main class="row">
		<section id="blog" class="col-12 <?php echo (is_active_sidebar('blog_sidebar') ? 'col-lg-9' : ''); ?>">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('entry') ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-12">
				<nav id="pagination" aria-label="Page Navigation">
					<?php echo paginate_links(array('prev_text' => "<i class='fas fa-chevron-left fa-fw'></i>", 'next_text' => "<i class='fas fa-chevron-right fa-fw'></i>", 'type' => 'list')); ?>
				</nav>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>