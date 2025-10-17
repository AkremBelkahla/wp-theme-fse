<?php
/**
 * Block Variations
 *
 * @package MinimalFSE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enregistrer les variations de blocs personnalisées
 */
function minimalfse_register_block_variations() {
    // Assurez-vous que les scripts sont chargés uniquement dans l'éditeur
    if ( ! is_admin() ) {
        return;
    }

    wp_register_script(
        'minimalfse-block-variations',
        get_theme_file_uri( '/assets/js/block-variations.js' ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        MINIMALFSE_VERSION,
        true
    );

    wp_enqueue_script( 'minimalfse-block-variations' );
}
add_action( 'enqueue_block_editor_assets', 'minimalfse_register_block_variations' );
