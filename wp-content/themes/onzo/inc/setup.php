<?php

/**
 * Hide admin bar when user is logged in
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Remove noindex,nofollow  from 404
 */
function rw_remove_robots()
{
	if (is_404()) {
		return "noindex, nofollow";
	}
}
add_filter("wpseo_robots", 'rw_remove_robots');

// Remove Wordpress version
remove_action('wp_head', 'wp_generator');

// Remove Feed links
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// remove emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');

//remove the rest_output_link_header
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'wp_oembed_add_discovery_links');

// remove link for user editing
remove_action('wp_head', 'wlwmanifest_link');

//remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');

// remove dashicons
function rw_dequeue_dashicon()
{
	if (is_user_logged_in()) {
		return;
	} else {
		wp_deregister_style('dashicons');
	}
}
add_action('wp_enqueue_scripts', 'rw_dequeue_dashicon');

// Disabble RSS
function wpb_disable_feed()
{
	wp_die(__('No feed available, please visit our <a href="' . get_bloginfo('url') . '">homepage</a>!'));
}

add_action('do_feed_rss2_comments', 'wpb_disable_feed', 10, 2);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 10, 2);
remove_action('wp_head', 'wp_resource_hints', 2);

// Disallow feed
function rostwirt_disable_feed()
{
	wp_redirect(get_option('siteurl'));
}

add_action('do_feed', 'rostwirt_disable_feed', 1);
add_action('do_feed_rdf', 'rostwirt_disable_feed', 1);
add_action('do_feed_rss', 'rostwirt_disable_feed', 1);
add_action('do_feed_rss2', 'rostwirt_disable_feed', 1);
add_action('do_feed_atom', 'rostwirt_disable_feed', 1);

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// remove link for editing using outer services
remove_action('wp_head', 'rsd_link');

// Deregister embed
function rw_deregister_embed()
{
	wp_deregister_script('wp-embed');
	wp_deregister_script('jquery');
}
add_action('wp_footer', 'rw_deregister_embed');

function custom_dequeue()
{
	wp_dequeue_style('dashicons');
	wp_dequeue_style('thickbox');
	wp_dequeue_style( 'wp-block-library' );
}
add_action('wp_enqueue_scripts', 'custom_dequeue', 9999);
add_action('wp_head', 'custom_dequeue', 9999);


add_action('init', 'action_function_name_11', 99);
function action_function_name_11()
{

	global $wp_taxonomies;

	$taxonomy = 'post_tag';

	$taxonomy_object = get_taxonomy($taxonomy);

	$taxonomy_object->remove_rewrite_rules();
	$taxonomy_object->remove_hooks();

	// Remove the taxonomy.
	unset($wp_taxonomies[$taxonomy]);
}

function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Записи
  remove_menu_page( 'edit-comments.php' );          //Комментарии
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Hide editor
 */
add_action('admin_init', 'hide_editor');

function hide_editor()
{
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post'];
	if (!isset($post_id)) return;

	$post_type = get_post_type($post_id);
		if ($post_type == 'page') {
			remove_post_type_support('page', 'editor');
	}
}
