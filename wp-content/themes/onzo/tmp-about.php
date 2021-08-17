<?php
/*
 * Template name: О нас
 * Template post type: page
 */
?>

<?php get_header(); ?>

<?php $about_intro = get_field('about_intro'); ?>
<section class="intro">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $about_intro['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $about_intro['subtitle'] ?>
			</p>
			<div class="intro__text intro__text--large">
				<p>
					<?= $about_intro['desc'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content"></div>
	</div>
</section>
<div class="about-page wrapper">
	<div class="container">
		<section class="about-page__preview">
			<?php $image = get_custom_img($about_intro['img']) ?>
			<div class="pic-wrap">
				<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
		</section>

		<!-- ======================= -->
		<?php $about_who = get_field('about_who'); ?>
		<section class="about-page__section">
			<div class="about-article full-width">
				<div class="container">
					<div class="about-article__inner">
						<h2 class="about-article__title title">
							<?= $about_who['title'] ?>
						</h2>
						<p class="about-article__descr headline">
							<?= $about_who['subtitle'] ?>
						</p>
						<div class="about-article__content">
							<div class="about-article__text content-rule">
								<?= $about_who['desc'] ?>
							</div>
						</div>
						<?php $image = get_custom_img($about_who['img']) ?>
						<div class="about-article__pic-wrap">
							<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======================= -->
		<?php $about_partners = get_field('about_partners'); ?>
		<section class="about-page__section">
			<div class="brands brands--reversed ">
				<h2 class="brands__title title">
					<?= $about_partners['title'] ?>
				</h2>
				<p class="brands__text headline">
					<?= $about_partners['subtitle'] ?>
				</p>
				<?php $gallery = $about_partners['gallery']; ?>
				<div class="brands__logos">
					<?php foreach ($gallery as $item) {
						$image = get_custom_img($item) ?>
						<div class="brands__logo">
							<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
						</div>
					<?php } ?>

				</div>
			</div>
		</section>
		<!-- ======================= -->
		<?php $about_specialists = get_field('about_specialists'); ?>
		<section class="content-two-cols content-rule">
			<h2>
				<?= $about_specialists['title'] ?>
			</h2>
			<div class="text-two-cols content-rule">
				<?= $about_specialists['desc'] ?>
			</div>
		</section>
		<?php $image = get_custom_img($about_specialists['img']) ?>
		<div class="pic-wrap">
			<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
		</div>
		<!-- ======================= -->
		<?php $about_clients = get_field('about_clients'); ?>
		<section class="about-page__section">
			<div class="brands">
				<h2 class="brands__title title">
					<?= $about_clients['title'] ?>
				</h2>
				<p class="brands__text headline">
					<?= $about_clients['subtitle'] ?>
				</p>

				<?php $gallery = $about_clients['gallery']; ?>
				<div class="brands__logos">
					<?php foreach ($gallery as $item) {
						$image = get_custom_img($item) ?>
						<div class="brands__logo">
							<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
						</div>
					<?php } ?>

				</div>
			</div>
		</section>
	</div>
</div>


<!-- ============================== -->

<?php

$same_custom = get_field('services_about');
$same_option = get_theme_option('services_preview', pll_current_language('slug'));

$feat_title = $same_custom['title'] ? $same_custom['title'] : $same_option['title'];
$feat_subtitle = $same_custom['subtitle'] ? $same_custom['subtitle'] : $same_option['subtitle'];
$feat_desc = $same_custom['desc'] ? $same_custom['desc'] : $same_option['desc'];
$feat_img = $same_custom['img'] ? $same_custom['img'] : $same_option['img'];
$feat_more = $same_custom['show_more'] ? $same_custom['show_more'] : $same_option['show_more'];

$posts_in = [];

if ($same_custom['custom']) {
	$posts_in = $same_custom['services'];
} elseif ($same_option['custom']) {
	$posts_in = $same_option['services'];
} else {
	$args = array(
		'numberposts' => 4,
		'post_type'   => 'services',
		'post_status' => 'publish',
	);
	$posts_in = array_column(wp_get_recent_posts($args), 'ID');
}

$data = array(
	'title'  => $feat_title,
	'subtitle'  => $feat_subtitle,
	'desc'  => $feat_desc,
	'img'  => $feat_img,
	'more'  => $feat_more,
	'services' => $posts_in,
);

get_template_part('template/global/services-feat', '', $data);

?>

<?php get_footer(); ?>
