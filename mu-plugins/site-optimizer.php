<?php
/*
 * Plugin Name: Site Optimizer
 * Plugin URI:  https://mizner.io
 * Version:     0.1
 * Description: Make Wordpress a little better
 * Author:      Michael Mizner
 * Author URI:  https://mizner.io
 * License:     GPL
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Keep Core Updated
add_filter( 'auto_update_core', '__return_true' );

// Plugins to keep updated
function auto_update_specific_plugins ( $update, $item ) {
    // Array of plugin slugs to always auto-update
    $plugins = array (
        'akismet',
        'jetpack',
        'postmark-approved-wordpress-plugin',
        'woocommerce',
        'wordpress-seo',
        'gravityforms',
        'wpclef'
    );
    if ( in_array( $item->slug, $plugins ) ) {
        return true; // Always update plugins in this array
    } else {
        return $update; // Else, use the normal API response to decide whether to update or not
    }
}
add_filter( 'auto_update_plugin', 'auto_update_specific_plugins', 10, 2 );


// directly from https://wordpress.org/plugins/disable-emojis/
/**
 * Disable the emoji's
 */
function tiny_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'tiny_disable_emojis_tinymce' );
}





