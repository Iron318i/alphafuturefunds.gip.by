<?php

/**
 * Declaring widgets
 *
 * @package Pocket-Monster
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
 * Add filter to the parameters passed to a widget's display callback.
 * The filter is evaluated on both the front and the back end!
 *
 * @link https://developer.wordpress.org/reference/hooks/dynamic_sidebar_params/
 */
add_action('widgets_init', 'pocketmonster_widgets_init');

if (!function_exists('pocketmonster_widgets_init')) {

    /**
     * Initializes themes widgets.
     */
    function pocketmonster_widgets_init() {

	register_sidebar(
		array(
		    'name' => __('Footer 1', 'pocketmonster'),
		    'id' => 'footer-1',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Footer 2', 'pocketmonster'),
		    'id' => 'footer-2',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
	register_sidebar(
		array(
		    'name' => __('Footer 3', 'pocketmonster'),
		    'id' => 'footer-3',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h5 class="widget-title">',
		    'after_title' => '</h5>',
		)
	);
    }

} // End of function_exists( 'pocketmonster_widgets_init' ).
