<?php

/**
 * Alpha-Future-Funds enqueue scripts
 *
 * @package Alpha-Future-Funds
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('alphafuturefunds_scripts')) {

    /**
     * Load theme's JavaScript and CSS sources.
     */
    function alphafuturefunds_scripts() {
	// Get the theme data.
	wp_enqueue_style('fonts-styles', 'https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Noticia+Text:wght@400;700&family=Unica+One&display=swap', [], null);
	$the_theme = wp_get_theme();
	$theme_version = $the_theme->get('Version');
	$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');

	wp_enqueue_style('alphafuturefunds-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

	$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('alphafuturefunds-scripts', get_template_directory_uri() . '/js/theme.js', array(), $js_version, true);
    }

} // End of if function_exists( 'alphafuturefunds_scripts' ).

add_action('wp_enqueue_scripts', 'alphafuturefunds_scripts');

add_action('wp_print_styles', 'deregister_styles', 100);

function deregister_styles() {
    wp_deregister_style('frontend_inline_style');
}
