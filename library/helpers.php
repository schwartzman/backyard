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

function acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/library/acf';
    return $path;
}

function acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/library/acf';
    return $paths;
}

add_filter( 'body_class', 'backyard\add_slug_body_class' );
add_filter('acf/settings/save_json', 'backyard\acf_json_save_point');
add_filter('acf/settings/load_json', 'backyard\acf_json_load_point');
?>
