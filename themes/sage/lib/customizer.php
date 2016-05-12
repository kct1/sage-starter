<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    // Add Social Media Section
    // Example
    $wp_customize->add_section(
        'owner-info',
        array(
            'title' => 'Information',
            'description' => 'Enter details here.',
            'priority' => 55,
        )
    );
    $wp_customize->add_setting(
        'phone'
    );
    $wp_customize->add_control(
        'phone',
        array(
            'label' => 'Phone',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'facebook'
    );
    $wp_customize->add_control(
        'facebook',
        array(
            'label' => 'Facebook',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'twitter'
    );
    $wp_customize->add_control(
        'twitter',
        array(
            'label' => 'Twitter',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'instagram'
    );
    $wp_customize->add_control(
        'instagram',
        array(
            'label' => 'Instagram',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'google'
    );
    $wp_customize->add_control(
        'google',
        array(
            'label' => 'Google',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'pinterest'
    );
    $wp_customize->add_control(
        'pinterest',
        array(
            'label' => 'Pinterest',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'linkedin'
    );
    $wp_customize->add_control(
        'linkedin',
        array(
            'label' => 'Linked In',
            'section' => 'owner-info',
            'type' => 'text',
        )
    );

}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
