<?php

/**
 * Class CustomTaxonomy
 */

class CustomTaxonomy extends WPStructuralElements
{
	private $post_type;
	private $name;
	private $slug;
	private $rewrite;

	public function __construct($post_type, $name, $slug, $rewrite = '')
	{
		$this->post_type = $post_type;
		$this->name = $name;
		$this->slug = $slug;
		$this->rewrite = $rewrite;
		$this->registration();
	}

	protected function registration()
	{
		register_taxonomy(strtolower($this->slug), strtolower($this->post_type), $this->dataArray());
	}

	protected function dataArray()
	{
		$this->labelsArray = array(
			'name'                          => $this->name,
			'singular_name'                 => $this->name,
			'search_items'                  => 'Искать',
			'popular_items'                 => 'Популярные',
			'all_items'                     => 'Все',
			'parent_item'                   => 'Родительские',
			'edit_item'                     => 'Редактировать',
			'update_item'                   => 'Обновить',
			'add_new_item'                  => 'Добавление',
			'new_item_name'                 => 'Добавить',
			'add_or_remove_items'           => 'Добавить или убрать',
			'not_found'                     => 'Не найдено',
			'not_found_in_trash' 						=> 'Не найдено в корзине',
			'separate_items_with_commas'		 => 'Разделяйте ' . $this->name . 'запятыми',
		);

		$this->dataArray = array(
			'label'                         => $this->name,
			'labels'                        => $this->labelsArray,
			'description'           				=> '',
			'public'                        => true,
			'hierarchical'          				=> true,
			'rewrite'            					  => ['slug' => $this->rewrite, 'hierarchical' => 'true'],
			'meta_box_cb'          					=> 'post_categories_meta_box',
			'show_admin_column'             => true,
			'show_in_rest'         					=> true,
		);

		return $this->dataArray;
	}
}
