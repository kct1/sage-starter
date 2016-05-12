<?php
/*
 * Plugin Name: Admin Privs
 * Plugin URI:  https://mizner.io
 * Version:     0.1
 * Description: Make Wordpress a little better
 * Author:      Michael Mizner
 * Author URI:  https://mizner.io
 * License:     GPL
 */

// Disable Theme & Plugin Editor


if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


function mizthang() {
	if ( ! current_user_can( 'administrator' ) ) {
		if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
			define( 'DISALLOW_FILE_EDIT', true );
		}
	}
}

add_action( 'pre_user_query', 'mizthang' );

