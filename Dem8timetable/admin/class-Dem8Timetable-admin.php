<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Dem8Timetable
 * @subpackage Dem8Timetable/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dem8Timetable
 * @subpackage Dem8Timetable/admin
 * @author     Your Name <email@example.com>
 */
class Dem8Timetable_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Dem8Timetable    The ID of this plugin.
	 */
	private $Dem8Timetable;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Dem8Timetable       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Dem8Timetable, $version ) {

		$this->Dem8Timetable = $Dem8Timetable;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dem8Timetable_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dem8Timetable_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->Dem8Timetable, plugin_dir_url( __FILE__ ) . 'css/Dem8Timetable-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dem8Timetable_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dem8Timetable_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->Dem8Timetable, plugin_dir_url( __FILE__ ) . 'js/Dem8Timetable-admin.js', array( 'jquery' ), $this->version, false );

	}

}
