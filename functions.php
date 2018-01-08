<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since	0.1.0
 * @package z-child
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'z_child_enqueue_styles' ) ) {
	/**
	 * Enqueue Styles.
	 *
	 * Enqueue parent style and child styles where parent are the dependency
	 * for child styles so that parent styles always get enqueued first.
	 *
	 * @since 0.1.0
	 */
	function z_child_enqueue_styles() {
		// Parent style variable.
		$parent_style = 'parent-style';
		// Enqueue Parent theme's stylesheet.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		// Enqueue Child theme's stylesheet.
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
  // Add enqueue function to the desired action.
  add_action( 'wp_enqueue_scripts', 'z_child_enqueue_styles' );
}
