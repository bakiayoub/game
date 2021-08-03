<?php

if ( ! function_exists( 'playerx_edge_register_header_standard_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function playerx_edge_register_header_standard_type( $header_types ) {
		$header_type = array(
			'header-standard' => 'PlayerxEdgeNamespace\Modules\Header\Types\HeaderStandard'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'playerx_edge_init_register_header_standard_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function playerx_edge_init_register_header_standard_type() {
		add_filter( 'playerx_edge_filter_register_header_type_class', 'playerx_edge_register_header_standard_type' );
	}
	
	add_action( 'playerx_edge_action_before_header_function_init', 'playerx_edge_init_register_header_standard_type' );
}