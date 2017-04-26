<?php
/**
 * Plugin Name: Mint Slate Custom Templates
 * Plugin URI: http://www.mintslate.com
 * Description: A Plugin that loads Mint Slate Templates
 * Version: 1.0
 * Author: Mint Slate
 * Author URI: http://www.mintslate.com
 */
define( 'FL_TEMPLATES_PWS_DIR', plugin_dir_path( __FILE__ ) );
define( 'FL_TEMPLATES_PWS_URL', plugins_url( '/', __FILE__ ) );

function fl_templates_mint_load() {

	/**
	 * If Beaver Builder is not installed or the version of
	 * Beaver Builder doesn't support registering templates it returns.
	 */
	if ( ! class_exists( 'FLBuilder' ) || ! method_exists( 'FLBuilder', 'register_templates' ) ) {
		return;
	}

	/**
	 * Register the .dat file.
	 */
	FLBuilder::register_templates( FL_TEMPLATES_PWS_DIR . 'data/templates.dat' );
}

add_action( 'plugins_loaded', 'fl_templates_mint_load' );
