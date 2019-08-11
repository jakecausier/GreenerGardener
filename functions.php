<?php

require_once(get_template_directory() . '/includes/cmb2/init.php');
require_once(get_template_directory() . '/includes/cmb2/plugins/cmb2-field-post-search-ajax.php');

require_once(get_template_directory() . '/includes/services-post-type.php');
require_once(get_template_directory() . '/includes/page-hero-metaboxes.php');
require_once(get_template_directory() . '/includes/site-options-metaboxes.php');
require_once(get_template_directory() . '/includes/front-page-metaboxes.php');
require_once(get_template_directory() . '/includes/page-contact-metaboxes.php');

require_once(get_template_directory() . '/includes/bs4navwalker.php');


function gardening_initial_setup()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('audio'));
    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    global $content_width;

    // Set content width if not already set
    if (! isset($content_width)) {
        $content_width = 640;
    }

    // Register the navigation menus
    register_nav_menus(
      array(
        'primary-nav' => 'Primary Navigation',
        'footer' => 'Footer Navigation',
      )
    );
}
add_action('after_setup_theme', 'gardening_initial_setup');


function gardening_widget_setup()
{
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'gardening_widget_setup' );


function gardening_load_scripts()
{
    wp_register_script('site', get_template_directory_uri() . '/build/js/site.js', null, bin2hex(random_bytes(5)));
    wp_localize_script('site', 'formVariables', array('adminAjaxUrl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('site');
}
add_action('wp_enqueue_scripts', 'gardening_load_scripts');


function gardening_load_styles()
{
    wp_register_style('site', get_template_directory_uri() . '/build/css/site.css', null, bin2hex(random_bytes(5)));
    wp_enqueue_style('site');
}
add_action('wp_enqueue_scripts', 'gardening_load_styles');


function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
  if (!isset($post_id)) return;

  if ($post_id == get_option('page_on_front')) {
    remove_post_type_support('page', 'editor');
  }
}
// add_action('admin_init', 'hide_editor');