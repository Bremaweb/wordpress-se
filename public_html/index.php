<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

$dir = dirname(dirname(__FILE__));

define( 'WP_DIR', $dir );
define( 'WP_INCLUDES', WP_DIR . '/wp-includes' );
define( 'WP_CONTENT', WP_DIR . '/wp-content' );

/** Loads the WordPress Environment and Template */
require WP_DIR . '/wp-blog-header.php';
