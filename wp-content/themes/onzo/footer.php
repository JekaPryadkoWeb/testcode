<?php
if (!is_404() || !is_page_template('tmp-contact.php')) {
	get_template_part('template/global/contact-us');
}
?>

</main>
<?php get_template_part('template/parts/footer'); ?>
<?php
if (!is_front_page()) {
	get_template_part('template/parts/scroll-up');
} ?>
<?php get_template_part('template/parts/popup'); ?>
<?php get_template_part('template/parts/mob-menu'); ?>
<?php wp_footer() ?>

</body>

</html>
