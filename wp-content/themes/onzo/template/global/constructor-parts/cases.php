<?php
$preview_cases_option = get_theme_option('cases_preview', pll_current_language('slug'));

$case_title = get_sub_field('title') ? get_sub_field('title') : $preview_cases_option['title'];
$case_desc = get_sub_field('desc') ? get_sub_field('desc') : $preview_cases_option['desc'];
$case_more = get_sub_field('show_all') ? get_sub_field('show_all') : $preview_cases_option['show_all'];

$cases_in = [];
if (get_sub_field('custom')) {
	// если кастомно на странице
	$cases_in = get_sub_field('cases');
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


<div class="selected-wrap selected-wrap--content">
	<?php get_template_part('template/global/cases-feat', '', $data); ?>
</div>
