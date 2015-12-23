<?php
namespace backyard;

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

function admin_styles() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/library/css/admin.css');
}

function custom_menu_columns($columns) {
	$custom_columns = array(
		'groups' => 'Groups'
	);
	$columns = array_merge($columns, $custom_columns);

	return $columns;
}

function custom_menu_column_content( $column_name, $post_id ) {
	if ( $column_name == 'groups' ) {
		$terms = wp_get_post_terms($post_id, 'menu_taxonomy');
		$i = 1;
		foreach ($terms as $term) {
			$parent = get_term($term->parent, 'menu_taxonomy');
			echo '<a href="/wp-admin/edit.php?menu_taxonomy='.$term->slug.'&post_type=menu_item&orderby=menu_order+title&order=asc">'
			.$parent->name.' > '.$term->name
			.'</a>';
			echo (count($terms) > $i) ? '<br>' : '';
			$i++;
		}
	}
}

// kludge
function nocache() {
	if( is_page('news') ) {
		return false;
	} else {
		return true;
	}
}
add_filter( 'do_rocket_generate_caching_files', 'backyard\nocache' );

add_filter('manage_menu_item_posts_columns', 'backyard\custom_menu_columns');
add_action('manage_menu_item_posts_custom_column', 'backyard\custom_menu_column_content', 10, 2);
add_filter('body_class', 'backyard\add_slug_body_class');
add_filter('acf/settings/save_json', 'backyard\acf_json_save_point');
add_filter('acf/settings/load_json', 'backyard\acf_json_load_point');
add_action('admin_enqueue_scripts', 'backyard\admin_styles');
?>
