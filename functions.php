<?php

/*
 * Set some theme constants
 */

define('HOME_URI', home_url());
define('THEME_URI', get_stylesheet_directory_uri());
define('THEME_IMAGES', THEME_URI . '/images');
define('THEME_CSS', THEME_URI . '/css');
define('THEME_JS', THEME_URI . '/js');

function ks_load_scripts() {	
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'ks_load_scripts');

function wp_better_blog_title($post) {
	/**
	 *  Sets the page title based on content type
	 */

	$post_id = $wp_query->post->ID; // Get the post ID outside of any loop

	$blog_title = get_bloginfo('name');
	$title = '';

	if (is_tag($post_id)) {
		$title = ' | Tag: ' . single_tag_title($post_id, false);
	} elseif (is_category($post_id)) {
		$title = ' | Category: ' . single_cat_title($post_id, false);
	} elseif (is_archive($post_id)) {
		$title = ' | Archive';
	} elseif (is_404($post_id)) {
		$title = ' | Not Found';
	} elseif (is_home($post_id)) {
		$title = ' | ' . get_bloginfo('description');
	} elseif (is_single($post_id) || is_page($post_id)) {
		$title = ' | ' . get_the_title($post_id);
	}

	return $blog_title . $title;
}