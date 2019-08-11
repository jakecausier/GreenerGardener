<?php $background = wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'page_hero_background_id', true), 'large')[0] ?? wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0] ?? null; ?>
<section id="hero" class="col-12 <?php echo (!empty($background) ? 'bg-image' : ''); ?>">
	<div class="content">
		<div>
			<h1><?php echo (get_post_meta(get_the_ID(), 'page_hero_title', true) ? get_post_meta(get_the_ID(), 'page_hero_title', true) : the_title()); ?></h1>
			<hr class="<?php echo (!empty($background) ? 'inverse' : ''); ?>">
			<?php if (!empty(get_post_meta(get_the_ID(), 'page_hero_subtitle', true))) { ?>
				<h2><?php echo get_post_meta(get_the_ID(), 'page_hero_subtitle', true); ?></h2>
			<?php } else if(is_single()) { ?>
				<h2><?php get_template_part('entry', 'meta') ?></h2>
			<?php } ?>
		</div>
	</div>
	<img class="background" src="<?php echo esc_url($background); ?>" alt="">
</section>