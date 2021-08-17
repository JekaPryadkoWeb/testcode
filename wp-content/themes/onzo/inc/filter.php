<?php
// Сделать родительские пункты span
add_filter('walker_nav_menu_start_el', function ($item_output, $item) {
	if ( has_menu_item_submenu( $item ) ) {
		$current_url = (is_ssl()?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if ($item->url == ''){
			$item_output = ' <span>' . $item->title . '</span>';
		}elseif($item->url != $current_url){
			$item_output = '<a href="' . $item->url . '">' .$item->title . '</a>';
		}else{
			$item_output = '<input type="checkbox" id="sub-' . $item->ID . '" class="submenu-toggle">
			<a>' . $item->title . '</a>';
		}
	}
	return $item_output;
},10, 4);


// Прописываем с большой буквы вывод языка
add_filter('pll_the_languages', function ($output, $args) {
	$langs = get_all_lang();
	foreach ($langs as $lang) {
		$output = str_replace($lang . '</a>', ucfirst($lang) . '</a>', $output);
	}
	return $output;
}, 10, 2);
