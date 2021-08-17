<?php
$content = get_sub_field('desc');
$image = get_custom_img(get_sub_field('img'));
?>

<section class="info-block info-block--content full-width">
	<div class="container">
		<div class="info-block__inner">
			<div class="info-block__content content-rule">
				<?= $content; ?>
			</div>
			<div class="info-block__pic-wrap">
				<img class="info-block__pic" srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" loading="lazy">
			</div>
		</div>
	</div>
</section>
