<?php get_header(); ?>
<?php $intro = get_field('intro_article'); ?>
<section class="intro intro--article">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $intro['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $intro['sub_title'] ?>
			</p>
			<div class="intro__text">
				<p>
					<?= $intro['text'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content"></div>
	</div>
</section>
<section class="article">
	<div class="container">

		<div class="article__preview">
			<?php $image = get_custom_img($intro['img']); ?>
			<div class="pic-wrap">
				<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
		</div>

		<?php include get_template_directory() . '/template/global/constructor.php'; ?>

		<footer class="article__footer text-column">
			<div class="article__hashtags links-wrap">
				<?php
				$category = get_the_terms($post->ID, 'cat_article');
				foreach ($category as $cat) {
					echo '<a href="' . get_term_link($cat->term_id) . '">#' . $cat->name . '</a>';
				}
				?>

			</div>
		</footer>
	</div>
</section>

<?php

$blog_feat = get_field('similar_article');
$blog_preview = get_theme_option('blog_preview', pll_current_language('slug'));

$blog_title = $blog_feat['title'] ? $blog_feat['title'] : $blog_preview['title'];
$blog_subtitle = $blog_feat['subtitle'] ? $blog_feat['subtitle'] : $blog_preview['subtitle'];
$blog_more = $blog_feat['show_more'] ? $blog_feat['show_more'] : $blog_preview['show_more'];

$post_in = [];
if (function_exists('yarpp_get_related') && count(yarpp_get_related()) === 3) {
	$post_in = array_column(yarpp_get_related(), 'ID');
} else {
	$post_in = get_article_similar_cat($post->ID);
}
$data = array(
	'title'  => $blog_title,
	'subtitle'  => $blog_subtitle,
	'query'  => $post_in,
	'more'  => $blog_more
);
get_template_part('template/global/blog-feat', '', $data);
?>

<?php get_footer(); ?>
