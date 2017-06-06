<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Product Type Taxonomy
function register_product_type_taxonomy() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Type',
		'all_items'                  => 'All Product Types',
		'parent_item'                => 'Parent Product Type',
		'parent_item_colon'          => 'Parent Product Type:',
		'new_item_name'              => 'New Product Type',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate Product Types with commas',
		'add_or_remove_items'        => 'Add or remove Product Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product Types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

}
add_action( 'init', 'register_product_type_taxonomy', 0 );

// Register Custom Taxonomy
function register_adventure_type_taxonomy() {

	$labels = array(
		'name'                       => 'Adventures',
		'singular_name'              => 'Adventure',
		'menu_name'                  => 'Adventure Type',
		'all_items'                  => 'All Adventures',
		'parent_item'                => 'Parent Adventure',
		'parent_item_colon'          => 'Parent Adventure:',
		'new_item_name'              => 'New Adventure Name',
		'add_new_item'               => 'Add New Adventure',
		'edit_item'                  => 'Edit Adventure',
		'update_item'                => 'Update Adventure',
		'view_item'                  => 'View Adventure',
		'separate_items_with_commas' => 'Separate Adventures with commas',
		'add_or_remove_items'        => 'Add or remove adventures',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Adventures',
		'search_items'               => 'Search Adventures',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No adventures',
		'items_list'                 => 'Adventures list',
		'items_list_navigation'      => 'Adventures list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'adventure-type', array( 'adventure' ), $args );

}
add_action( 'init', 'register_adventure_type_taxonomy', 0 );
