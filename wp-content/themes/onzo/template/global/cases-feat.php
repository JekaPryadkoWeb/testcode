<?php

$title = $args['title'];
$desc = $args['desc'];
$cases = $args['query'];
$more = $args['more'];

?>


<section class="selected <?php if (is_front_page()) {
														echo 'selected--home';
													} ?>">
	<?php if (!is_front_page()) { ?>
		<h2 class="selected__headline headline">
			<?= $title ?>
		</h2>
	<?php } ?>

	<div class="selected__inner">
		<?php if (is_front_page()) { ?>
			<h2 class="selected__title title">
				<?= $desc ?>
			</h2>
		<?php } else { ?>
			<p class="selected__title title">
				<?= $desc ?>
			</p>
		<?php } ?>


		<?php
		$i = 0;
		foreach ($cases as $case) {
			$case_preview = get_field('case_preview', $case);
			$case_info = get_field('case_info', $case);
			$case_cat = get_the_terms($case, 'cat_cases');

			$image = get_custom_img($case_preview['img']);
			$hover = $case_preview['hover'];

			$i++;
			switch ($i) {
				case 1:
					$extra_class = 'project--large';
					break;
				case 2:
					$extra_class = 'project--middle';
					break;
				case 3:
					$extra_class = 'project--small';
					break;
			}
		?>

			<div class="selected__item project <?= $extra_class ?> ">
				<div class="project__gallery-wrap">
					<a class="project__gallery" href="<?= get_the_permalink($case) ?>">
						<div class="project__pic-wrap">
							<img class="project__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" loading="lazy">
						</div>

						<?php
						if ($hover) {
							foreach ($hover as $img) {
								$image = get_custom_img($img);
						?>
								<div class="project__pic-wrap">
									<img class="project__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" loading="lazy">
								</div>
						<?php }
						} ?>


					</a>
				</div>
				<a class="project__content" href="<?= get_the_permalink($case) ?>">
					<h3 class="project__title headline">
						<?= $case_preview['title'] ?	$case_preview['title'] : get_the_title($case) ?>
					</h3>
					<p class="project__descr title">
						<?= $case_cat[0]->name ?>
					</p>
					<p class="project__text">
						<?= $case_preview['desc'] ?>
					</p>
					<div class="project__bottom case-meta">
						<ul class="case-meta__list">
							<li class="case-meta__item">
								<svg class="icon" width="20" height="20" aria-hidden="true">
									<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-location"></use>
								</svg>
								<span><?= $case_info['locatin']['value'] ?></span>
							</li>
							<li class="case-meta__item">
								<svg class="icon" width="20" height="20" aria-hidden="true">
									<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-area"></use>
								</svg>
								<span><?= $case_info['area']['value'] ?></span>
							</li>
							<li class="case-meta__item">
								<svg class="icon" width="20" height="20" aria-hidden="true">
									<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-time"></use>
								</svg>
								<span><?= $case_info['timing']['value'] ?></span>
							</li>
						</ul>
						<span class="case-meta__more" href="#">
							<svg class="icon" width="20" height="20" aria-hidden="true">
								<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
							</svg>
						</span>
					</div>
				</a>
			</div>


		<?php } ?>

	</div>
	<a class="selected__more boxed-link boxed-link--big" href="<?= get_permalink(pll_get_post(15)) ?>">
		<?= $more ?>
	</a>
</section>
