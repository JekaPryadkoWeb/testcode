<?php get_header(); ?>

<?php

$case_intro = get_field('case_intro');
$case_info = get_field('case_info');
$category = wp_get_post_terms(get_the_ID(), 'cat_cases');
?>

<section class="intro">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $case_intro['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $category[0]->name ?>
			</p>
			<div class="intro__text">
				<p>
					<?= $case_intro['desc'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content">
			<ul class="facts intro__facts">
				<li class="facts__item">
					<span class="facts__fact"><?= $case_info['locatin']['value'] ?></span>
					<span class="facts__descr"><?= $case_info['locatin']['name'] ?></span>
				</li>
				<li class="facts__item">
					<span class="facts__fact"><?= $case_info['area']['value'] ?></span>
					<span class="facts__descr"><?= $case_info['area']['name'] ?></span>
				</li>
				<li class="facts__item">
					<span class="facts__fact"><?= $case_info['team']['value'] ?></span>
					<span class="facts__descr"><?= $case_info['team']['name'] ?></span>
				</li>
				<li class="facts__item">
					<span class="facts__fact"><?= $case_info['timing']['value'] ?></span>
					<span class="facts__descr"><?= $case_info['timing']['name'] ?></span>
				</li>
				<li class="facts__item">
					<span class="facts__fact"><?= $case_info['stage']['value'] ?></span>
					<span class="facts__descr"><?= $case_info['stage']['name'] ?></span>
				</li>
			</ul>
		</div>
	</div>
</section>

<div class="case-page">
	<div class="container">
		<div class="case-page__preview">
			<?php $image = get_custom_img($case_intro['img']); ?>
			<div class="pic-wrap">
				<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
		</div>

		<?php include get_template_directory() . '/template/global/constructor.php'; ?>

	</div>
</div>


<?php
$preview_cases = get_field('case_same');
$preview_cases_option = get_theme_option('cases_preview', pll_current_language('slug'));


$case_title = $preview_cases['title'] ? $preview_cases['title'] : $preview_cases_option['title'];
$case_desc = $preview_cases['desc'] ? $preview_cases['desc'] : $preview_cases_option['desc'];
$case_more = $preview_cases['show_all'] ? $preview_cases['show_all'] : $preview_cases_option['show_all'];

$cases_in = [];
if ($preview_cases['cases_custom']) {
	// если кастомно на странице
	$cases_in = $preview_cases['cases'];
} elseif ($preview_cases_option['custom']) {
	// Если кастомно на странице опций
	$cases_in = $preview_cases_option['case'];
} else {
	$args = array(
		'numberposts' => 3,
		'post_type'   => 'case',
		'post_status' => 'publish',
	);
	$cases_in = array_column(wp_get_recent_posts($args), 'ID');
}

$data = array(
	'title'  => $case_title,
	'desc'  => $case_desc,
	'query' => $cases_in,
	'more'  => $case_more,
);
?>

<div class="container">
	<?php get_template_part('template/global/cases-feat', '', $data); ?>
</div>


<?php get_footer(); ?>
