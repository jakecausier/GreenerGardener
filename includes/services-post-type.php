<?php

	function gardening_define_services_post_type()
	{
		register_post_type(
	      'services',
	      array(
	        'labels' => array(
	            'name' => __('Services', 'greenergardening'),
	            'singular_name' => __('Service', 'greenergardening'),
	            'add_new' => __('Add Service', 'greenergardening'),
	            'add_new_item' => __('Add New Service', 'greenergardening'),
	            'edit_item' => __('Edit Service', 'greenergardening'),
	            'new_item' => __('New Service', 'greenergardening'),
	            'view_item' => __('View Service', 'greenergardening'),
	            'view_items' => __('View Services', 'greenergardening'),
	            'search_items' => __('Search Services', 'greenergardening'),
	            'not_found' => __('No Services Found', 'greenergardening'),
	            'not_found_in_trash' => __('No Services Found', 'greenergardening'),
	            'parent_item_colon' => __('Parent Services', 'greenergardening'),
	            'all_items' => __('List Services', 'greenergardening'),
	            'archives' => __('Services Archive', 'greenergardening'),
	            'attributes' => __('Service Attributes', 'greenergardening'),
	            'insert_into_item' => __('Insert into Service', 'greenergardening'),
	            'uploaded_to_this_item' => __('Uploaded to Service', 'greenergardening'),
	            'featured_image' => __('Service thumbnail', 'greenergardening'),
	            'set_featured_image' => __('Set Service thumbnail', 'greenergardening'),
	            'remove_featured_image' => __('Remove Service thumbnail', 'greenergardening'),
	            'use_featured_image' => __('Use as Service thumbnail', 'greenergardening'),
	            'menu_name' => __('Services', 'greenergardening'),
	            'filter_items_list' => __('Services', 'greenergardening'),
	            'items_list_navigation' => __('Services', 'greenergardening'),
	            'items_list' => __('Services', 'greenergardening'),
	            'name_admin_bar' => __('Service', 'greenergardening'),
	        ),
	        'supports' => array(
	            'title',
	            'editor',
	        ),
	        'public' => true,
	        'has_archive' => false,
	        'hierarchical' => false,
	        'publicly_queryable' => false,
	        'menu_icon' => 'dashicons-businessman',
	      )
	  );
	}
	add_action('init', 'gardening_define_services_post_type');