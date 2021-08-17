<?php
function my_rewrite_rule()
{
	// пагинация
	add_rewrite_rule('blog/page/([^/]+)(?:/([0-9]+))?/?$', 'index.php?post_type=article&paged=$matches[1]', 'top');
	add_rewrite_rule('cases/page/([^/]+)(?:/([0-9]+))?/?$', 'index.php?post_type=case&paged=$matches[1]', 'top');
	// поиск
	add_rewrite_rule('(uk|en)/blog/search/(.+)/?$', 'index.php?lang=$matches[1]&s=$matches[2]', 'top');
	add_rewrite_rule('(uk|en)/blog/search/(.+)/page/?([0-9]{1,})/?$', 'index.php?lang=$matches[1]&s=$matches[2]&paged=$matches[3]', 'top');
	add_rewrite_rule('blog/search/(.+)/?$', 'index.php?lang=ru&s=$matches[1]', 'top');
	add_rewrite_rule('blog/search//(.+)/page/?([0-9]{1,})/?$', 'index.php?lang=ru&s=$matches[1]&paged=$matches[2]', 'top');
}
add_action('init', 'my_rewrite_rule');

function my_search_rewrite() {
	if ( is_search() && ! empty( $_GET['s'] ) ) {
			wp_redirect( home_url( "/blog/search/" ) . urlencode( get_query_var( 's' ) ) );
			exit();
	}
}
add_action( 'template_redirect', 'my_search_rewrite' );
