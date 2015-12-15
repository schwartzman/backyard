<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

function menu_item_cpt_def() {

	$labels = array(
		'name'                  => 'Menu Items',
		'singular_name'         => 'Menu Item',
		'menu_name'             => 'Menu Items',
		'name_admin_bar'        => 'Menu Items',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'menu_item',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'menu_taxonomy' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'menu_item', $args );

}

function menu_taxonomy_def() {

	$labels = array(
		'name'                       => 'Groups',
		'singular_name'              => 'Group',
		'menu_name'                  => 'Groups',
		'all_items'                  => 'All Groups',
		'parent_item'                => 'Parent Group',
		'parent_item_colon'          => 'Parent Group:',
		'new_item_name'              => 'New Group Name',
		'add_new_item'               => 'Add New Group',
		'edit_item'                  => 'Edit Group',
		'update_item'                => 'Update Group',
		'view_item'                  => 'View Group',
		'separate_items_with_commas' => 'Separate Groups with commas',
		'add_or_remove_items'        => 'Add or remove Groups',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Groups',
		'search_items'               => 'Search Groups',
		'not_found'                  => 'Not Found',
		'items_list'                 => 'Groups list',
		'items_list_navigation'      => 'Groups list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'menu_taxonomy', array( 'menu_item' ), $args );

}

add_action( 'init', 'menu_item_cpt_def', 0 );
add_action( 'init', 'menu_taxonomy_def', 0 );
