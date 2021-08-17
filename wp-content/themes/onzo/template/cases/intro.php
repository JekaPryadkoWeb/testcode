<?php

$cases_intro = get_field('intro_cases', pll_get_post(15));
$current_term_id = get_queried_object()->term_id;
$parent_term_id = get_queried_object()->parent;
?>

<section class="intro intro--cases">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $cases_intro['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $cases_intro['subtitle'] ?>
			</p>
			<div class="intro__text">
				<p>
					<?= $cases_intro['desc'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content">

			<ul class="cats">
				<?php $terms  = get_terms(array(
					'taxonomy'      => array('cat_cases'),
					'hide_empty'    => true,
					'parent'         => '0',
				));
				foreach ($terms as $term) {
					if ($term->term_id === $current_term_id || $term->term_id === $parent_term_id) { ?>
						<li class="cats__item cats__item--current">
							<a href="<?= get_term_link($term->term_id) ?>" class="cats__link bordered-btn bordered-btn--red"><?= $term->name ?></a>
						</li>
					<?php	} else { ?>
						<li class="cats__item">
							<a href="<?= get_term_link($term->term_id) ?>" class="cats__link bordered-btn" href="#"><?= $term->name ?></a>
						</li>
				<?php }
				} ?>
			</ul>

			<?php
			if ($current_term_id) {
				$parent_id = $parent_term_id === 0 ? $current_term_id : $parent_term_id;
				$subterms  = get_terms(array(
					'taxonomy'      => array('cat_cases'),
					'hide_empty'    => false,
					'parent'        => $parent_id,
				)); ?>
				<ul class="subcats links-wrap">
					<?php foreach ($subterms as $subterm) { ?>
						<li class="subcats__item <?php if ($subterm->term_id === $current_term_id) {
																				echo 'subcats__item--current';
																			} ?>">
							<a href="<?= get_term_link($subterm->term_id) ?>" class="subcats__link"><?= $subterm->name ?></a>
						</li>
					<?php } ?>
				</ul>

			<?php } ?>



		</div>
	</div>
</section>
