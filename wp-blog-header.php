<?php
/**
 * Loads the CM5 environment and template.
 *
 * @package CM5
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the CM5 library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the CM5 query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
