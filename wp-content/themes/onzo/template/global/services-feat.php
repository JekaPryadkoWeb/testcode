<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$desc = $args['desc'];
$img = $args['img'];
$more = $args['more'];
$services = $args['services'];
?>
<section class="services">
	<div class="container">
		<div class="services__inner">
			<div class="services__content">
				<h2 class="services__title title">
					<?= $title ?>
				</h2>
				<p class="services__descr headline">
					<?= $subtitle ?>
				</p>
				<div class="services__text">
					<?= $desc ?>
				</div>
				<?php $image = get_custom_img($img); ?>
				<img class="services__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
			</div>
			<ul class="services-list services__list  services-list--white">
				<?php foreach ($services as $service) { ?>
					<li class="services-list__item">
						<a class="services-list__link bordered-btn" href="<?= get_the_permalink($service) ?>">
							<?= get_the_title($service) ?>
						</a>
					</li>

				<?php } ?>


			</ul>
			<div class="services__more-wrap">
				<a class="services__more boxed-link boxed-link--big" href="<?= get_permalink(pll_get_post(13)) ?>">
					<?= $more ?>
				</a>
			</div>
		</div>
	</div>
</section>
