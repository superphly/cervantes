<?php

// ***********************************************************************
//
// Example CPT
//
// *********************************************************************** 

function cpt_example() {

	$labels = array(
		'name'                => _x( 'Examples', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Example', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Examples', 'text_domain' ),
		'name_admin_bar'      => __( 'Examples', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'example', 'text_domain' ),
		'description'         => __( 'Examples', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-exerpt-view',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'example', $args );

}

// Hook into the 'init' action
//add_action( 'init', 'cpt_example', 0 );

// ***********************************************************************
//
// Modules CPT
//
// *********************************************************************** 

function cpt_module() {

	$labels = array(
		'name'                => _x( 'Modules', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Module', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Modules', 'text_domain' ),
		'name_admin_bar'      => __( 'Modules', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'module', 'text_domain' ),
		'description'         => __( 'Page Modules', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-exerpt-view',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'module', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_module', 0 );