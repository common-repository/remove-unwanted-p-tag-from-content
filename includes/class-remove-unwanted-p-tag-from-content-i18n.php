<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://chetansatasiya.com
 * @since      1.0.0
 *
 * @package    Remove_Unwanted_P_Tag_From_Content
 * @subpackage Remove_Unwanted_P_Tag_From_Content/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Remove_Unwanted_P_Tag_From_Content
 * @subpackage Remove_Unwanted_P_Tag_From_Content/includes
 * @author     Chetan Satasiya <info@chetansatasiya.com>
 */
class Remove_Unwanted_P_Tag_From_Content_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'remove-unwanted-p-tag-from-content',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
