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

function ks_add_theme_support() {
	add_theme_support('automatic_feed_links');
	add_theme_support('post-thumbnails');
}
add_action('init', 'ks_add_theme_support');

function ks_nav_menus() {
	register_nav_menus(
		array(
			'main_menu'	=> 'Main Site Menu'
		)
	);
}
add_action('init', 'ks_nav_menus');

function ks_blog_title() {
	/*
	 * Creates an SEO-Friendly Title Tag
	 */

    wp_title(' | ', true, last); 

    $tagline = get_bloginfo('description');

    if ($tagline && (is_home($post_id) || is_front_page($post_id))) {
        echo ' | ' . $tagline;
    }

    if ($paged >= 2 || $page >= 2) {
        echo ' | ' . sprintf(__('Page %s', 'kitchen_sink'), max($paged, $page));
    }
}
add_action('init', 'ks_blog_title');

function ks_post_meta() {
	/*
	 * Outputs post meta in an unordered list for flexible styling
	 */

	global $post;
	$tags_exist = get_the_tags();

	$output = '<ul class="post-meta clearfix">';
	$output .= '<li><a href="' . get_author_posts_url($post->post_author) . '">' . get_the_author() . '</a></li>';
	$output .= '<li>' . get_the_time('F jS, Y') . '</li>';
	$output .= '<li>' . get_the_category_list(', ', '') . '</li>';

	if ($tags_exist) {
		$output .= '<li>' . get_the_tag_list('Tags: ', ', ', '') . '</li>';
	}

	$output .= '</ul>';

	echo $output;
}