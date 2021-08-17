<section class="cases">
	<div class="container">
		<?php global $wp_query;
		$wp_query  = new WP_Query($args); ?>
		<?php if ($wp_query->have_posts()) : ?>

			<ul class="cases__list">
				<!-- цикл -->
				<?php while ($wp_query->have_posts()) : $wp_query->the_post();
					$case_preview = get_field('case_preview', get_the_ID());
					$case_info = get_field('case_info', get_the_ID());
				?>

					<li class="case links-wrap">
						<a class="case__link" href="<?php the_permalink() ?>">
							<div class="case__preview-wrap">
								<?php $image = get_custom_img($case_preview['img']); ?>
								<img class="case__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $$image['small'] ?>" alt="" loading="lazy" />
							</div>
							<h3 class="case__title headline"><?= $case_preview['title'] ?	$case_preview['title'] : get_the_title() ?></h3>
						</a>
						<p class="case__descr">
							<?= $case_preview['desc'] ?>
						</p>
						<div class="case__bottom case-meta">
							<ul class="case-meta__list">
								<li class="case-meta__item">
									<svg class="icon" width="20" height="20" aria-hidden="true">
										<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-location"></use>
									</svg>
									<span>
										<?= $case_info['locatin']['value'] ?>
									</span>
								</li>
								<li class="case-meta__item">
									<svg class="icon" width="20" height="20" aria-hidden="true">
										<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-area"></use>
									</svg>
									<span>
										<?= $case_info['area']['value'] ?>
									</span>
								</li>
								<li class="case-meta__item">
									<svg class="icon" width="20" height="20" aria-hidden="true">
										<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-time"></use>
									</svg>
									<span>
										<?= $case_info['timing']['value'] ?>
									</span>
								</li>
							</ul>
							<a class="case-meta__more" href="<?php the_permalink() ?>">
								<svg class="icon" width="20" height="20" aria-hidden="true">
									<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
								</svg>
							</a>
						</div>
					</li>

				<?php endwhile; ?>

			</ul>

			<?php get_template_part('template/parts/pagenavi'); ?>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p>нету</p>
		<?php endif; ?>


	</div>
</section>
