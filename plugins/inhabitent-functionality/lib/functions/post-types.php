<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */
 
// Register Custom Post Type
function register_products_post_type() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Product Parent Item:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this Product',
		'items_list'            => 'Product list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter Products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Products are histery items that inhabitent sells',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'register_products_post_type', 0 );


// Register Custom Post Type
function adventure_post_type() {

	$labels = array(
		'name'                  => 'Adventures',
		'singular_name'         => 'Adventure',
		'menu_name'             => 'Adventure',
		'name_admin_bar'        => 'Adventure',
		'archives'              => 'Adventure Archives',
		'attributes'            => 'Adventure Attributes',
		'parent_item_colon'     => 'Parent Adventure:',
		'all_items'             => 'All Adventure',
		'add_new_item'          => 'Add New Adventure',
		'add_new'               => 'Add New',
		'new_item'              => 'New Adventure',
		'edit_item'             => 'Edit Adventure',
		'update_item'           => 'Update Adventure',
		'view_item'             => 'View Adventure',
		'view_items'            => 'View Adventures',
		'search_items'          => 'Search Adventure',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Adventure',
		'uploaded_to_this_item' => 'Uploaded to this Adventure',
		'items_list'            => 'Adventures list',
		'items_list_navigation' => 'Adventures list navigation',
		'filter_items_list'     => 'Filter Adventures list',
	);
	$args = array(
		'label'                 => 'Adventure',
		'description'           => 'Adventure post for Inhabitent',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'adventure_post_type', 0 );