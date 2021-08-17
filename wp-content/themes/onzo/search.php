<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	's' =>  get_query_var('s'),
	'posts_per_page'  => '9',
	'paged' 					=> $paged,
	'post_status'     => array('publish'),
	'post_type'     	=> 'article',
	'orderby'         => 'date',
	'order'           => 'DESC',
	'lang' 						=>  pll_current_language('slug'),
);
?>

<?php get_header(); ?>

<?php get_template_part('template/blog/intro') ?>
<?php get_template_part('template/blog/blog', '', $args); ?>
<?php get_template_part('template/section/contact-us'); ?>


<?php get_footer(); ?>
