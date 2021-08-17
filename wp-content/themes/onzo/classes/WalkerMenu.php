<?php


class Walker_Menu extends Walker_Nav_Menu {
	private $_id;
	private $_title;
	private $_url;
	private $_css;

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		parent::start_el( $output, $item, $depth, $args, $id );

		$this->_id    = $item->ID;
		$this->_title = $item->title;
		$this->_url   = $item->url;
	}

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$after = '
		<a class="mob-menu__back" href="#">
		<svg class="icon" width="18" height="18" aria-hidden="true">
			<use xlink:href="'. get_template_directory_uri() . '/assets/img/svg/sprite.svg#icon-arrow"></use>
		</svg>
		<span>' . $this->_title . '</span>
		</a>';

		$indent = str_repeat( "\t", $depth );
		$output .= "\n" . $indent . '<ul class="sub-menu">' . $after . "\n";
	}
}
// <li class="menu-sub-title">
// <label class="submenu-pointer" for="sub-' . $this->_id . '">
// 	<span class="submenu-item">' . $this->_title . '</span>
// 	<div class="submenu-label">
// 		<span class="submenu-chevron">&#8249;</span>
// 	</div>
// </label>
// </li>
