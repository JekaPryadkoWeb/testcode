<?php

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
	register_nav_menu('main_menu', 'Главное меню');
	register_nav_menu('service_menu', 'Меню услуг');
	register_nav_menu('footer_menu_first', 'Футер меню первое');
	register_nav_menu('footer_menu_second', 'Футер меню второе');
}

/**
 * Register post type
 */
if (class_exists('CustomPostType')) {
	new CustomPostType('Статья', 'article', 'dashicons-admin-post', true);
	new CustomPostType('Услуга', 'services', 'dashicons-cart');
	new CustomPostType('Кейс', 'case', 'dashicons-portfolio');
}

/**
 * Registration taxonomy
 */
if (class_exists('CustomTaxonomy')) {
	new CustomTaxonomy('article', 'Категория', 'cat_article', 'blog');
	new CustomTaxonomy('services', 'Тип услуги', 'cat_services', 'services');
	new CustomTaxonomy('case', 'Тип кейса', 'cat_cases', 'cases');
};
