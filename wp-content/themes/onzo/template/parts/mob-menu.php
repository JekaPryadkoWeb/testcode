<?php
$header_info = get_theme_option('info_header', pll_current_language('slug'));
?>
<div class="mob-menu">
	<div class="mob-menu__lang">
		<span class="mob-menu__lang-item mob-menu__lang-item--current">
			<?= ucfirst(pll_current_language()) ?>
		</span>
		<ul>
			<?php pll_the_languages(array(
				'display_names_as' => 'slug',
				'hide_current' => 1,
				'echo' => 1,
			)); ?>
		</ul>

	</div>
	<div class="mob-menu__nav">
		<div class="mob-menu__nav-subtitle">
			<?= $header_info['title_service_menu'] ?>
		</div>
		<?php
		wp_nav_menu(array(
			'container' => false,
			'items_wrap' => '<ul class="mob-menu__list">%3$s</ul>',
			'theme_location' => 'service_menu',
			'walker'         => new Walker_Menu()
		)); ?>
		<?php wp_nav_menu(array(
			'container' => false,
			'items_wrap' => '<ul class="mob-menu__list">%3$s</ul>',
			'theme_location' => 'main_menu'
		)); ?>
	</div>

	<a class="mob-menu__btn btn js-open-popup" href="contacts.html" data-popup="feedback">
		<?= $header_info['header_btn'] ?>
	</a>
</div>
