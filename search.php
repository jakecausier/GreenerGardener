<?php get_header(); ?>
	<main class="row">
		<section id="blog" class="col-12 <?php echo (is_active_sidebar('blog_sidebar') ? 'col-md-9' : ''); ?>">
			<div class="row">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'entry' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<article id="post-0" class="post no-results not-found">
						<header class="header">
							<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'greenergardener' ); ?></h1>
						</header>
						<div class="entry-content">
							<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'greenergardener' ); ?></p>
						</div>
					</article>
				<?php endif; ?>
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