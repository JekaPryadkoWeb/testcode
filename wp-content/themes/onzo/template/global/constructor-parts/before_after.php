<?php
$before = get_sub_field('before');
$after = get_sub_field('after');
?>

<div class="before-after full-width">

	<div class="before-after__title before-after__title--before">
		<?= $before['title'] ?>
	</div>
	<div class="before-after__before">
		<?php $image_before = get_custom_img($before['picture']); ?>
		<img srcset="<?= $image_before['big'] ?> 2x, <?= $image_before['small'] ?> 1x" src="<?= $image_before['small'] ?>" >
		<div class="before-after__before-overlay"></div>
	</div>

	<div class="before-after__title before-after__title--after">
		<?= $after['title'] ?>
	</div>
	<div class="before-after__after">
		<?php $image_after = get_custom_img($after['picture']); ?>
		<img srcset="<?= $image_after['big'] ?> 2x, <?= $image_after['small'] ?> 1x" src="<?= $image_after['small'] ?>">
		<div class="before-after__after-overlay"></div>
	</div>

	<div class="before-after__handler">
		<svg class="icon" width="20" height="20" aria-hidden="true">
			<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
		</svg>
		<svg class="icon" width="20" height="20" aria-hidden="true">
			<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-arrow"></use>
		</svg>
	</div>
</div>
