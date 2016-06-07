<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
	'lib/assets.php',    // Scripts and stylesheets
	'lib/extras.php',    // Custom functions
	'lib/setup.php',     // Theme setup
	'lib/titles.php',    // Page titles
	'lib/wrapper.php',   // Theme wrapper class
	'lib/customizer.php', // Theme customizer
	'lib/acf.php', // Include ACF
	'/lib/gravityforms.php', // Gravity Forms Support
	'/lib/woocommerce.php', // WooCommerce Support

];

foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}

	require_once $filepath;
}
unset( $file, $filepath );

/*
 *  Add Plugins (They're basically theme extensions)
 *  Note, how much ACF (Advanced Custom Fields) is responsible for the layout:
 *  It is also included in the theme, but updating it will have to happen manually
 */
include_once( get_template_directory() . '/plugins/rootstheme-roots-wrapper-override/roots-wrapper-override.php' );
include_once( get_template_directory() . '/plugins/roots-share-buttons/share-buttons.php' );
include_once( get_template_directory() . '/plugins/soil-master/soil.php' );

// Get custom search form
function roots_get_search_form( $form ) {
	ob_start();
	locate_template( '/templates/searchform.php', true, false );
	$form = ob_get_clean();

	return $form;
}

add_filter( 'get_search_form', 'roots_get_search_form' );



/*
 * Custom Logo enabled in setup.php
 * This function checks for a logo set via Customize.
 * If none is set, will default to a .png file in the theme.
 */
function sage_logo() {
	if ( get_theme_mod( 'custom_logo' ) ):
		echo get_custom_logo();
	else:
		$theme_folder_logo = get_template_directory_uri() . '/assets/images/logo.png';
		$alt_site_name     = get_bloginfo( 'name' );
		$a_tag_start =  esc_url( home_url( '/' ) );
		echo "<a class='navbar-brand' href='{$a_tag_start}'>";
		echo "<img src='{$theme_folder_logo}' alt='{$alt_site_name}'>";
		echo "</a>";
	endif;
}


// Content Width
function sage_content_width($width) {
	$GLOBALS['content_width'] = apply_filters( 'powell_content_width', $width );
}
sage_content_width(1200);



