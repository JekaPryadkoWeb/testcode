<?php

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_save_point($path)
{
	// update path
	$path = get_stylesheet_directory() . '/acf-json';
	// return
	return $path;
}

function my_acf_json_load_point($paths)
{
	// remove original path (optional)
	unset($paths[0]);
	// append path
	$paths[] = get_stylesheet_directory() . '/acf-json';
	// return
	return $paths;
}

// ===============

if (function_exists('acf_add_options_page')) {
	$all_lang = get_all_lang();

	acf_add_options_page(array(
		'page_title'    => 'Настройки темы',
		'menu_title'    => 'Настройки темы',
		'menu_slug'     => 'theme-settings',
		'capability'    => 'edit_posts',
		'redirect'      => true,
		'post_id'       => 'option'
	));

	foreach ($all_lang as $name => $slug) {
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Настройки темы (' . $name . ')',
			'menu_title' 	=> $name,
			'parent_slug'	=> 'theme-settings',
			'menu_slug'     => 'theme-settings-' . $slug,
			'capability'    => 'edit_posts',
			'redirect'      => false,
			'post_id'       => 'option_' . $slug
		));
	}
}

// ==========

function get_theme_option($name, $lang)
{
	// $option_def = get_field($name, 'option');
	// $option_lang = get_field($name, 'option_' . $lang);
	// if (!$option_lang) {
	// return $option_def;
	// }
	return get_field($name, 'option_' . $lang);;
}
