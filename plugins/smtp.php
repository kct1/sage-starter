<?php
/*
* Plugin Name:       SMTP - Postmark
* Plugin URI:        http://mizner.io
* Description:       Simple PHPMailer Plugin for SMTP (i.e. make WordPress emails work)
* Version:           1.0
* Author:            Michael Mizner
* Author URI:        http://mizner.io
* Text Domain:       smtp
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'phpmailer_init', 'my_phpmailer_knoxweb' );
function my_phpmailer_knoxweb( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.postmarkapp.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 2525;
    $phpmailer->Username = '709120c9-f000-442f-a610-c75634dd3a88';
    $phpmailer->Password = '709120c9-f000-442f-a610-c75634dd3a88';

    // Additional settings…
    //$phpmailer->SMTPSecure = "SSL"; // Choose SSL or TLS, if necessary for your server
    $phpmailer->From = "no-reply@knoxweb.com";
    $phpmailer->FromName = "Site Name";
}

// ** EMAIL: FORCE HTML **
// -- forces email to send as html
add_filter( 'wp_mail_content_type', function( $content_type ) {
    return 'text/html';
});