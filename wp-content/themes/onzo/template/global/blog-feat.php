<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$blog_posts = $args['query'];
$more = $args['more'];
$post_num = 1;
?>

<section class="blog-feat">
	<div class="container">

		<h2 class="blog-feat__title title"><?= $title ?></h2>
		<p class="blog-feat__descr headline"><?= $subtitle ?></p>

		<div class="blog-feat__slider swiper-container">
			<ol class="blog-feat__posts swiper-wrapper">
				<?php foreach ($blog_posts as $blog_post) {
					$article_preview = get_field('preview_article', $blog_post);
				?>
					<li class="blog-feat__post-wrap swiper-slide">
						<div class="post post--feat blog-feat__post">
							<a class="post__link" href="<?= get_the_permalink($blog_post) ?>">
								<?php $image = get_custom_img($article_preview['img']); ?>
								<img class="post__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
								<div class="post__descr">
									<h3 class="post__title">
										<?= $article_preview['title'] ?	$article_preview['title'] : get_the_title($blog_post) ?>
									</h3>
									<p class="post__text">
										<?= $article_preview['desc'] ?>
									</p>
								</div>
								<div class="post__more">
									<span>
										<?= $article_preview['show_more'] ?>
									</span>
									<svg class="icon" width="30" height="30" aria-hidden="true">
										<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
									</svg>
								</div>
							</a>
							<span class="post__num">
								<?= '0' . $post_num;
								$post_num++; ?>
							</span>
						</div>
					</li>
				<?php } ?>
			</ol>
		</div>

		<div class="blog-feat__more-wrap">
			<a class="blog-feat__more boxed-link boxed-link--big" href="<?= get_permalink(pll_get_post(17)) ?>"><?= $more ?></a>
		</div>


	</div>
</section>
