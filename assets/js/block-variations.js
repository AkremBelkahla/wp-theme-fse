/**
 * Block Variations pour MinimalFSE
 * 
 * Ce fichier contient les variations de blocs personnalisées pour le thème.
 */

( function( blocks, element, blockEditor ) {
    var el = element.createElement;
    var registerBlockVariation = blocks.registerBlockVariation;
    var useBlockProps = blockEditor.useBlockProps;
    
    /**
     * Variation de bouton principal
     */
    registerBlockVariation( 'core/button', {
        name: 'primary-button',
        title: 'Bouton Principal',
        description: 'Un bouton principal avec le style de la marque.',
        category: 'buttons',
        icon: 'button',
        attributes: {
            className: 'is-style-fill',
            backgroundColor: 'primary',
            textColor: 'white',
        },
        innerBlocks: [],
        example: {
            attributes: {
                className: 'is-style-fill',
                backgroundColor: 'primary',
                textColor: 'white',
                text: 'Bouton Principal',
            },
        },
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de bouton secondaire
     */
    registerBlockVariation( 'core/button', {
        name: 'secondary-button',
        title: 'Bouton Secondaire',
        description: 'Un bouton secondaire avec contour.',
        category: 'buttons',
        icon: 'button',
        attributes: {
            className: 'is-style-outline',
            textColor: 'primary',
        },
        innerBlocks: [],
        example: {
            attributes: {
                className: 'is-style-outline',
                textColor: 'primary',
                text: 'Bouton Secondaire',
            },
        },
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de groupe avec bordure
     */
    registerBlockVariation( 'core/group', {
        name: 'bordered-group',
        title: 'Groupe avec Bordure',
        description: 'Un groupe avec une bordure légère.',
        category: 'design',
        icon: 'admin-customizer',
        attributes: {
            className: 'has-border',
            style: {
                border: {
                    width: '1px',
                    radius: '4px',
                },
                spacing: {
                    padding: {
                        top: 'var:preset|spacing|m',
                        right: 'var:preset|spacing|m',
                        bottom: 'var:preset|spacing|m',
                        left: 'var:preset|spacing|m',
                    },
                },
            },
            borderColor: 'light',
        },
        innerBlocks: [],
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de groupe avec fond accentué
     */
    registerBlockVariation( 'core/group', {
        name: 'accent-group',
        title: 'Groupe Accentué',
        description: 'Un groupe avec un fond accentué.',
        category: 'design',
        icon: 'admin-customizer',
        attributes: {
            className: 'is-style-accent',
            backgroundColor: 'accent',
            textColor: 'white',
            style: {
                spacing: {
                    padding: {
                        top: 'var:preset|spacing|m',
                        right: 'var:preset|spacing|m',
                        bottom: 'var:preset|spacing|m',
                        left: 'var:preset|spacing|m',
                    },
                },
            },
        },
        innerBlocks: [],
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de colonnes 70/30
     */
    registerBlockVariation( 'core/columns', {
        name: 'columns-70-30',
        title: 'Colonnes 70/30',
        description: 'Deux colonnes avec ratio 70/30.',
        category: 'design',
        icon: 'columns',
        attributes: {},
        innerBlocks: [
            [ 'core/column', { width: '70%' } ],
            [ 'core/column', { width: '30%' } ],
        ],
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de colonnes 30/70
     */
    registerBlockVariation( 'core/columns', {
        name: 'columns-30-70',
        title: 'Colonnes 30/70',
        description: 'Deux colonnes avec ratio 30/70.',
        category: 'design',
        icon: 'columns',
        attributes: {},
        innerBlocks: [
            [ 'core/column', { width: '30%' } ],
            [ 'core/column', { width: '70%' } ],
        ],
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
    /**
     * Variation de paragraphe avec mise en évidence
     */
    registerBlockVariation( 'core/paragraph', {
        name: 'highlighted-paragraph',
        title: 'Paragraphe Mis en Évidence',
        description: 'Un paragraphe avec un style mis en évidence.',
        category: 'text',
        icon: 'editor-paragraph',
        attributes: {
            className: 'is-style-highlighted',
            backgroundColor: 'light',
            style: {
                spacing: {
                    padding: {
                        top: 'var:preset|spacing|s',
                        right: 'var:preset|spacing|s',
                        bottom: 'var:preset|spacing|s',
                        left: 'var:preset|spacing|s',
                    },
                },
                border: {
                    left: {
                        color: 'var:preset|color|primary',
                        width: '4px',
                    },
                },
            },
        },
        innerBlocks: [],
        scope: [ 'inserter' ],
        isDefault: false,
    } );
    
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor );
