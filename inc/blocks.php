<?php
/**
 * Blocks Registration
 *
 * @package MinimalFSE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enregistrer les blocs personnalisés
 */
function minimalfse_register_blocks() {
    // Vérifier si la fonction register_block_type existe (WordPress 5.8+)
    if ( ! function_exists( 'register_block_type' ) ) {
        return;
    }

    // Enregistrer automatiquement tous les blocs dans le dossier 'blocks'
    $block_directories = glob( get_template_directory() . '/blocks/*', GLOB_ONLYDIR );
    
    if ( empty( $block_directories ) ) {
        return;
    }

    foreach ( $block_directories as $block_dir ) {
        $block_json_file = $block_dir . '/block.json';
        
        if ( file_exists( $block_json_file ) ) {
            register_block_type( $block_json_file );
        }
    }
}
add_action( 'init', 'minimalfse_register_blocks' );

/**
 * Enregistrer les catégories de blocs personnalisées
 */
function minimalfse_register_block_categories( $categories ) {
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'minimalfse',
                'title' => __( 'MinimalFSE', 'minimalfse' ),
                'icon'  => 'star-filled',
            ],
        ]
    );
}
add_filter( 'block_categories_all', 'minimalfse_register_block_categories', 10, 1 );

/**
 * Enregistrer les styles de blocs personnalisés
 */
function minimalfse_register_block_pattern_categories() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'minimalfse',
            [ 'label' => __( 'MinimalFSE', 'minimalfse' ) ]
        );
        
        register_block_pattern_category(
            'minimalfse-header',
            [ 'label' => __( 'En-têtes', 'minimalfse' ) ]
        );
        
        register_block_pattern_category(
            'minimalfse-footer',
            [ 'label' => __( 'Pieds de page', 'minimalfse' ) ]
        );
        
        register_block_pattern_category(
            'minimalfse-cta',
            [ 'label' => __( 'Appels à l\'action', 'minimalfse' ) ]
        );
        
        register_block_pattern_category(
            'minimalfse-services',
            [ 'label' => __( 'Services', 'minimalfse' ) ]
        );
    }
}
add_action( 'init', 'minimalfse_register_block_pattern_categories', 9 );

/**
 * Enregistrer les modèles de blocs (patterns)
 */
function minimalfse_register_block_patterns() {
    if ( function_exists( 'register_block_pattern' ) ) {
        $pattern_files = glob( get_template_directory() . '/patterns/*.php' );
        
        if ( ! empty( $pattern_files ) ) {
            foreach ( $pattern_files as $pattern_file ) {
                include $pattern_file;
            }
        }
    }
}
add_action( 'init', 'minimalfse_register_block_patterns', 10 );
