<?php
$contact_info = get_theme_option('contact_us', pll_current_language('slug'));
?>
<section class="contact-us">
	<div class="container">
		<div class="contact-us__inner">
			<h2 class="contacts-us__title headline">
				<?= $contact_info['title'] ?>
			</h2>
			<div class="contact-us__content">
				<p class="contacts-us__text">
					<?= $contact_info['desc'] ?>
				</p>
				<a class="contacts-us__btn btn js-open-popup" href="#" data-popup="feedback">
					<?= $contact_info['btn'] ?>
				</a>
			</div>
		</div>
	</div>
</section>
