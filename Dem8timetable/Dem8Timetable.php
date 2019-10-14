<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.mercurylab.org/
 * @since             1.0.0
 * @package           Dem8timetable
 *
 * @wordpress-plugin
 * Plugin Name:       Dem8timetable
 * Plugin URI:        https://github.com/DevinVinson/WordPress-Plugin-Boilerplate
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area. Based on WordPress Plugin Boilerplate
 * Version:           1.2.0
 * Author:            Han Gao
 * Author URI:        https://www.mercurylab.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Dem8timetable
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'SYET_PATH', plugin_dir_path( __FILE__ ) );
define( 'SYET_URL', plugin_dir_url( __FILE__ ) );

add_filter('widget_text', 'do_shortcode');
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'Dem8timetable', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-Dem8Timetable-activator.php
 */
function activate_Dem8Timetable() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-Dem8Timetable-activator.php';
	Dem8Timetable_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-Dem8Timetable-deactivator.php
 */
function deactivate_Dem8Timetable() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-Dem8Timetable-deactivator.php';
	Dem8Timetable_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Dem8Timetable' );
register_deactivation_hook( __FILE__, 'deactivate_Dem8Timetable' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-Dem8Timetable.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Dem8Timetable() {

	$plugin = new Dem8Timetable();
	$plugin->run();

}
run_Dem8Timetable();

function Dem8timetable( $content = null ){
    $content = do_shortcode($content);
    
    ob_start();

    displayDem8($content );
    $output = do_shortcode(ob_get_contents());
    ob_end_clean();
    
    return $output;	
}

add_action('wp_ajax_timetable_searchDem8ByTalk', 'timetable_searchDem8ByTalk');
add_action('wp_ajax_nopriv_timetable_searchDem8ByTalk', 'timetable_searchDem8ByTalk');
function timetable_searchDem8ByTalk() {
	// $data = $_POST["keyword"];
	// $response = json_decode($data);
	// header("Content-Type: application/json");
	// wp_send_json($response);
// -------------------------------------------- above works

	// $data = sanitize_post_field('action', $_POST['action'], $_POST['keyword']);
	// // $data["id"] = intval($_POST["id"]);
	// // $data["id"] = sanitize_post_field('id', $data['id'], $data['id'], 'db');

	// // require_once SYET_PATH . 'admin/class-easy-timetable-admin.php';
	// // $result = Dem8Timetable_Public::dem8_search($_POST);
	// // //var_dump($save);
	// // return $result;
	// // $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
	$keyword = isset($_POST['keyword_talk']) ? $_POST['keyword_talk'] : '';
	// echo $_POST['keyword'];
	// $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
    if ($keyword) {
        // $search = (new Session())->search($keyword);
        $result = Dem8Timetable_Public::dem8_searchByTalk($keyword);
        // $result = "success";
    } else {
        // $search = (new Session())->searchAll();
        $result = Dem8Timetable_Public::dem8_searchAll();
         // $result = "success"; 
    }
    // echo json_encode($result);
    // header("Content-Type: application/json");
    wp_send_json($result);
    // return $result;
    // echo json_encode("success");
    // wp_send_json($keyword);
    wp_die();
    // die();
}

add_action('wp_ajax_timetable_searchDem8ByAuthor', 'timetable_searchDem8ByAuthor');
add_action('wp_ajax_nopriv_timetable_searchDem8ByAuthor', 'timetable_searchDem8ByAuthor');
function timetable_searchDem8ByAuthor() {
	$keyword = isset($_POST['keyword_author']) ? $_POST['keyword_author'] : '';

    if ($keyword) {
        $result = Dem8Timetable_Public::dem8_searchByPresenter($keyword);
    } else {
        $result = Dem8Timetable_Public::dem8_searchAll();
    }
    wp_send_json($result);
    wp_die();
}



function displayDem8($content ){
	
	require_once SYET_PATH . 'public/class-Dem8Timetable-public.php';
	$display = Dem8Timetable_Public::dem8_display($content);
}

function register_shortcodes(){

   add_shortcode('Dem8timetable', 'Dem8timetable');
}

add_action( 'init', 'register_shortcodes');