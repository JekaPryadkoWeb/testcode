<?php get_header(); ?>

<?php
	$page_content = get_theme_option('404_content', pll_current_language('slug'));
?>
<section class="intro page-404">
	<div class="container">
		<div class="page-404__inner">
			<div class="page-404__pic">
				<?php
				$image_big = $page_content['img'];
				$image_small  = str_replace('.', '-half.', $image_big);
				?>
				<img srcset="<?= $image_big ?> 2x, <?= $image_small ?> 1x" src="<?= $image_small ?>" alt="404" loading="lazy" />

			</div>
			<div class="page-404__content">
				<h1 class="page-404__title headline">
					<?= $page_content['title'] ?>
				</h1>
				<p class="page-404__text lead">
					<?= $page_content['desc'] ?>
				</p>

				<a class="page-404__btn btn btn--bg-black" href="<?= $page_content['btn']['url'] ?>" target="<?= $page_content['btn']['target'] ?>">
					<?= $page_content['btn']['title'] ?>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
