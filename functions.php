<?php

/* Including Navwalker */
require_once('wp_bootstrap_navwalker.php');

/* Stylesheets and javascripts */
function My_WordPress_Theme_style_script()
{
	wp_enqueue_style('style', get_stylesheet_uri()); 
}
add_action('wp_enqueue_scripts', 'My_WordPress_Theme_style_script');

/* Theme support */
function My_WordPress_Theme_theme_support()
{
	//Logo
	add_theme_support('custom-logo');

	//Title tag
	add_theme_support( "title-tag" ); 

	//custom header
	add_theme_support('custom-header');

	//custom background
	add_theme_support('custom-background');

	//editor support
	add_editor_style( 'style.css' );

	//automatic feed link
	add_theme_support( 'automatic-feed-links' );

	//Featured Image
	add_theme_support('post-thumbnails');

	//Navigation Menu
	register_nav_menus(array(
			'top'              => __('Top Menu', 'My_WordPress_Theme'),
			'primary'          => __('Primary Menu', 'My_WordPress_Theme')
		));
}
add_action('after_setup_theme', 'My_WordPress_Theme_theme_support');

/* Theme locations */
function My_WordPress_Theme_locations()
{
	register_sidebar(array(
			'name'            => 'Sidebar Area',
			'id'              => 'sidebar',
			'before_widget'   => '<div class="sidebar">',
			'after_widget'    => '</div>',
			'before_title'    => '<h3>',
			'after_title'     => '</h3>',
		));

	register_sidebar(array(
			'name'            => 'Footer Area 1',
			'id'              => 'footer1',
			'before_widget'   => '<div class="footer-widget">',
			'after_widget'    => '</div>',
			'before_title'    => '<h3>',
			'after_title'     => '</h3>',
		));

	register_sidebar(array(
			'name'            => 'Footer Area 2',
			'id'              => 'footer2',
			'before_widget'   => '<div class="footer-widget">',
			'after_widget'    => '</div>',
			'before_title'    => '<h3>',
			'after_title'     => '</h3>',
		));

	register_sidebar(array(
			'name'            => 'Footer Area 3',
			'id'              => 'footer3',
			'before_widget'   => '<div class="footer-widget">',
			'after_widget'    => '</div>',
			'before_title'    => '<h3>',
			'after_title'     => '</h3>',
		));

	register_sidebar(array(
			'name'            => 'Footer Area 4',
			'id'              => 'footer4',
			'before_widget'   => '<div class="footer-widget">',
			'after_widget'    => '</div>',
			'before_title'    => '<h3>',
			'after_title'     => '</h3>',
		));
}
add_action('widgets_init', 'My_WordPress_Theme_locations');

/* Theme Customizer */
require get_template_directory().'/inc/customizer.php';

/* Excerpt More Link */
function My_WordPress_Theme_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'My_WordPress_Theme_excerpt_more');

/* Excerpt Length */
function My_WordPress_Theme_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'My_WordPress_Theme_excerpt_length');

/* Content width */
if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

/* enable threaded comments */
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');
