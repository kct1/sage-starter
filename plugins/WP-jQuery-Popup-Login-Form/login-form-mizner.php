<?php
/*
Plugin Name: Popup Login
Description: Creates login link on a menu named "primary" then creates a flexbox popup login form
Version: 1.0.6
Author: Michael Mizner
Author URI: http://mizner.io
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function your_function() {
	echo '<div id="loginContainer">';
    wp_login_form( 
    $args = array(
		'echo'           => true,
		'remember'       => true,
		'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		'form_id'        => 'loginForm',
		'id_username'    => 'user_login',
		'id_password'    => 'user_pass',
		'id_remember'    => 'rememberme',
		'id_submit'      => 'wp-submit',
		'label_username' => __( '' ),
		'label_password' => __( '' ),
		'label_remember' => __( 'Remember Me' ),
		'label_log_in'   => __( 'Log In' ),
		'value_username' => '',
		'value_remember' => false
		)
     );
    echo "</div>";
}
add_action( 'wp_footer', 'your_function', 100 );

// Add Login & Logout
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary_navigation') {
        $items .= '<li><a href="'. wp_logout_url() .'">Logout</a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary_navigation') {
        $items .= '<li><a id="loginLink" href="#">Login</a></li>';
    }
    return $items;
}

// On logout go to homepage
add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}
// Add Forgot Password Link
add_action( 'login_form_bottom', 'add_lost_password_link' );
function add_lost_password_link() {
	return '<a href="/wp-login.php?action=lostpassword">Lost Password?</a>';
}



/**
 * Load Scripts for Plugin
 */
function login_form_scripts() {
	wp_enqueue_style( 'loginFormCSS', plugins_url('loginform.css', __FILE__));
	wp_enqueue_script( 'loginFormJS', plugins_url('loginform.js', __FILE__), array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'login_form_scripts' );
