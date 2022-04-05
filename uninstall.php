<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://github.com/breakerh/
 * @since      1.0.0
 *
 * @package    Jsf_Toggles
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) || !WP_UNISTALL_PLUGIN || dirname( WP_UNINSTALL_PLUGIN ) != dirname( plugin_basename( __FILE__ ) ) ) {
	if ( ! headers_sent() )
        status_header( 404 );
    exit;
}

//@todo: remove added wp_options settings