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
		'taxonomies'            => array( 'meal_taxonomy' ),
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

function meal_taxonomy_def() {

	$labels = array(
		'name'                       => _x( 'Meals', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Meal', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Meals', 'text_domain' ),
		'all_items'                  => __( 'All Meals', 'text_domain' ),
		'parent_item'                => __( 'Parent Meal', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Meal:', 'text_domain' ),
		'new_item_name'              => __( 'New Meal Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Meal', 'text_domain' ),
		'edit_item'                  => __( 'Edit Meal', 'text_domain' ),
		'update_item'                => __( 'Update Meal', 'text_domain' ),
		'view_item'                  => __( 'View Meal', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Meals with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Meals', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Meals', 'text_domain' ),
		'search_items'               => __( 'Search Meals', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'items_list'                 => __( 'Meals list', 'text_domain' ),
		'items_list_navigation'      => __( 'Meals list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'meal_taxonomy', array( 'menu_item' ), $args );

}

add_action( 'init', 'menu_item_cpt_def', 0 );
add_action( 'init', 'meal_taxonomy_def', 0 );
