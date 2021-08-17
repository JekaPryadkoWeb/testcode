<?php $image = get_custom_img(get_sub_field('picture')); ?>

<div class="pic-wrap">
	<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" loading="lazy"/>
</div>
