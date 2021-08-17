<div class="pagenavi">
	<?php
	$big = 999999999;
	echo paginate_links(array(
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'show_all'     => false,
		'prev_next' => true,
		'prev_text'    => __('<span class="visually-hidden">Previous page</span>'),
		'next_text'    => __('<span class="visually-hidden">Next page</span>'),
		'before_page_number' => '',
		'after_page_number'  => '',
		'end_size' => 1,
		'mid_size' => 1
	));
	?>
</div>
