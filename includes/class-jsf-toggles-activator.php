<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/breakerh/
 * @since      1.0.0
 *
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/includes
 * @author     Bram Hammer <bhammer93@gmail.com>
 */
class Jsf_Toggles_Activator {

	/**
	 * Set basic options.
	 *
	 * Set basic wp_options for caret and initial state.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

        if(get_option(JSF_PREPEND.'icon', null )!==null)
            add_option( JSF_PREPEND.'icon', ['Chevron','f078'] );

        if(get_option(JSF_PREPEND.'font_family', null )!==null)
            add_option( JSF_PREPEND.'font_family', 'FontAwesome' );

        if(!get_option(JSF_PREPEND.'icon_type', null )!==null)
            add_option( JSF_PREPEND.'icon_type', 'absolute' );

        if(!get_option(JSF_PREPEND.'icon_ease', null )!==null)
            add_option( JSF_PREPEND.'icon_ease', true );

        if(!get_option(JSF_PREPEND.'icon_rotate', null )!==null)
            add_option( JSF_PREPEND.'icon_rotate', true );

        if(!get_option(JSF_PREPEND.'icon_space', null )!==null)
            add_option( JSF_PREPEND.'icon_space', '20px' );

        if(!get_option(JSF_PREPEND.'state', null )!==null)
            add_option( JSF_PREPEND.'state', 'closed' );

        if(!get_option(JSF_PREPEND.'background', null )!==null)
            add_option( JSF_PREPEND.'background', 'inherit' );

	}

}
