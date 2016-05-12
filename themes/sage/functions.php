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
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add Plugins
include_once( get_stylesheet_directory() . '/plugins/rootstheme-roots-wrapper-override/roots-wrapper-override.php' );
include_once( get_stylesheet_directory() . '/plugins/roots-share-buttons/share-buttons.php' );
include_once( get_stylesheet_directory() . '/plugins/soil-master/soil.php' );

// Get custom search form
function roots_get_search_form($form) {
    ob_start();
    locate_template('/templates/searchform.php', true, false);
    $form = ob_get_clean();

    return $form;
}
add_filter('get_search_form', 'roots_get_search_form');

// WooCommerce Support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-clean-up');






