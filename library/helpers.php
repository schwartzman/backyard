<?php
namespace backyard;

function p($x){
	echo '<pre>';
	print_r($x);
	echo '</pre>';
}

function d($x){
	echo '<pre>';
	var_dump($x);
	echo '</pre>';
}

function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'backyard\add_slug_body_class' );
?>
