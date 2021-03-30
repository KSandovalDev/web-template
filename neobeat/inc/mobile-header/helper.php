<?php

if ( ! function_exists( 'neobeat_load_page_mobile_header' ) ) {
	/**
	 * Function which loads page template module
	 */
	function neobeat_load_page_mobile_header() {
		// Include mobile header template
		echo apply_filters( 'neobeat_filter_mobile_header_template', neobeat_get_template_part( 'mobile-header', 'templates/mobile-header' ) );
	}
	
	add_action( 'neobeat_action_page_header_template', 'neobeat_load_page_mobile_header' );
}

if ( ! function_exists( 'neobeat_register_mobile_navigation_menus' ) ) {
	/**
	 * Function which registers navigation menus
	 */
	function neobeat_register_mobile_navigation_menus() {
		$navigation_menus = apply_filters( 'neobeat_filter_register_mobile_navigation_menus', array( 'mobile-navigation' => esc_html__( 'Mobile Navigation', 'neobeat' ) ) );
		
		if ( ! empty( $navigation_menus ) ) {
			register_nav_menus( $navigation_menus );
		}
	}
	
	add_action( 'neobeat_action_after_include_modules', 'neobeat_register_mobile_navigation_menus' );
}