<aside id="sidebar" class="col-12 col-lg-3">
	<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
		<div id="primary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'blog_sidebar' ); ?>
			</ul>
		</div>
	<?php endif; ?>
</aside>