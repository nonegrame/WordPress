<?php
/**
 * Front to the CM5 application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells CM5 to load the theme.
 *
 * @package CM5
 */

/**
 * Tells CM5 to load the CM5 theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the CM5 Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
