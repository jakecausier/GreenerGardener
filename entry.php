<?php $multi_layout = (is_single() ? 'col-12' : 'col-12 col-lg-6'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class([$multi_layout, 'mb-5']); ?>>
	<header>
		<?php if (!is_singular()) { ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
		<?php } ?>
		<?php if (!is_search() && !is_single()) { get_template_part('entry', 'meta'); } ?>
	</header>
	<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>