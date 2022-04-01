<?php

// adding the CSS and JS files


function my_filter_head() {

    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');


function load_stylesheets() {
	
	wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
	wp_enqueue_style('style');
	
	wp_register_style('fonts', get_template_directory_uri().'/assets/css/fonts.css', array(), false, 'all');
	wp_enqueue_style('fonts');

	wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), false, 'all');
	wp_enqueue_style('responsive');

		
	wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.7.2/css/all.css' );
		
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs() {
	
	wp_register_script('main', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), true);
	wp_enqueue_script('main');
	

}
add_action('wp_enqueue_scripts', 'loadjs');



function xbox_init() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('menus');
	add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'xbox_init');


//Xbox Post types

//Products Post type
function products() {
	register_post_type('Products',
	  array(
	    'rewrite' => array('slug' => 'products'),
		'labels' => array(
		  'name' => 'Products',
		  'singular_name' => 'product',
		  'add_new_item' => 'Add Product',
		  'edit_item' => 'Edit Product'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_archive' => true,
		'supports' => array(
		  'title', 'thumbnail', 'editor', 'excerpt', 'revisions'
		)
	  ));
	
}
add_action('init', 'products');










