<?php 

function greengardener_front_page_metaboxes() {

	$prefix = 'page_';

	$section = 'goals_';
  $cmb = new_cmb2_box(array(
    'id' 							=> $prefix . $section . 'metaboxes',
    'title' 					=> __('Goals', 'greenergardener'),
    'object_types' 		=> array('page'),
		'show_on' 				=> array('id' => get_option('page_on_front')),
    'context' 				=> 'normal',
    'priority' 				=> 'low',
    'show_names' 			=> true,
    'closed' 					=> true
  ));

    $group_field_id = $cmb->add_field( array(
      'id'            => $prefix . $section . 'group',
      'type'          => 'group',
      'desc'          => __('Add or remove goals to the home page.', 'greenergardener'),
      'options'       => array(
        'group_title'   => __('Goal {#}', 'greenergardener'),
        'add_button'    => __('Add Another Goal', 'greenergardener'),
        'remove_button' => __('Remove Goal', 'greenergardener'),
        'sortable'      => true,
        'closed'        => true
      ),
    ));

      $cmb->add_group_field($group_field_id, array(
        'name' 					=> __('Font Awesome Icon', 'greenergardener'),
        'desc'          => __('Provide an icon tag here, without the fa- prefix.', 'greenergardener'),
        'id' 						=> 'icon',
        'type' 					=> 'text'
      ));

      $cmb->add_group_field($group_field_id, array(
        'name' 					=> __('Content', 'greenergardener'),
        'id' 						=> 'content',
        'type' 					=> 'textarea'
      ));

}
add_action( 'cmb2_admin_init', 'greengardener_front_page_metaboxes' );