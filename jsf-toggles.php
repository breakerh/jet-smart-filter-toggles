<?php

/**
 * Bootstrap file, load all the things!!
 *
 * @link              https://github.com/breakerh/
 * @since             1.0.0
 * @package           Jsf_Toggles
 *
 * @wordpress-plugin
 * Plugin Name:       Jet Smart Filter - Toggles
 * Plugin URI:        https://github.com/breakerh/jet-smart-filter-toggles
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bram Hammer
 * Author URI:        https://github.com/breakerh/
 * License:           GPL-3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       jsf-toggles
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'JSF_TOGGLES_VERSION', '1.0.0' );
define( 'JSF_PREPEND', 'JSF_TOGGLE_' );
define( 'JSF_CSS_PREPEND', 'jsf-toggle-' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jsf-toggles-activator.php
 */
function activate_jsf_toggles() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsf-toggles-activator.php';
	Jsf_Toggles_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jsf-toggles-deactivator.php
 */
function deactivate_jsf_toggles() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsf-toggles-deactivator.php';
	Jsf_Toggles_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jsf_toggles' );
register_deactivation_hook( __FILE__, 'deactivate_jsf_toggles' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jsf-toggles.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jsf_toggles() {

	$plugin = new Jsf_Toggles();
	$plugin->run();

}
run_jsf_toggles();
