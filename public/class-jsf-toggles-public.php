<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/breakerh/
 * @since      1.0.0
 *
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Jsf_Toggles
 * @subpackage Jsf_Toggles/public
 * @author     Bram Hammer <bhammer93@gmail.com>
 */
class Jsf_Toggles_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private string $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private string $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( string $plugin_name, string $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

    /**
     * Load all css variables and add them to the head..
     *
     * @since    1.0.0
     */
    public function add_css_variables() {

        $icon = get_option(JSF_PREPEND.'icon', ['Chevron','f078'] );
        $type = get_option(JSF_PREPEND.'icon_type', 'absolute' );
        ob_start(); ?>
        <style>
            :root {
                --jsf-toggle-content: <?php echo is_array($icon)?$icon[1]:$icon; ?>;
                --jsf-toggle-family: <?php echo get_option(JSF_PREPEND.'font_family', 'FontAwesome' ); ?>;
                --jsf-toggle-icon-type: <?php echo $type==='absolute'?'absolute':'unset'; ?>;
                --jsf-toggle-icon-type2: <?php echo $type!=='absolute'?$type:'unset'; ?>;
                --jsf-toggle-icon-mr: <?php echo $type==='absolute'?'inherit':get_option(JSF_PREPEND.'icon_space', '20px' ); ?>;
                --jsf-toggle-icon-pr: <?php echo $type==='absolute'?get_option(JSF_PREPEND.'icon_space', '20px' ):'inherit'; ?>;
                --jsf-toggle-icon-ease: <?php echo get_option(JSF_PREPEND.'ease', true )?'all .4s ease':'unset'; ?>;
                --jsf-toggle-icon-collapsed: <?php echo get_option(JSF_PREPEND.'icon_rotate', true )?'rotate(180deg)':'rotate(0deg)'; ?>;
                --jsf-toggle-background: <?php echo get_option(JSF_PREPEND.'background', 'inherit' ); ?>;
            }
        </style>
        <?php
        echo ob_get_clean();

    }

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/jsf-toggles-public.css', [], $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jsf-toggles-public.js', ['jquery'], $this->version, false );

	}

}
