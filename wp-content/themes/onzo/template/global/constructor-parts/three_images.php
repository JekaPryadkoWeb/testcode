<?php $image_list = get_sub_field('images'); ?>

<div class="pic-wrap pic-wrap--col-3">
	<?php foreach ($image_list as $img) {
		$image = get_custom_img($img); ?>
		<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" loading="lazy">
	<?php } ?>

</div>
