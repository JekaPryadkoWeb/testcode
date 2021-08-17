<?php get_header(); ?>
<?php

$service_intro = get_field('service_intro');
$category = wp_get_post_terms(get_the_ID(), 'cat_services');

?>
<section class="intro intro--service">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $service_intro['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $category[0]->name ?>
			</p>
			<div class="intro__text">
				<p>
					<?= $service_intro['subtitle'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content">
			<div class="intro__two-cols text-two-cols content-rule">
				<?= $service_intro['desc'] ?>
			</div>
		</div>
	</div>
</section>
<div class="service-page wrapper">
	<div class="container">
		<div class="service-page__preview">
			<?php $image = get_custom_img($service_intro['img']); ?>
			<div class="pic-wrap">
			<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
		</div>

		<?php include get_template_directory() . '/template/global/constructor.php'; ?>

	</div>
</div>





<?php

$same_custom = get_field('service_same_content');
$same_option = get_theme_option('services_preview', pll_current_language('slug'));

$feat_title = $same_custom['title'] ? $same_custom['title'] : $same_option['title'];
$feat_subtitle = $same_custom['subtitle'] ? $same_custom['subtitle'] : $same_option['subtitle'];
$feat_desc = $same_custom['desc'] ? $same_custom['desc'] : $same_option['desc'];
$feat_img = $same_custom['img'] ? $same_custom['img'] : $same_option['img'];
$feat_more = $same_custom['show_more'] ? $same_custom['show_more'] : $same_option['show_more'];

$posts_in = [];

if ($same_custom['custom']) {
	$posts_in = $same_custom['services'];
}elseif($same_option['custom']){
	$posts_in = $same_option['services'];
}else {
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
	'services'  => $posts_in,
);

get_template_part('template/global/services-feat', '', $data); ?>

<?php get_footer(); ?>
