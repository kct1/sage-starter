<?php
/*
 * Plugin Name: Admin Privileges
 * Plugin URI:  https://mizner.io
 * Version:     0.1
 * Description: Custom Permissions
 * Author:      Michael Mizner
 * Author URI:  https://mizner.io
 * License:     GPL
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/** Hide Administrator From User List **/
function knox_pre_user_query($user_search) {
	$user = wp_get_current_user();
	if (!current_user_can('administrator')) { // Is Not Administrator - Remove Administrator
		global $wpdb;

		$user_search->query_where =
			str_replace('WHERE 1=1',
				"WHERE 1=1 AND {$wpdb->users}.ID IN (
                 SELECT {$wpdb->usermeta}.user_id FROM $wpdb->usermeta 
                    WHERE {$wpdb->usermeta}.meta_key = '{$wpdb->prefix}capabilities'
                    AND {$wpdb->usermeta}.meta_value NOT LIKE '%administrator%')",
				$user_search->query_where
			);
	}
}
add_action('pre_user_query','knox_pre_user_query');









function mizthang() {
	if ( !current_user_can( 'administrator' ) ) {
		// Disable Theme & Plugin Editor
		define( 'DISALLOW_FILE_EDIT', true);
	}
}

add_action( 'admin_head', 'mizthang' );

