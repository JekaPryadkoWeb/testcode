<?php

$services_intro = get_field('service_intro', pll_get_post(13));

?>

<section class="intro intro--services">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $services_intro['title'] ?>
			</h1>
			<p class="intro__lead lead intro__lead--wide">
				<?= $services_intro['desc'] ?>
			</p>
			<div class="intro__text">
				<p>
					<?= $services_intro['info'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content"></div>
	</div>
</section>
