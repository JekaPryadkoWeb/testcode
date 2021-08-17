<?php
/**
 * Class CustomPostType
 */

class CustomPostType extends WPStructuralElements
{
    private $name;
    private $slug;
    private $icon;
    private $yarpp;

    public function __construct($name, $slug, $icon = 'dashicons-admin-page', $yarpp = false) {
        $this->name = $name;
        $this->slug = $slug;
        $this->icon = $icon;
        $this->yarpp = $yarpp;
        $this->registration();
    }

    protected function registration() {
        register_post_type( strtolower($this->slug),$this->dataArray());
    }

    protected function dataArray(){
        $this->labelsArray = array(
            'name' => $this->name,
            'singular_name' => $this->name,
						'add_new'            => 'Добавить',
						'add_new_item'       => 'Добавление',
						'edit_item'          => 'Редактирование',
						'new_item'           => 'Новая',
						'view_item'          => 'Смотреть',
						'search_items'       => 'Искать',
						'not_found'          => 'Не найдено',
						'not_found_in_trash' => 'Не найдено в корзине',
						'parent_item_colon'  => '',
						'menu_name' => $this->name
        );
        $this->dataArray = array(
            'labels'                => $this->labelsArray,
						'description'         	=> '',
						'public'                => true,
						'show_in_rest'        	=> false,
            'menu_icon'             => $this->icon,
            'supports'              => ['title'],
						'taxonomies'         		=> [],
            'has_archive'           => true,
						'rewrite'             	=> true,
            'query_var'             => true,
						'yarpp_support' 				=> $this->yarpp
        );
        return $this->dataArray;
    }
}
