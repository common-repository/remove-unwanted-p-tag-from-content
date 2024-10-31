<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://chetansatasiya.com
 * @since             1.0.0
 * @package           Remove_Unwanted_P_Tag_From_Content
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Unwanted P tag from content
 * Plugin URI:        http://chetansatasiya.com
 * Description:       This plugin will remove the unwanted p tag from the content.
 * Version:           1.0.2
 * Author:            Chetan Satasiya
 * Author URI:        http://chetansatasiya.com/blog
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-unwanted-p-tag-from-content
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-remove-unwanted-p-tag-from-content-activator.php
 */
function activate_remove_unwanted_p_tag_from_content() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-unwanted-p-tag-from-content-activator.php';
	Remove_Unwanted_P_Tag_From_Content_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-remove-unwanted-p-tag-from-content-deactivator.php
 */
function deactivate_remove_unwanted_p_tag_from_content() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-unwanted-p-tag-from-content-deactivator.php';
	Remove_Unwanted_P_Tag_From_Content_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_remove_unwanted_p_tag_from_content' );
register_deactivation_hook( __FILE__, 'deactivate_remove_unwanted_p_tag_from_content' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-remove-unwanted-p-tag-from-content.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_remove_unwanted_p_tag_from_content() {

	$plugin = new Remove_Unwanted_P_Tag_From_Content();
	$plugin->run();

}
run_remove_unwanted_p_tag_from_content();
