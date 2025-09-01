<?php
/**
 * ACF Blocks Registration
 *
 * @package MinimalFSE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Vérifier si ACF Pro est actif
 */
function minimalfse_is_acf_pro_active() {
    return class_exists( 'ACF' ) && function_exists( 'acf_register_block_type' );
}

/**
 * Enregistrer les blocs ACF
 */
function minimalfse_register_acf_blocks() {
    // Vérifier si ACF Pro est actif
    if ( ! minimalfse_is_acf_pro_active() ) {
        return;
    }

    // Bloc Témoignage
    acf_register_block_type( array(
        'name'              => 'testimonial',
        'title'             => __( 'Témoignage', 'minimalfse' ),
        'description'       => __( 'Un bloc pour afficher un témoignage client avec photo et citation.', 'minimalfse' ),
        'render_template'   => 'acf-blocks/testimonial/testimonial.php',
        'category'          => 'minimalfse',
        'icon'              => 'format-quote',
        'keywords'          => array( 'témoignage', 'citation', 'avis', 'client' ),
        'supports'          => array(
            'align'           => array( 'wide', 'full' ),
            'mode'            => true,
            'jsx'             => true,
            'color'           => array(
                'background'    => true,
                'text'          => true,
                'gradient'      => true,
            ),
            'spacing'         => array(
                'margin'        => true,
                'padding'       => true,
            ),
        ),
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'testimonial_text'     => __( 'L\'équipe a complètement transformé notre présence en ligne. Notre nouveau site est non seulement magnifique, mais il génère également des résultats commerciaux concrets.', 'minimalfse' ),
                    'testimonial_name'     => __( 'Marie Dupont', 'minimalfse' ),
                    'testimonial_position' => __( 'PDG de Dupont Innovations', 'minimalfse' ),
                    'testimonial_rating'   => 5,
                    'is_preview'           => true,
                ),
            ),
        ),
        'enqueue_style'     => get_template_directory_uri() . '/acf-blocks/testimonial/testimonial.css',
    ) );

    // Bloc Statistiques
    acf_register_block_type( array(
        'name'              => 'stats',
        'title'             => __( 'Statistiques', 'minimalfse' ),
        'description'       => __( 'Un bloc pour afficher des statistiques avec compteurs animés.', 'minimalfse' ),
        'render_template'   => 'acf-blocks/stats/stats.php',
        'category'          => 'minimalfse',
        'icon'              => 'chart-bar',
        'keywords'          => array( 'statistiques', 'chiffres', 'compteur', 'données' ),
        'supports'          => array(
            'align'           => array( 'wide', 'full' ),
            'mode'            => true,
            'jsx'             => true,
            'color'           => array(
                'background'    => true,
                'text'          => true,
                'gradient'      => true,
            ),
            'spacing'         => array(
                'margin'        => true,
                'padding'       => true,
            ),
        ),
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'stats_title'          => __( 'Nos réalisations en chiffres', 'minimalfse' ),
                    'stats_description'    => __( 'Découvrez l\'impact de notre expertise à travers ces statistiques clés.', 'minimalfse' ),
                    'is_preview'           => true,
                ),
            ),
        ),
        'enqueue_style'     => get_template_directory_uri() . '/acf-blocks/stats/stats.css',
        'enqueue_script'    => get_template_directory_uri() . '/acf-blocks/stats/stats.js',
    ) );

    // Bloc Accordéon FAQ
    acf_register_block_type( array(
        'name'              => 'faq-accordion',
        'title'             => __( 'FAQ Accordéon', 'minimalfse' ),
        'description'       => __( 'Un bloc accordéon pour afficher des questions fréquentes.', 'minimalfse' ),
        'render_template'   => 'acf-blocks/faq-accordion/faq-accordion.php',
        'category'          => 'minimalfse',
        'icon'              => 'list-view',
        'keywords'          => array( 'faq', 'accordéon', 'questions', 'réponses' ),
        'supports'          => array(
            'align'           => array( 'wide', 'full' ),
            'mode'            => true,
            'jsx'             => true,
            'color'           => array(
                'background'    => true,
                'text'          => true,
                'gradient'      => true,
            ),
            'spacing'         => array(
                'margin'        => true,
                'padding'       => true,
            ),
        ),
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'faq_title'            => __( 'Questions fréquentes', 'minimalfse' ),
                    'faq_description'      => __( 'Trouvez les réponses aux questions les plus courantes sur nos services.', 'minimalfse' ),
                    'is_preview'           => true,
                ),
            ),
        ),
        'enqueue_style'     => get_template_directory_uri() . '/acf-blocks/faq-accordion/faq-accordion.css',
        'enqueue_script'    => get_template_directory_uri() . '/acf-blocks/faq-accordion/faq-accordion.js',
    ) );
}
add_action( 'acf/init', 'minimalfse_register_acf_blocks' );

/**
 * Ajouter un message d'administration si ACF Pro n'est pas actif
 */
function minimalfse_acf_admin_notice() {
    if ( ! minimalfse_is_acf_pro_active() && is_admin() ) {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><?php _e( 'Pour utiliser toutes les fonctionnalités du thème MinimalFSE, veuillez installer et activer le plugin <strong>Advanced Custom Fields PRO</strong>.', 'minimalfse' ); ?></p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'minimalfse_acf_admin_notice' );
