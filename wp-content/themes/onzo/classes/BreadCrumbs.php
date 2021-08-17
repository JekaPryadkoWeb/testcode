<?php

class BreadCrumbs
{
	public $bread_list = array();

	public function start()
	{
		$front_id = get_option('page_on_front');
		$this->bread_list[] = [
			'link' => get_permalink(pll_get_post($front_id)),
			'title' => get_the_title(pll_get_post($front_id))
		];

		if (is_page_template()) {
			$page_id = get_the_id();
			$this->bread_list[] = [
				'link' => get_permalink(pll_get_post($page_id)),
				'title' => get_the_title(pll_get_post($page_id))
			];
		}

		if (is_search()) {
			$this->bread_list[] = [
				'link' => get_permalink(pll_get_post(17)),
				'title' => get_the_title(pll_get_post(17))
			];
		}
	}

	public function end()
	{

		/* ===========================

					Article

		=========================== */

		if (is_tax('cat_article') || is_post_type_archive('article') || is_singular('article')) {
			$this->bread_list[] = [
				'link' => get_permalink(pll_get_post(17)),
				'title' => get_the_title(pll_get_post(17))
			];
		}

		if (is_tax('cat_article')) {
			$category = get_queried_object();
			if ($category->parent != 0) {
				$this->bread_list[] = [
					'link' => get_term_link($category->parent),
					'title' => get_term($category->parent)->name
				];
			}
			$this->bread_list[] = [
				'link' => get_term_link($category->term_id),
				'title' => $category->name
			];
		}

		if (is_singular('article')) {
			$category = get_the_terms($post->ID, 'cat_article');
			if ($category) {
				$this->bread_list[] = [
					'link' => get_term_link($category[0]->term_id),
					'title' => $category[0]->name
				];

				if ($category[1]->parent != 0) {
					$this->bread_list[] = [
						'link' => get_term_link($category[1]->term_id),
						'title' => $category[1]->name
					];
				}
			}

			$this->bread_list[] = [
				'link' => '',
				'title' => get_the_title()
			];
		}

		/* ===========================

					Services

		=========================== */

		if (is_post_type_archive('services') || is_singular('services')) {
			$this->bread_list[] = [
				'link' => get_permalink(pll_get_post(13)),
				'title' => get_the_title(pll_get_post(13))
			];
		}
		if (is_singular('services')) {
			$this->bread_list[] = [
				'link' => '',
				'title' => get_the_title()
			];
		}
		/* ===========================

					Cases

		=========================== */
		if (is_tax('cat_cases') || is_post_type_archive('case') || is_singular('case')) {
			$this->bread_list[] = [
				'link' => get_permalink(pll_get_post(15)),
				'title' => get_the_title(pll_get_post(15))
			];
		}
		if (is_tax('cat_cases')) {
			$category = get_queried_object();
			if ($category->parent != 0) {
				$this->bread_list[] = [
					'link' => get_term_link($category->parent),
					'title' => get_term($category->parent)->name
				];
			}
			$this->bread_list[] = [
				'link' => get_term_link($category->term_id),
				'title' => $category->name
			];
		}

		if (is_singular('case')) {
			$category = get_the_terms($post->ID, 'cat_cases');
			if ($category) {

				// Если первая категория первого уровня
				if ($category[0]->parent == 0) {
					$this->bread_list[] = [
						'link' => get_term_link($category[0]->term_id),
						'title' => $category[0]->name
					];
					if ($category[1]->parent != 0) {
						$this->bread_list[] = [
							'link' => get_term_link($category[1]->term_id),
							'title' => $category[1]->name
						];
					}
				}
				// Если первая категория второго уровня
				if ($category[0]->parent != 0) {
					$this->bread_list[] = [
						'link' => get_term_link($category[0]->parent),
						'title' => get_term($category[0]->parent, 'cat_cases')->name
					];
					$this->bread_list[] = [
						'link' => get_term_link($category[0]->term_id),
						'title' => $category[0]->name
					];
				}
			}

			$this->bread_list[] = [
				'link' => '',
				'title' => get_the_title()
			];
		}



	}

	public function render()
	{
		$this->start();
		$this->end();

		foreach ($this->bread_list as $bread) {
			if (!next($this->bread_list)) {
				echo '<li class="breadcrumbs__item"><span>' . $bread["title"] . '</span></li>';
			} else {
				echo '<div class="breadcrumbs__item"><a href="' . $bread["link"] . '">' . $bread["title"] . '</a></div>';
			}
		}
	}
}
