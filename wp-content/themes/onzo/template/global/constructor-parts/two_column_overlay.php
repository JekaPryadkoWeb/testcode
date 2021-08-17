<?php

$left_column = get_sub_field('left_column');
$right_column = get_sub_field('right_column');

$image_left = get_custom_img($left_column['img']);
$left_column_image_big = $image_left['big'];
$left_column_image_small  = $image_left['small'];

$image_right = get_custom_img($right_column['img']);
$right_column_image_big = $image_right['big'];
$right_column_image_small  =  $image_right['small'];

?>

<div class="figure-tiles">

	<div class="figure-tiles__pic figure-tiles__pic--small">
		<img srcset="<?= $left_column_image_big ?> 2x, <?= $left_column_image_small ?> 1x" src="<?= $left_column_image_small ?>" alt="" loading="lazy"/>
	</div>
	<?php if ($left_column['title'] || $left_column['desc']) { ?>
		<div class="figure-tiles__text figure-tiles__text--small">
			<?php if ($left_column['title']) { ?>
				<h3 class="figure-tiles__title">
					<?= $left_column['title'] ?>
				</h3>
			<?php } ?>
			<?php if ($left_column['desc']) { ?>
				<p class="figure-tiles__descr">
					<?= $left_column['desc'] ?>
				</p>
			<?php } ?>
		</div>
	<?php } ?>

	<div class="figure-tiles__pic figure-tiles__pic--big">
		<img srcset="<?= $right_column_image_big ?> 2x, <?= $image_small ?> 1x" src="<?= $right_column_image_small ?>" alt="" loading="lazy"/>
	</div>

	<?php if ($right_column['title'] || $right_column['desc']) { ?>
		<div class="figure-tiles__text figure-tiles__text--big">
			<?php if ($right_column['title']) { ?>
				<h3 class="figure-tiles__title">
					<?= $right_column['title'] ?>
				</h3>
			<?php } ?>

			<?php if ($right_column['desc']) { ?>
				<p class="figure-tiles__descr">
					<?= $right_column['desc'] ?>
				</p>
			<?php } ?>
		</div>
	<?php } ?>

</div>
