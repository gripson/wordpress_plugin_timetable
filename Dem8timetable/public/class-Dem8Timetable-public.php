<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Dem8timetable
 * @subpackage Dem8timetable/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Dem8timetable
 * @subpackage Dem8timetable/public
 * @author     Your Name <email@example.com>
 */
class Dem8Timetable_Public {

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
	 * @param      string    $Dem8Timetable       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Dem8Timetable, $version ) {

		$this->Dem8Timetable = $Dem8Timetable;
		$this->version = $version;

	}

	public static function dem8_display($content)
	{			
		require_once SYET_PATH . 'public/controller/Dem8TimetableController.php';
		$controller = Dem8TimetableController::dem8_display($content);
		return $controller;
	}

	public static function dem8_searchByTalk($keyword)
	{			
		require_once SYET_PATH . 'public/controller/Dem8TimetableController.php';
		$controller = Dem8TimetableController::dem8_searchByTalk($keyword);
		// return $controller;
		return $controller;
		// echo json_encode(array('success'=> true));
	}

	public static function dem8_searchByPresenter($keyword)
	{			
		require_once SYET_PATH . 'public/controller/Dem8TimetableController.php';
		$controller = Dem8TimetableController::dem8_searchByPresenter($keyword);
		// return $controller;
		return $controller;
		// echo json_encode(array('success'=> true));
	}

	public static function dem8_searchAll()
	{			
		require_once SYET_PATH . 'public/controller/Dem8TimetableController.php';
		$controller = Dem8TimetableController::dem8_searchAll();
		return $controller;
		// echo json_encode($controller);
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
		 * defined in Dem8Timetable_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dem8Timetable_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->Dem8Timetable, plugin_dir_url( __FILE__ ) . 'css/Dem8Timetable-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->Dem8Timetable. "bootstrap", plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
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
		 * defined in Dem8Timetable_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dem8Timetable_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->Dem8Timetable, plugin_dir_url( __FILE__ ) . 'js/Dem8Timetable-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->Dem8Timetable. "jquery3.2.1", plugin_dir_url( __FILE__ ) . 'js/jquery-3.2.1.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->Dem8Timetable. "popper", plugin_dir_url( __FILE__ ) . 'js/popper.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->Dem8Timetable. "bootstrap", plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->Dem8Timetable, plugin_dir_url( __FILE__ ) . 'js/Dem8timetable-public.js', array('jquery') );
		wp_localize_script( $this->Dem8Timetable, 'MyAjax_obj', array('ajaxurl' =>admin_url( 'admin-ajax.php')));

		// wp_enqueue_script('MyAjax');
	}

}
