<?php 

function greengardener_hero_metaboxes() {

	$prefix = 'page_';
	$section = 'hero_';

  $cmb = new_cmb2_box(array(
    'id' 							=> $prefix . $section . 'metaboxes',
    'title' 					=> __('Hero', 'greenergardener'),
    'object_types' 		=> array('page'),
    'context' 				=> 'normal',
    'priority' 				=> 'low',
    'show_names' 			=> true,
    'closed' 					=> true
  ));

    $cmb->add_field(array(
      'name' 					=> __('Title', 'greenergardener'),
      'desc'          => __('Overrides the page title if filled.', 'greenergardener'),
      'id' 						=> $prefix . $section . 'title',
      'type' 					=> 'text'
    ));

    $cmb->add_field(array(
      'name' 					=> __('Subtitle', 'greenergardener'),
      'desc'          => __('An optional subtitle that appears under the main title.', 'greenergardener'),
      'id' 						=> $prefix . $section . 'subtitle',
      'type' 					=> 'text'
    ));

    $cmb->add_field(array(
      'name' 					=> __('Background Image', 'greenergardener'),
      'desc'          => __('Adds a background image to your hero.', 'greenergardener'),
      'id' 						=> $prefix . $section . 'background',
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
add_action( 'cmb2_admin_init', 'greengardener_hero_metaboxes' );