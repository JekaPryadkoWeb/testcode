<?php

$constructor_id = get_queried_object_id();

if (have_rows('article_constructor', $constructor_id)) : ?>
	<div class="constructor">

		<?php while (have_rows('article_constructor', $constructor_id)) : the_row();

			if (get_row_layout() == 'text') :
				get_template_part('/template/global/constructor-parts/text');

			elseif (get_row_layout() == 'two_column_overlay') :
				get_template_part('/template/global/constructor-parts/two_column_overlay');

			elseif (get_row_layout() == 'two_column') :
				get_template_part('/template/global/constructor-parts/two_column');

			elseif (get_row_layout() == 'picture') :
				get_template_part('/template/global/constructor-parts/pictures');

			elseif (get_row_layout() == 'three_images') :
				get_template_part('/template/global/constructor-parts/three_images');

			elseif (get_row_layout() == 'before_after') :
				get_template_part('/template/global/constructor-parts/before_after');

			elseif (get_row_layout() == 'two_column_text') :
				get_template_part('/template/global/constructor-parts/two_column_text');

			elseif (get_row_layout() == 'text_image') :
				get_template_part('/template/global/constructor-parts/text_image');

			elseif (get_row_layout() == 'cases') :
					get_template_part('/template/global/constructor-parts/cases');

			endif;
		endwhile; ?>
	</div>

<?php else :
	false;
endif; ?>
