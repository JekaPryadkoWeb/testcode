<div class="services-page">
	<div class="container">
		<div class="services-page__preview">
			<div class="pic-wrap">
				<?php
				$services_intro = get_field('service_intro',  pll_get_post(13));
				$image = get_custom_img($services_intro['img']);
				?>
				<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy"/>

			</div>
		</div>




		<?php
		$terms = get_terms(
			array(
				'taxonomy'   => 'cat_services',
				'hide_empty' => true,
				'hierarchical' => false,
				'orderby' => 'name',
				'order' => 'ASC',
			)
		);
		foreach ($terms as $term) { ?>
			<section class="services-page__group">
				<h2 class="services-page__title headline"><?= $term->name ?></h2>
				<div class="services-page__pic">
					<?php
					$image_url = get_field('cat_service_img',  'cat_services_' . $term->term_id);
					$image  = get_custom_img($image_url);
					?>
					<img srcset="<?= $image['big'] ?> 2x, <?= $image['small'] ?> 1x" src="<?= $image['small'] ?>" alt="" loading="lazy" />
				</div>

				<ul class="services-list services-page__list">

					<?php $args = array(
						'post_type' 	=> 'services',
						'post_status'	 => 'publish',
						'orderby'			 => 'date',
						'order'				 => 'DESC',
						'lang' 				 =>  pll_current_language('slug'),
						'tax_query' => array(
							array(
								'taxonomy' => 'cat_services',
								'field' => 'name',
								'terms' => $term->name
							)
						)
					);


					$service_list = new WP_Query($args);

					//loop through query
					if ($service_list->have_posts()) {
						while ($service_list->have_posts()) {
							$service_list->the_post();
					?>
							<li class="services-list__item">
								<a class="services-list__link bordered-btn services-list__link--inverted  bordered-btn--black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>

					<?php
						}
					} else {
						//no posts found
					}

					wp_reset_postdata();

					?>
				</ul>

			</section>
		<?php } ?>



	</div>
</div>
