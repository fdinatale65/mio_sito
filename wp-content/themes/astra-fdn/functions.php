<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Carica il CSS del Child Theme
 */

function astra_fdn_enqueue_styles() {

    wp_enqueue_style(
        'astra-parent',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'astra-child',
        get_stylesheet_uri(),
        array('astra-parent'),
        wp_get_theme()->get('Version')
    );

}

add_action('wp_enqueue_scripts', 'astra_fdn_enqueue_styles');