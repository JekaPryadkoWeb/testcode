<?php
/*
 * Template name: Услуги
 * Template post type: page
 */
?>
<?php get_header(); ?>

<?php get_template_part('template/services/intro'); ?>
<?php get_template_part('template/services/services'); ?>

<?php
$preview_cases = get_field('preview_cases', pll_get_post(13));
$preview_cases_option = get_theme_option('cases_preview', pll_current_language('slug'));

$case_title = $preview_cases['title'] ? $preview_cases['title'] : $preview_cases_option['title'];
$case_desc = $preview_cases['desc'] ? $preview_cases['desc'] : $preview_cases_option['desc'];
$case_more = $preview_cases['show_all'] ? $preview_cases['show_all'] : $preview_cases_option['show_all'];

$cases_in = [];
if ($preview_cases['cases_custom']) {
	// если кастомно на странице
	$cases_in = $preview_cases['cases'];
} elseif ($preview_cases_option['custom']) {
	// Если кастомно на странице опций
	$cases_in = $preview_cases_option['case'];
} else {
	$args = array(
		'numberposts' => 3,
		'post_type'   => 'case',
		'post_status' => 'publish',
	);
	$cases_in = array_column(wp_get_recent_posts($args), 'ID');
}

$data = array(
	'title'  => $case_title,
	'desc'  => $case_desc,
	'query' => $cases_in,
	'more'  => $case_more,
);

?>
<div class="container">
	<?php get_template_part('template/global/cases-feat', '', $data); ?>
</div>


<?php get_footer(); ?>
