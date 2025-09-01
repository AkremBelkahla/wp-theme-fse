<?php
/**
 * MinimalFSE functions and definitions
 *
 * @package MinimalFSE
 * @since 1.0.0
 */

if ( ! defined( 'MINIMALFSE_VERSION' ) ) {
    // Remplacer la version lors de modifications importantes
    define( 'MINIMALFSE_VERSION', '1.0.0' );
}

/**
 * Inclure les fichiers nécessaires
 */
require_once get_template_directory() . '/inc/blocks.php';
require_once get_template_directory() . '/inc/block-variations.php';
require_once get_template_directory() . '/inc/block-overrides.php';
require_once get_template_directory() . '/inc/acf-blocks.php';

if ( ! function_exists( 'minimalfse_setup' ) ) {
    /**
     * Configuration du thème
     */
    function minimalfse_setup() {
        // Ajouter la prise en charge du titre automatique
        add_theme_support( 'title-tag' );
        
        // Ajouter la prise en charge des images mises en avant
        add_theme_support( 'post-thumbnails' );
        
        // Ajouter la prise en charge des formats de publication
        add_theme_support( 'post-formats', array(
            'gallery',
            'image',
            'video',
            'audio',
        ) );
        
        // Ajouter la prise en charge des menus de navigation
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Menu principal', 'minimalfse' ),
                'footer'  => esc_html__( 'Menu pied de page', 'minimalfse' ),
            )
        );
        
        // Ajouter la prise en charge de l'édition complète du site
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        
        // Ajouter la prise en charge des styles d'éditeur
        add_editor_style( 'assets/css/editor-style.css' );
        
        // Charger les traductions
        load_theme_textdomain( 'minimalfse', get_template_directory() . '/languages' );
    }
}
add_action( 'after_setup_theme', 'minimalfse_setup' );

/**
 * Enregistrer les styles et scripts
 */
function minimalfse_enqueue_assets() {
    // Enregistrer et charger les styles principaux
    wp_enqueue_style(
        'minimalfse-style',
        get_stylesheet_uri(),
        array(),
        MINIMALFSE_VERSION
    );
    
    // Enregistrer et charger les styles Tailwind CSS
    if ( file_exists( get_template_directory() . '/assets/css/app.css' ) ) {
        wp_enqueue_style(
            'minimalfse-tailwind',
            get_template_directory_uri() . '/assets/css/app.css',
            array( 'minimalfse-style' ),
            MINIMALFSE_VERSION
        );
    }
    
    // Enregistrer et charger les scripts principaux
    if ( file_exists( get_template_directory() . '/assets/js/app.js' ) ) {
        wp_enqueue_script(
            'minimalfse-app',
            get_template_directory_uri() . '/assets/js/app.js',
            array(),
            MINIMALFSE_VERSION,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'minimalfse_enqueue_assets' );

/**
 * Ajouter des classes personnalisées au body
 */
function minimalfse_body_classes( $classes ) {
    // Ajouter une classe pour les pages d'archive
    if ( is_archive() || is_home() || is_search() ) {
        $classes[] = 'archive-page';
    }
    
    // Ajouter une classe pour les pages simples
    if ( is_singular() && ! is_front_page() ) {
        $classes[] = 'singular-page';
    }
    
    return $classes;
}
add_filter( 'body_class', 'minimalfse_body_classes' );

/**
 * Désactiver les styles de blocs par défaut de WordPress
 * Décommentez cette fonction si vous souhaitez utiliser uniquement vos propres styles
 */
/*
function minimalfse_deregister_core_block_styles() {
    wp_deregister_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'minimalfse_deregister_core_block_styles', 100 );
*/

/**
 * Ajouter la prise en charge des styles de blocs personnalisés
 */
function minimalfse_setup_block_styles() {
    // Ajouter la prise en charge des styles de blocs
    add_theme_support( 'wp-block-styles' );
    
    // Ajouter la prise en charge des styles d'alignement larges et pleine largeur
    add_theme_support( 'align-wide' );
    
    // Ajouter la prise en charge des couleurs personnalisées
    add_theme_support( 'editor-color-palette', json_decode( file_get_contents( get_template_directory() . '/theme.json' ), true )['settings']['color']['palette'] );
    
    // Ajouter la prise en charge des tailles de police personnalisées
    add_theme_support( 'editor-font-sizes', json_decode( file_get_contents( get_template_directory() . '/theme.json' ), true )['settings']['typography']['fontSizes'] );
}
add_action( 'after_setup_theme', 'minimalfse_setup_block_styles' );

/**
 * Ajouter les classes Tailwind aux blocs Gutenberg
 */
function minimalfse_block_editor_tailwind_styles() {
    // Ajouter les styles Tailwind à l'éditeur
    if ( file_exists( get_template_directory() . '/assets/css/app.css' ) ) {
        wp_enqueue_style(
            'minimalfse-editor-tailwind',
            get_template_directory_uri() . '/assets/css/app.css',
            array(),
            MINIMALFSE_VERSION
        );
    }
}
add_action( 'enqueue_block_editor_assets', 'minimalfse_block_editor_tailwind_styles' );

/**
 * Ajouter un fichier .gitignore pour les fichiers de build
 */
function minimalfse_create_gitignore() {
    $gitignore_file = get_template_directory() . '/.gitignore';
    
    if ( ! file_exists( $gitignore_file ) ) {
        $gitignore_content = "/node_modules\n/vendor\n.DS_Store\nThumbs.db\n.idea/\n.vscode/\n*.log\n*.hot-update.*\n/assets/css/app.css\n/assets/js/app.js\n/assets/css/app.css.map\n/assets/js/app.js.map\n/mix-manifest.json\n";
        
        file_put_contents( $gitignore_file, $gitignore_content );
    }
}
add_action( 'after_switch_theme', 'minimalfse_create_gitignore' );
