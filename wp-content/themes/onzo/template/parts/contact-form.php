<?php
$contact_form = get_theme_option('contact_form', pll_current_language('slug'));
?>
<section class="contacts-form">
	<div class="container">
		<h2 class="contacts-form__title">
			<?= $contact_form['title'] ?>
		</h2>
		<form class="contacts-form__form" action="<?php echo admin_url('admin-ajax.php?action=send_contactus') ?>" method="POST">
			<label class="visually-hidden" for=""><?= $contact_form['name'] ?></label>
			<input class="contacts-form__field field" type="text" name="name" placeholder="<?= $contact_form['name'] ?>" required>
			<label class="visually-hidden" for=""><?= $contact_form['mail'] ?></label>
			<input class="contacts-form__field field" type="email" name="email" placeholder="<?= $contact_form['mail'] ?>" required>
			<label class="visually-hidden" for=""><?= $contact_form['msg'] ?></label>
			<textarea class="contacts-form__field field field--textarea" name="message" placeholder="<?= $contact_form['msg'] ?>" required></textarea>
			<button class="contacts-form__btn btn btn--bg-black" type="submit" data-text-success="<?= $contact_form['btn_success'] ?>" data-text-error="<?= $contact_form['btn_error'] ?>"><?= $contact_form['btn'] ?></button>
		</form>
	</div>
</section>
