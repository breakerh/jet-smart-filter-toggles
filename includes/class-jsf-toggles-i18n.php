<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/breakerh/
 * @since      1.0.0
 *
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/includes
 * @author     Bram Hammer <bhammer93@gmail.com>
 */
class Jsf_Toggles_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'jsf-toggles',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
