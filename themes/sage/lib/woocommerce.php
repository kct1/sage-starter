<?php
// WooCommerce Support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

// WooCommerce Remove each style one by one
//add_filter( 'woocommerce_enqueue_styles', 'kill_woo_styles' );
//function kill_woo_styles( $enqueue_styles ) {
//    unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
//    unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
//    unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
//    return $enqueue_styles;
//}
