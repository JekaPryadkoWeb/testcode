<?php
/*
 * Template name: Кейсы
 * Template post type: page
 */
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page'  => '6',
	'paged' 					=> $paged,
	'post_status'     => array('publish'),
	'post_type'     	=> 'case',
	'orderby'         => 'date',
	'order'           => 'DESC',
	'lang' 						=>  pll_current_language('slug'),
);
?>

<?php get_header(); ?>

<?php get_template_part('template/cases/intro') ?>
<?php get_template_part('template/cases/cases', '', $args); ?>


<?php get_footer(); ?>
