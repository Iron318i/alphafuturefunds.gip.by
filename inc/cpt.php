<?php

add_action('init', 'register_imaginationfoods_post_type');

function register_imaginationfoods_post_type() {

    register_taxonomy('projectcat', array('project'), array(
	'label' => 'Categories',
	'labels' => array(
	    'name' => _x('Categories', 'taxonomy general name'),
	    'singular_name' => _x('Category', 'taxonomy singular name'),
	    'search_items' => __('Search Categories'),
	    'all_items' => __('All Categories'),
	    'parent_item' => __('Parent Category'),
	    'parent_item_colon' => __('Parent Category:'),
	    'edit_item' => __('Edit Category'),
	    'update_item' => __('Update Category'),
	    'add_new_item' => __('Add New Category'),
	    'new_item_name' => __('New Category Name'),
	    'menu_name' => __('Category'),
	),
	'public' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'show_admin_column' => true,
    ));
    register_post_type('project', array(
	'label' => 'Project',
	'labels' => array(
	    'name' => 'Portfolio',
	    'singular_name' => 'Project',
	    'menu_name' => 'Portfolio',
	    'all_items' => 'Portfolio',
	    'add_new' => 'Add Project',
	    'add_new_item' => 'Add new Project',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Project',
	    'new_item' => 'New Project',
	),
	'description' => '',
	'public' => false,
	'publicly_queryable' => false,
	'show_ui' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'show_in_menu' => true,
	'exclude_from_search' => false,
	'capability_type' => 'post',
	'supports' => array('title', 'thumbnail'),
	'hierarchical' => false,
	'query_var' => true,
	'taxonomies' => array('projectcat'),
    ));
}
