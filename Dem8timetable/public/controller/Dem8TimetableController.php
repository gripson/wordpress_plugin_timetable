<?php 
/**
 * Provide public display
 *
 *
 * @link       http://www.stereonomy.com
 * @since      1.0.0
 *
 * @package    Dem8timetable
 * @subpackage Dem8timetable/public/controller
 */

if (!defined('WPINC')){die;}

class Dem8TimetableController {

	public function __construct() {
  	}

  	public static function dem8_display($content) {
		require_once SYET_PATH . "public/models/Dem8TimetableModel.php";
	    $model = new Dem8TimetableModel();
	    $themesForView = $model->dem8_displayThemes();
 		$sessionsForView = $model->dem8_displaySessions();
  		$talksForView = $model->dem8_displayTalks();
  		$peopleForView = $model->dem8_displayPeople();
  		$sortSessionsByDateForView = $model->dem8_displaySortSessionsByDate();

	    require_once SYET_PATH . "public/views/Dem8TimetableView.php";
	    $view = new Dem8TimetableView($model);
	    $view->dem8_display($themesForView, $sessionsForView, $talksForView, $peopleForView, $sortSessionsByDateForView, $content);
  	}


  	public static function dem8_searchByTalk($keyword) {
  		// check_ajax_referer('nonce_easytimetable', 'saveSecurity');
	    require_once SYET_PATH . "public/models/Dem8TimetableModel.php";
	    $model = new Dem8TimetableModel();
	    $searchResult = $model->dem8_searchByTalk($keyword);

	    // echo json_decode($searchResult);
	    return $searchResult;
	    // echo json_encode(array('success'=> true));

  	}

	public static function dem8_searchByPresenter($keyword) {
  		// check_ajax_referer('nonce_easytimetable', 'saveSecurity');
	    require_once SYET_PATH . "public/models/Dem8TimetableModel.php";
	    $model = new Dem8TimetableModel();
	    $searchResult = $model->dem8_searchByPresenter($keyword);

	    // echo json_decode($searchResult);
	    return $searchResult;
	    // echo json_encode(array('success'=> true));

  	}

	public static function dem8_searchAll() {
  		// check_ajax_referer('nonce_easytimetable', 'saveSecurity');
	    require_once SYET_PATH . "public/models/Dem8TimetableModel.php";
	    $model = new Dem8TimetableModel();
	    $searchResult = $model->dem8_searchAll();

	    // echo json_decode($searchResult);
	    return $searchResult;
	    // return "success";
	    // echo json_encode(array('success'=> true));
  	}

}

?>