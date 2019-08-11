<?php

function greengardener_admin_options_page_metaboxes() {

	$admin_options = new_cmb2_box( array(
		'id'           	=> 'greenergardener_site_options_page',
		'title'        	=> __('Site Options', 'greenergardener'),
		'object_types' 	=> array('options-page'),
		'option_key'  	=> 'greenergardener_site_options_page',
		'icon_url'      => 'dashicons-palmtree', 
		'capability'    => 'manage_options',
		'position'      => 2
	));

		$admin_options->add_field(array(
	    'name' 					=> __('Header', 'greenergardener'),
	    'desc'					=> __('Information to go in the footer..', 'greenergardener'),
	    'id' 						=> 'header_title',
	    'type' 					=> 'title',
	  ));

	  	$admin_options->add_field(array(
		    'name' 					=> __('Show top contact bar?', 'greenergardener'),
		    'id' 						=> 'header_show_bar',
		    'type' 					=> 'checkbox',
		  ));


		$admin_options->add_field(array(
	    'name' 					=> __('Contact Information', 'greenergardener'),
	    'desc'					=> __('Put your contact details here to be used on the site.', 'greenergardener'),
	    'id' 						=> 'contact_title',
	    'type' 					=> 'title',
	  ));

		  $admin_options->add_field(array(
		    'name' 					=> __('E-mail Address', 'greenergardener'),
		    'id' 						=> 'contact_email',
		    'type' 					=> 'text',
		    'attributes'		=> [
		    	'type'					=> 'email'
		    ],
		  ));

		  $admin_options->add_field(array(
		    'name' 					=> __('Phone Number', 'greenergardener'),
		    'id' 						=> 'contact_phone',
		    'type' 					=> 'text',
		    'attributes'		=> [
		    	'type'					=> 'tel'
		    ],
		  ));

		  $admin_options->add_field(array(
		    'name' 					=> __('Facebook Page', 'greenergardener'),
		    'id' 						=> 'contact_facebook',
		    'type' 					=> 'text',
		    'attributes'		=> [
		    	'type'					=> 'url'
		    ],
		  ));

		  $admin_options->add_field(array(
		    'name' 					=> __('Instagram Page', 'greenergardener'),
		    'id' 						=> 'contact_instagram',
		    'type' 					=> 'text',
		    'attributes'		=> [
		    	'type'					=> 'url'
		    ],
		  ));

		  $admin_options->add_field(array(
		    'name' 					=> __('WPForms Contact Form', 'greenergardener'),
		    'id' 						=> 'contact_form_id',
		    'type'      	=> 'post_search_ajax',
				'limit'      	=> 1,
				'sortable' 	 	=> false,
				'query_args'	=> array(
					'post_type'			=> array('wpforms'),
					'post_status'		=> array('publish'),
					'posts_per_page'	=> -1
				)
		  ));


		$admin_options->add_field(array(
	    'name' 					=> __('Footer', 'greenergardener'),
	    'desc'					=> __('Information to go in the footer.', 'greenergardener'),
	    'id' 						=> 'footer_title',
	    'type' 					=> 'title',
	  ));

	  	$admin_options->add_field(array(
		    'name' 				=> __('Link to Privacy Policy', 'greenergardener'),
		    'id' 					=> 'footer_privacy',
		    'type'      	=> 'post_search_ajax',
				'limit'      	=> 1,
				'sortable' 	 	=> false,
				'query_args'	=> array(
					'post_type'			=> array('page'),
					'post_status'		=> array('publish'),
					'posts_per_page'	=> -1
				)
		  ));

		  $admin_options->add_field(array(
	      'name' 					=> __('Footer Logo', 'greenergardener'),
	      'desc'          => __('Adds a logo to the bottom left of the footer.', 'greenergardener'),
	      'id' 						=> 'footer_logo',
	      'type' 					=> 'file',
	      'options' 			=> array(
					'url' 					=> false,
				),
				'query_args' 		=> array(
					'type' 					=> array(
						'image/gif',
						'image/jpeg',
						'image/png',
					),
				),
				'preview_size' 	=> 'medium',
	    ));

}
add_action( 'cmb2_admin_init', 'greengardener_admin_options_page_metaboxes' );



/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function gardening_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'greenergardener_site_options_page', $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'greenergardener_site_options_page', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}