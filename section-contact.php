<section id="contact" class="col-12">
	<div class="row">
		<div class="col-12 mb-4 order-1">
			<<?php echo (!empty(get_post_meta(get_the_ID(), 'page_contact_header_size', true)) ? get_post_meta(get_the_ID(), 'page_contact_header_size', true) : 'h1'); ?> class="mb-4">
				<?php echo (!empty(get_post_meta(get_the_ID(), 'page_contact_header', true)) ? get_post_meta(get_the_ID(), 'page_contact_header', true) : 'For a friendly chat'); ?>
			</<?php echo (!empty(get_post_meta(get_the_ID(), 'page_contact_header_size', true)) ? get_post_meta(get_the_ID(), 'page_contact_header_size', true) : 'h1'); ?>>
			<hr>
		</div>
		<div class="col-12 <?php echo (get_post_meta(get_the_ID(), 'page_contact_form_first', true) === 'on' ? 'order-3' : 'order-2'); ?>">
			<div class="row">
				<div class="col-12 col-lg-6 mb-4">
					<a href="tel:<?php echo gardening_get_option('contact_phone'); ?>" aria-label="Call me at <?php echo gardening_get_option('contact_phone'); ?>" class="contact-item">
						<i class="fas fa-2x fa-phone mb-4"></i>
						<span><?php echo gardening_get_option('contact_phone'); ?></span>
					</a>
				</div>
				<div class="col-12 col-lg-6 mb-4">
					<a href="mailto:<?php echo gardening_get_option('contact_email'); ?>" aria-label="E-mail me at <?php echo gardening_get_option('contact_email'); ?>" class="contact-item">
						<i class="fas fa-2x fa-envelope mb-4"></i>
						<span><?php echo gardening_get_option('contact_email'); ?></span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-12 mb-4 <?php echo (get_post_meta(get_the_ID(), 'page_contact_form_first', true) === 'on' ? 'order-2' : 'order-3'); ?>">
			<i class="fas fa-2x fa-comment mb-2 mt-md-5"></i>
			<?php echo do_shortcode('[wpforms id="' . gardening_get_option('contact_form_id') . '" title="false" description="false"]'); ?>
		</div>
	</div>
</section>