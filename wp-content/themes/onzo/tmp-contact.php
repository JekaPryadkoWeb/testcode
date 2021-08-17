<?php
/*
 * Template name: Контакты
 * Template post type: page
 */
?>

<?php get_header(); ?>

<?php $contacts_info = get_field('contacts'); ?>

<section class="intro intro--contacts">
	<div class="container">
		<div class="intro__top"></div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $contacts_info['title'] ?>
			</h1>
			<p class="intro__lead lead">
				<?= $contacts_info['subtitle'] ?>
			</p>
			<div class="intro__text intro__text--wide">
				<p>
					<?= $contacts_info['desc'] ?>
				</p>
			</div>
		</div>
		<div class="intro__content">
			<div class="contacts links-wrap">
				<p class="contacts__item contacts__item--address">
					<svg class="icon" width="20" height="20" aria-hidden="true">
						<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-location"></use>
					</svg>
					<span class="contacts__text">
						<?= $contacts_info['locatin'] ?>
					</span>
				</p>
				<p class="contacts__item contacts__item--email">
					<svg class="icon" width="20" height="20" aria-hidden="true">
						<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-email"></use>
					</svg>
					<a class="contacts__link" href="mailto:	<?= $contacts_info['mail'] ?>"> <?= $contacts_info['mail_text'] ?> <?= $contacts_info['mail'] ?></a>
				</p>
				<p class="contacts__item contacts__item--phone">
					<svg class="icon" width="20" height="20" aria-hidden="true">
						<use xlink:href="<?= get_template_directory_uri() ?>/assets/img/svg/sprite.svg#icon-phone"></use>
					</svg>
					<a class="contacts__link" href="tel:<?= $contacts_info['phone'] ?>"> <?= $contacts_info['phone_text'] ?> <?= $contacts_info['phone'] ?></a>
				</p>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template/parts/contact-form'); ?>


<?php get_footer(); ?>
