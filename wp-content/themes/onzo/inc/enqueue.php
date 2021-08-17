<?php

add_action('wp_enqueue_scripts', 'style_site');
add_action('wp_footer', 'scripts_site');

function style_site()
{
	// wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/style.min.css');
}

// =================================

function scripts_site()
{
	wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.min.js');
}

// ==================
function add_async_attribute($tag, $handle)
{
	if ('main_js' !== $handle) {
		return $tag;
	}

	return str_replace(' src', ' async="async" src', $tag);
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
