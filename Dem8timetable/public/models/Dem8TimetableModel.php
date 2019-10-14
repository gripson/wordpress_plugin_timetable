<?php 

/**
 * Provide Public display
 *
 *
 * @link       http://www.stereonomy.com
 * @since      1.0.0
 *
 * @package    Dem8timetable
 * @subpackage Dem8timetable/public/models
 */

if (!defined('WPINC')){die;}

class Dem8TimetableModel {

	function __construct()
	{

	}
	public static function dem8_displayThemes() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'theme';
        // $table_name = 'mlab_theme';
        $results = $wpdb->get_results(
            "
            SELECT *
            FROM $table_name
            WHERE theme_abbreviation !='Posters' AND theme_abbreviation !='Open-source'
            ORDER BY theme_abbreviation DESC
            ",ARRAY_A
        );
        return $results;
    }

    public static function dem8_displaySessions() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'session';
        // $table_name = 'mlab_session';
        $results = $wpdb->get_results(
            "
            SELECT * 
            FROM $table_name 
            ORDER BY session_name ASC
            ",
            ARRAY_A
        );
        return $results;
    }

	public static function dem8_displayTalks() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'talk';
        // $table_name = 'mlab_talk';
        $results = $wpdb->get_results(
            "
            SELECT *
            FROM $table_name
            ORDER BY talk_time ASC
            ",
            ARRAY_A
        );
        return $results;
    }

	public static function dem8_displayPeople() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'person';
        // $table_name = 'mlab_person';
        $results = $wpdb->get_results(
            "
            SELECT *
            FROM $table_name
            ",
            ARRAY_A
        );
        return $results;
    }

	public static function dem8_displaySortSessionsByDate() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'session';
        // $table_name = 'mlab_session';
        $results = $wpdb->get_results(
            "
            SELECT *
            FROM $table_name
            WHERE theme_abbreviation ='Plenary'
            ORDER BY date ASC
            ",
            ARRAY_A
        );
        return $results;
    }

    public static function dem8_searchByTalk($keyword) {
        global $wpdb;
        // $table_name = $wpdb->prefix . 'session';
        $search_text = "%" . $keyword . "%";
        $results = $wpdb->get_results(
            $wpdb->prepare( 
            "
            SELECT s.session_name, s.date, r.room_name, t.talk_name, t.talk_uuid, t.talk_time, p.person_name 
            FROM mlab_4_session AS s, mlab_4_room AS r, mlab_4_talk AS t, mlab_4_person AS p 
            WHERE s.session_uuid=t.session_uuid and t.presenter_uuid=p.person_uuid 
                  and s.room_uuid=r.room_uuid and talk_name like %s ORDER BY s.date ASC", 
            $search_text)  
        );

        // $results = $wpdb->get_results(
        //     "
        //     SELECT s.session_name, s.date, r.room_name, t.talk_name, p.person_name 
        //     FROM wp_session AS s, wp_room AS r, wp_talk AS t, wp_person AS p 
        //     WHERE s.session_uuid=t.session_uuid and t.presenter_uuid=p.person_uuid 
        //           and s.room_uuid=r.room_uuid and talk_name like %$keyword%
        //     ORDER BY s.date ASC;
        //     ",
        //     ARRAY_A
        // );

        return $results;
    }

    public static function dem8_searchByPresenter($keyword) {
        global $wpdb;
        // $table_name = $wpdb->prefix . 'session';
        $search_text = "%" . $keyword . "%";
        $results = $wpdb->get_results(
            $wpdb->prepare( 
            "
            SELECT s.session_name, s.date, r.room_name, t.talk_name, t.talk_uuid, t.talk_time, p.person_name 
            FROM mlab_4_session AS s, mlab_4_room AS r, mlab_4_talk AS t, mlab_4_person AS p 
            WHERE s.session_uuid=t.session_uuid and t.presenter_uuid=p.person_uuid 
                  and s.room_uuid=r.room_uuid and person_name like %s ORDER BY s.date ASC", 
            $search_text)  
        );
        return $results;
    }

    public static function dem8_searchAll() {
        global $wpdb;
        // $table_name = $wpdb->prefix . 'session';
        $results = $wpdb->get_results(
            "
            SELECT s.session_name, s.date, r.room_name, t.talk_name, t.talk_uuid, t.talk_time, p.person_name 
            FROM mlab_4_session s, mlab_4_room r, mlab_4_talk t, mlab_4_person p 
            WHERE s.session_uuid=t.session_uuid and t.presenter_uuid=p.person_uuid 
                  and s.room_uuid=r.room_uuid
            ORDER BY s.date ASC;
            ",
            ARRAY_A
        );
        // $table_name = $wpdb->prefix . 'session';
        // $results = $wpdb->get_results(
        //     "
        //     SELECT *
        //     FROM $table_name
        //     WHERE theme_abbreviation ='Plenary'
        //     ORDER BY date ASC
        //     ",
        //     ARRAY_A
        // );
        return $results;
    }

}
?>