<?php
$current_term_id = get_queried_object()->term_id;
$blog_info = get_field('blog_info', pll_get_post(17));
$blog_search = get_field('blog_search', pll_get_post(17));
?>

<section class="intro">
	<div class="container">
		<div class="intro__top">
			<?php get_template_part('template/parts/breadcrumbs'); ?>
		</div>
		<div class="intro__head">
			<h1 class="intro__title page-title">
				<?= $blog_info['title'] ?>
			</h1>
			<?php
			if (is_search()) {
				$sr = get_query_var('s');
			?>
				<p class="intro__lead lead"><?= $blog_info['decs_search'] ?> <?= $sr ?></p>
			<?php } else { ?>
				<p class="intro__lead lead"><?= $blog_info['desc'] ?></p>
			<?php } ?>

		</div>
		<div class="intro__content">
			<?php $terms = get_terms('cat_article');
			if ($terms && !is_wp_error($terms)) {
				echo '<ul class="hashtags">';
				$active_tax = 'hashtags__item--current ';
				if (is_tax() || is_search()) {
					$active_tax = '';
				}
				echo '<li class="' . $active_tax . 'hashtags__item"><a class="hashtags__link" href="' .  get_permalink(17) . '">#' . $blog_info['all_article'] . '</a></li>';
				foreach ($terms as $term) {
					$active_term = '';
					if ($term->term_id === $current_term_id) {
						$active_term = 'hashtags__item--current';
					}
					echo '<li class="' . $active_term . ' hashtags__item"><a class="hashtags__link" href="' . get_term_link($term->term_id) . '">#' . $term->name . '</a></li>';
				}
				echo "</ul>";
			} ?>

			<form class="search" action="<?= esc_url(home_url('/')); ?>">
				<input class="search__field field" type="text" placeholder="<?= $blog_search['placeholder']  ?>" required name="s">
				<button class="search__btn btn" type="submit"><?= $blog_search['btn']  ?></button>
			</form>
		</div>
	</div>
</section>
