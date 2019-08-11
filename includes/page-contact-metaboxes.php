<?php 

function greengardener_contact_metaboxes() {

	$prefix = 'page_';
	$section = 'contact_';

  $cmb = new_cmb2_box(array(
    'id' 							=> $prefix . $section . 'metaboxes',
    'title' 					=> __('Contact', 'greenergardener'),
    'object_types' 		=> array('page'),
    'context' 				=> 'normal',
    'priority' 				=> 'low',
    'show_names' 			=> true,
    'closed' 					=> true
  ));

    $cmb->add_field(array(
      'name' 					=> __('Show Contact Section?', 'greenergardener'),
      'desc'          => __('Shows the contact section on this page.', 'greenergardener'),
      'id' 						=> $prefix . $section . 'show',
      'type' 					=> 'checkbox'
    ));

    $cmb->add_field(array(
      'name'          => __('Header', 'greenergardener'),
      'desc'          => __('Defaults to "For a friendly chat".', 'greenergardener'),
      'id'            => $prefix . $section . 'header',
      'type'          => 'text'
    ));

    $cmb->add_field(array(
      'name' 					=> __('Header Size', 'greenergardener'),
      'desc'          => __('Choose the size of the section header.', 'greenergardener'),
      'id' 						=> $prefix . $section . 'header_size',
      'type'          => 'select',
      'show_option_none'  => false,
      'default'           => 'h1',
      'options'           => array(
        'h1'              => __( 'H1 - Large', 'greenergardener'),
        'h2'              => __( 'H2 - Small', 'greenergardener'),
      ),
    ));

    $cmb->add_field(array(
      'name'          => __('Show contact form first?', 'greenergardener'),
      'desc'          => __('If unchecked, the phone number and e-mail address will display first.', 'greenergardener'),
      'id'            => $prefix . $section . 'form_first',
      'type'          => 'checkbox'
    ));

}
add_action( 'cmb2_admin_init', 'greengardener_contact_metaboxes' );