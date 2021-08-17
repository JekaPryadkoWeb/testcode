<?php get_header(); ?>

<!-- ============================== -->
<?php $first_screen = get_field('main_feat');
$first_screen_title = $first_screen['title'];
$first_screen_desc = $first_screen['desc'];
$first_screen_show = $first_screen['show'];
$first_screen_cases = $first_screen['cases'];

?>

<section class="home-intro intro">
	<div class="container">
		<div class="home-intro__inner">
			<div class="home-intro__content">
				<h1 class="home-intro__title page-title">
					<?= $first_screen_title ?>
				</h1>
				<p class="home-intro__text lead">
					<?= $first_screen_desc ?>
				</p>
				<div class="home-intro__slider swiper-container">
					<div class="home-intro__slider-inner swiper-wrapper">

						<?php foreach ($first_screen_cases as $first_case) {
							$case_preview = get_field('case_preview', $first_case);
							if($case_preview['img_main']){ ?>
							<div class="home-intro__slide swiper-slide">
								<a class="home-intro__watch-link boxed-link" href="<?= get_the_permalink($first_case) ?>">
									<?= $first_screen_show ?>
								</a>
							</div>
						<?php } } ?>

					</div>
				</div>
				<div class="home-intro__shape" data-animation-path-duration="2000" data-animation-path-easing="easeOutElastic" data-morph-path="M 418.1,159.8 C 460.9,222.9 497,321.5 452.4,383.4 417.2,432.4 371.2,405.6 271.3,420.3 137.2,440 90.45,500.6 42.16,442.8 -9.572,381 86.33,289.1 117.7,215.5 144.3,153.4 145.7,54.21 212.7,36.25 290.3,15.36 373.9,94.6 418.1,159.8 Z" data-path-scaleY="1.1" data-path-translatex="5%" data-path-translatey="-10%" data-image-scaleX="1.2" data-image-scaleY="1.2" data-animation-deco-duration="2000" data-animation-deco-delay="100" data-deco-rotate="-10">
					<svg class="item__svg" width="1570px" height="1256px" viewBox="0 0 500 500">
						<clipPath id="clipShape2">
							<path class="item__clippath" d="M 378.1,121.2 C 408.4,150 417.2,197.9 411,245.8 404.8,293.7 383.5,341.7 353.4,370.7 303.2,419.1 198.7,427.7 144.5,383.8 86.18,336.5 67.13,221.3 111.9,161 138.6,125 188.9,99.62 240.7,90.92 292.4,82.24 345.6,90.32 378.1,121.2 Z"></path>
						</clipPath>
						<g class="item__deco">
							<use xlink:href="#deco2"></use>
						</g>
						<g clip-path="url(#clipShape2)">

							<?php foreach ($first_screen_cases as $first_case) {
								$case_preview = get_field('case_preview', $first_case);
								if($case_preview['img_main']){ ?>
								<image class="item__img" xlink:href="<?= $case_preview['img_main'] ?>" x="0" y="0" height="500px" width="500px"></image>
							<?php } } ?>

						</g>
					</svg>
				</div>
				<ol class="home-intro__nav">
					<?php foreach ($first_screen_cases as $first_case) {
						$case_preview = get_field('case_preview', $first_case);
						if($case_preview['img_main']){ ?>
						<li class="home-intro__nav-item">
							<button type="button" class="home-intro__nav-link">
								<?= $case_preview['title'] ?	$case_preview['title'] : get_the_title($first_case) ?>
							</button>
						</li>

					<?php } } ?>

				</ol>
			</div>
		</div>
	</div>
</section>
<!-- ============================== -->


<?php
$preview_cases = get_field('cases_feat');
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
<div class="selected-wrap selected-wrap--home">
	<div class="container">
		<?php get_template_part('template/global/cases-feat', '', $data); ?>
	</div>
</div>
<!-- ============================== -->
<?php $main_about = get_field('main_about'); ?>

<section class="about-article">
	<div class="container">
		<div class="about-article__inner">
			<h2 class="about-article__title title">
				<?= $main_about['title'] ?>
			</h2>
			<p class="about-article__descr headline">
				<?= $main_about['subtitle'] ?>
			</p>
			<div class="about-article__content">
				<div class="about-article__text content-rule">
					<p>
						<?= $main_about['desc'] ?>
					</p>
				</div>
				<a class="about-article__link boxed-link" href="<?= get_permalink(pll_get_post(11)) ?>">
					<?= $main_about['show_more'] ?>
				</a>
			</div>
			<?php $image = get_custom_img($main_about['img']); ?>
			<div class="about-article__pic-wrap">
				<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
		</div>
	</div>
</section>
<!-- ============================== -->
<?php
$blog_feat = get_field('blog_feat');
$blog_preview = get_theme_option('blog_preview', pll_current_language('slug'));

$blog_title = $blog_feat['title'] ? $blog_feat['title'] : $blog_preview['title'];
$blog_subtitle = $blog_feat['subtitle'] ? $blog_feat['subtitle'] : $blog_preview['subtitle'];
$blog_more = $blog_feat['show_more'] ? $blog_feat['show_more'] : $blog_preview['show_more'];


$posts_in = [];
if ($blog_feat['custom']) {
	$posts_in = $blog_feat['article'];
} elseif ($blog_preview['custom']) {
	$posts_in = $blog_preview['article'];
} else {
	$args = array(
		'numberposts' => 3,
		'post_type'   => 'article',
		'post_status' => 'publish',
	);
	$posts_in = array_column(wp_get_recent_posts($args), 'ID');
}

$data = array(
	'title'  => $blog_title,
	'subtitle'  => $blog_subtitle,
	'query'  => $posts_in,
	'more'  => $blog_more
);

get_template_part('template/global/blog-feat', '', $data);
?>

<!-- ============================== -->


<?php

$same_custom = get_field('services_feat');
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
