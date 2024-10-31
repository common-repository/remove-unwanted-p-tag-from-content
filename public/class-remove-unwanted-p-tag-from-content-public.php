<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://chetansatasiya.com
 * @since      1.0.0
 *
 * @package    Remove_Unwanted_P_Tag_From_Content
 * @subpackage Remove_Unwanted_P_Tag_From_Content/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Remove_Unwanted_P_Tag_From_Content
 * @subpackage Remove_Unwanted_P_Tag_From_Content/public
 * @author     Chetan Satasiya <info@chetansatasiya.com>
 */
class Remove_Unwanted_P_Tag_From_Content_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of the plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Remove_Unwanted_P_Tag_From_Content_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Remove_Unwanted_P_Tag_From_Content_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/remove-unwanted-p-tag-from-content-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Remove_Unwanted_P_Tag_From_Content_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Remove_Unwanted_P_Tag_From_Content_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/remove-unwanted-p-tag-from-content-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * @param $content
	 *
	 * @author  Chetan Satasiya
	 * @since   1.0.0
	 * @return mixed    Post content
	 */
	public function cs_remove_unwanted_empty_p_tag( $content ) {
		$content = force_balance_tags( $content );

		return preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	}

}
