<?php
$blog_info = get_field('blog_info', pll_get_post(17));
$blog_search = get_field('blog_search', pll_get_post(17));

?>
<section class="blog">
	<div class="container">


		<?php
		$paged_count = (get_query_var('paged')) ? get_query_var('paged') - 1 : 0;
		$post_num = (9 * $paged_count) + 1;

		global $wp_query;
		$wp_query  = new WP_Query($args);
		?>

		<?php if ($wp_query->have_posts()) : ?>
			<ol class="blog__list">

				<!-- цикл -->
				<?php while ($wp_query->have_posts()) : $wp_query->the_post();

					$article_preview = get_field('preview_article', get_the_ID());

				?>

					<li class="blog__item-wrap">
						<div class="post blog__item">
							<a class="post__link" href="<?php the_permalink() ?>">
								<?php $image = get_custom_img($article_preview['img']); ?>
								<img class="post__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
								<div class="post__descr">
									<h3 class="post__title"><?= $article_preview['title'] ?	$article_preview['title'] : get_the_title() ?></h3>
									<p class="post__text">
										<?= $article_preview['desc'] ?>
									</p>
								</div>
								<div class="post__more">
									<span>
										<?= $blog_info['read_more'] ?>
									</span>
									<svg class="icon" width="30" height="30" aria-hidden="true">
										<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
									</svg>
								</div>
							</a>
							<span class="post__num"><?= $post_num < 10 ? '0' . $post_num : $post_num;
																			$post_num++; ?></span>
						</div>
					</li>

				<?php endwhile; ?>
				<!-- конец цикла -->
			</ol>

			<?php get_template_part('template/parts/pagenavi'); ?>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<div class="blog__message">
          <div class="blog__message-title page-title">
						<?= $blog_search['not_found'] ?>
          </div>
        </div>
		<?php endif; ?>



	</div>
</section>
