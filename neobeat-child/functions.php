<?php

if ( ! function_exists( 'neobeat_child_theme_enqueue_scripts' ) ) {
	/**
	 * Function that enqueue theme's child style
	 */
	function neobeat_child_theme_enqueue_scripts() {
		$main_style = 'neobeat-main';
		
		wp_enqueue_style( 'neobeat-child-style', get_stylesheet_directory_uri() . '/style.css', array( $main_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'neobeat_child_theme_enqueue_scripts' );
}