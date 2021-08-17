<?php

function my_dump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	die;
}

// =====================
// получить все языки

function get_all_lang()
{
	$lang_name = pll_languages_list(array('fields' => 'name'));
	$lang_slug = pll_languages_list(array('fields' => 'slug'));

	$all_lang = array_combine($lang_name, $lang_slug);
	return $all_lang;
}
// =====================
// получить посты из данной категории

function get_article_similar_cat($id)
{
	$cats = get_the_category($id);
	$all_ids = array();
	foreach ($cats as $cat_id) {
		$all_ids[] = $cat_id->term_id;
	}
		$args = array(
		'post_type'   => 'article',
		'numberposts' => 3,
		'post_status' => 'publish',
		'category'         => $all_ids,
		'exclude'          => [$id],
		'orderby'         => 'date',
		'order'           => 'DESC',
	);
	$posts_in = [];
	$posts_in = array_column(wp_get_recent_posts($args), 'ID');

	if (count($posts_in) < 3) {
		return get_article($id);
	}

	return $posts_in;
}
// если нет постов получить 3 последних
function get_article($id)
{
	$args = array(
		'post_type'   => 'article',
		'exclude'          => [$id],
		'numberposts' => 3,
		'post_status' => 'publish',
		'orderby'         => 'date',
		'order'           => 'DESC',
	);
	$posts_in = [];
	$posts_in = array_column(wp_get_recent_posts($args), 'ID');
	return $posts_in;

}

// =====================
// почта для email

function add_contact_email(){
	$option_name = 'contact_email';

	// регистрируем опцию
	register_setting( 'general', $option_name );

	// добавляем поле
	add_settings_field(
		'contact_email-id',
		'Email для писем',
		'contact_email_callback_function',
		'general',
		'default',
		array(
			'id' => 'contact_email-id',
			'option_name' => 'contact_email'
		)
	);
}
add_action('admin_menu', 'add_contact_email');

function contact_email_callback_function( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input
		type="text"
		name="<? echo $option_name ?>"
		id="<? echo $id ?>"
		value="<? echo esc_attr( get_option($option_name) ) ?>"
		class="regular-text code"
	/>
	<?php
}

// Проверяет есть ли дочерние элементы
function has_menu_item_submenu( WP_Post $item ) {
	return isset( $item->classes ) &&
	       is_array( $item->classes ) &&
	       array_search( 'menu-item-has-children', $item->classes ) !== false;
}
