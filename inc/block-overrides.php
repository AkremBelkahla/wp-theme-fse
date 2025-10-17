<?php
/**
 * Block Overrides
 *
 * @package MinimalFSE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enregistrer les surcharges de blocs natifs
 */
function minimalfse_register_block_overrides() {
    // Assurez-vous que les scripts sont chargés uniquement dans l'éditeur
    if ( ! is_admin() ) {
        return;
    }

    wp_register_script(
        'minimalfse-block-overrides',
        get_theme_file_uri( '/assets/js/block-overrides.js' ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post', 'wp-element', 'wp-components', 'wp-compose' ),
        MINIMALFSE_VERSION,
        true
    );

    wp_enqueue_script( 'minimalfse-block-overrides' );
}
add_action( 'enqueue_block_editor_assets', 'minimalfse_register_block_overrides' );

/**
 * Ajouter des styles personnalisés pour les blocs
 */
function minimalfse_register_block_styles() {
    // Styles pour le bloc Paragraphe
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'highlighted',
            'label'        => __( 'Mis en évidence', 'minimalfse' ),
            'inline_style' => '
                .is-style-highlighted {
                    background-color: var(--wp--preset--color--light);
                    padding: 1.5rem;
                    border-left: 4px solid var(--wp--preset--color--primary);
                }
            ',
        )
    );

    // Styles pour le bloc Groupe
    register_block_style(
        'core/group',
        array(
            'name'         => 'card',
            'label'        => __( 'Carte', 'minimalfse' ),
            'inline_style' => '
                .is-style-card {
                    background-color: var(--wp--preset--color--white);
                    border: 1px solid var(--wp--preset--color--light);
                    border-radius: 4px;
                    padding: 1.5rem;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                .is-style-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                }
            ',
        )
    );

    // Styles pour le bloc Image
    register_block_style(
        'core/image',
        array(
            'name'         => 'rounded',
            'label'        => __( 'Arrondie', 'minimalfse' ),
            'inline_style' => '
                .is-style-rounded img {
                    border-radius: 8px;
                }
            ',
        )
    );

    register_block_style(
        'core/image',
        array(
            'name'         => 'shadow',
            'label'        => __( 'Ombre', 'minimalfse' ),
            'inline_style' => '
                .is-style-shadow img {
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                }
            ',
        )
    );

    // Styles pour le bloc Bouton
    register_block_style(
        'core/button',
        array(
            'name'         => 'shadow',
            'label'        => __( 'Ombre', 'minimalfse' ),
            'inline_style' => '
                .is-style-shadow .wp-block-button__link {
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
                .is-style-shadow .wp-block-button__link:hover {
                    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
                }
            ',
        )
    );

    // Styles pour le bloc Citation
    register_block_style(
        'core/quote',
        array(
            'name'         => 'modern',
            'label'        => __( 'Moderne', 'minimalfse' ),
            'inline_style' => '
                .is-style-modern {
                    background-color: var(--wp--preset--color--light);
                    padding: 2rem;
                    border-radius: 4px;
                    border-left: 4px solid var(--wp--preset--color--primary);
                }
                .is-style-modern:before {
                    content: """;
                    font-size: 4rem;
                    color: var(--wp--preset--color--primary);
                    opacity: 0.2;
                    position: absolute;
                    top: 0.5rem;
                    left: 1rem;
                    font-family: serif;
                }
                .is-style-modern p {
                    position: relative;
                    z-index: 1;
                }
            ',
        )
    );

    // Styles pour le bloc Liste
    register_block_style(
        'core/list',
        array(
            'name'         => 'checked',
            'label'        => __( 'À cocher', 'minimalfse' ),
            'inline_style' => '
                .is-style-checked ul {
                    list-style: none;
                    padding-left: 1.5rem;
                }
                .is-style-checked ul li {
                    position: relative;
                    margin-bottom: 0.5rem;
                }
                .is-style-checked ul li:before {
                    content: "✓";
                    color: var(--wp--preset--color--primary);
                    font-weight: bold;
                    position: absolute;
                    left: -1.5rem;
                }
            ',
        )
    );
}
add_action( 'init', 'minimalfse_register_block_styles' );
