<?php

$header_info = get_theme_option('info_header', pll_current_language('slug'));

?>
<header class="header <?php if (is_front_page()) {
												echo 'header--home';
											} ?>">
	<div class="header__inner container">
		<a class="header__logo" href="<?= home_url(); ?>">
			<img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" width="206" height="50" alt="Onzo design">
		</a>
		<nav class="header__menu menu">
			<p class="menu__subtitle"><?= $header_info['title_service_menu'] ?></p>
			<?php
			wp_nav_menu(array(
				'container' => false,
				'items_wrap' => '<ul class="menu__list links-wrap menu__list--separator">%3$s</ul>',
				'theme_location' => 'service_menu',
			)); ?>
			<?php wp_nav_menu(array(
				'container' => false,
				'items_wrap' => '<ul class="menu__list links-wrap">%3$s</ul>',
				'theme_location' => 'main_menu'
			)); ?>
			<a class="menu__btn btn btn--bg-black js-open-popup" href="#" data-popup="feedback">
				<?= $header_info['header_btn'] ?>
			</a>

			<ul class="menu__list links-wrap">
				<li class="menu-item-has-children">
					<span>
						<?= ucfirst(pll_current_language()) ?>
					</span>
					<ul class="sub-menu">
						<?php pll_the_languages(array(
							'display_names_as' => 'slug',
							'hide_current' => 1,
							'echo' => 1,
						)); ?>
					</ul>
				</li>
			</ul>

		</nav>
	</div>
	<button class="header__menu-btn" type="button">
      <span class="header__menu-btn-text"><?= $header_info['mob_menu_tittle'] ?></span>
      <div class="header__menu-btn-frame"></div>
    </button>
</header>
