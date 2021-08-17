<?php
function dco_remove_default_image_sizes( $sizes) {
	return array_diff( $sizes, array(
		'medium',
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048'
	) );
}
add_filter('intermediate_image_sizes', 'dco_remove_default_image_sizes');
add_filter( 'big_image_size_threshold', '__return_zero' );

// ================================

add_action('add_attachment', 'add_resize_img');
function add_resize_img($post_ID)
{
	$normal_file = get_attached_file( $post_ID );
 	$normal_file = str_replace( '\\', '/', $normal_file );
	$pathinfo = pathinfo( $normal_file ) ;
	$retina_file = trailingslashit( $pathinfo['dirname'] ) . $pathinfo['filename'] . '-half.' . $pathinfo['extension'];
	$retina_file = str_replace( '\\', '/', $retina_file );

	$percent = 0.5;

	list($width, $height) = getimagesize($normal_file);
	$new_width = $width * $percent;
	$new_height = $height * $percent;
	$crop_params = false;

	$image = wp_get_image_editor( $normal_file );
	$image->resize( $new_width, $new_height, $crop_params );
	$image->set_quality( 80 );
	$image->save( $retina_file );
}

add_action( 'delete_attachment', 'my_delete_attachment');
function my_delete_attachment($attach_id){
	$normal_file = get_attached_file( $attach_id );
	$normal_file = str_replace( '\\', '/', $normal_file );
	$pathinfo = pathinfo( $normal_file ) ;
	$retina_file = trailingslashit( $pathinfo['dirname'] ) . $pathinfo['filename'] . '-half.' . $pathinfo['extension'];
	$retina_file = str_replace( '/', '\\', $retina_file );
	@unlink( $retina_file );
}

// ================================

function get_custom_img($url)
{
	$img = [];
	if (strpos($url, '.jpg') !== false) {
		$image_small = str_replace('.jpg', '-half.jpg', $url);
	}
	if (strpos($url, '.png') !== false) {
		$image_small = str_replace('.png', '-half.png', $url);
	}

	$img = [
		'small' => $image_small,
		'big' => $url
	];

	return $img;
}
