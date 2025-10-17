/**
 * Block Overrides pour MinimalFSE
 * 
 * Ce fichier contient les surcharges de blocs natifs pour le thème.
 */

( function( wp ) {
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl, RangeControl, SelectControl } = wp.components;
    const { __ } = wp.i18n;

    /**
     * Ajouter des contrôles personnalisés au bloc Paragraphe
     */
    const addParagraphControls = createHigherOrderComponent( ( BlockEdit ) => {
        return ( props ) => {
            // Vérifier si c'est le bloc Paragraphe
            if ( props.name !== 'core/paragraph' ) {
                return <BlockEdit { ...props } />;
            }

            const { attributes, setAttributes } = props;
            const { customFontSize, customLineHeight, customLetterSpacing } = attributes;

            return (
                <Fragment>
                    <BlockEdit { ...props } />
                    <InspectorControls>
                        <PanelBody
                            title={ __( 'Typographie avancée', 'minimalfse' ) }
                            initialOpen={ false }
                        >
                            <RangeControl
                                label={ __( 'Hauteur de ligne personnalisée', 'minimalfse' ) }
                                value={ customLineHeight }
                                onChange={ ( value ) => setAttributes( { customLineHeight: value } ) }
                                min={ 1 }
                                max={ 3 }
                                step={ 0.1 }
                            />
                            <RangeControl
                                label={ __( 'Espacement des lettres', 'minimalfse' ) }
                                value={ customLetterSpacing }
                                onChange={ ( value ) => setAttributes( { customLetterSpacing: value } ) }
                                min={ -2 }
                                max={ 5 }
                                step={ 0.1 }
                            />
                        </PanelBody>
                    </InspectorControls>
                </Fragment>
            );
        };
    }, 'addParagraphControls' );

    addFilter(
        'editor.BlockEdit',
        'minimalfse/paragraph-controls',
        addParagraphControls
    );

    /**
     * Ajouter des contrôles personnalisés au bloc Image
     */
    const addImageControls = createHigherOrderComponent( ( BlockEdit ) => {
        return ( props ) => {
            // Vérifier si c'est le bloc Image
            if ( props.name !== 'core/image' ) {
                return <BlockEdit { ...props } />;
            }

            const { attributes, setAttributes } = props;
            const { customBorderRadius, customBoxShadow, imageFilter } = attributes;

            return (
                <Fragment>
                    <BlockEdit { ...props } />
                    <InspectorControls>
                        <PanelBody
                            title={ __( 'Effets d\'image avancés', 'minimalfse' ) }
                            initialOpen={ false }
                        >
                            <RangeControl
                                label={ __( 'Rayon de bordure personnalisé', 'minimalfse' ) }
                                value={ customBorderRadius }
                                onChange={ ( value ) => setAttributes( { customBorderRadius: value } ) }
                                min={ 0 }
                                max={ 50 }
                                step={ 1 }
                            />
                            <ToggleControl
                                label={ __( 'Ajouter une ombre', 'minimalfse' ) }
                                checked={ !!customBoxShadow }
                                onChange={ () => setAttributes( { customBoxShadow: !customBoxShadow } ) }
                            />
                            <SelectControl
                                label={ __( 'Filtre d\'image', 'minimalfse' ) }
                                value={ imageFilter || 'none' }
                                options={ [
                                    { label: __( 'Aucun', 'minimalfse' ), value: 'none' },
                                    { label: __( 'Noir et blanc', 'minimalfse' ), value: 'grayscale' },
                                    { label: __( 'Sépia', 'minimalfse' ), value: 'sepia' },
                                    { label: __( 'Flou', 'minimalfse' ), value: 'blur' },
                                ] }
                                onChange={ ( value ) => setAttributes( { imageFilter: value } ) }
                            />
                        </PanelBody>
                    </InspectorControls>
                </Fragment>
            );
        };
    }, 'addImageControls' );

    addFilter(
        'editor.BlockEdit',
        'minimalfse/image-controls',
        addImageControls
    );

    /**
     * Ajouter des contrôles personnalisés au bloc Bouton
     */
    const addButtonControls = createHigherOrderComponent( ( BlockEdit ) => {
        return ( props ) => {
            // Vérifier si c'est le bloc Bouton
            if ( props.name !== 'core/button' ) {
                return <BlockEdit { ...props } />;
            }

            const { attributes, setAttributes } = props;
            const { customBorderRadius, customPadding, hoverEffect } = attributes;

            return (
                <Fragment>
                    <BlockEdit { ...props } />
                    <InspectorControls>
                        <PanelBody
                            title={ __( 'Styles de bouton avancés', 'minimalfse' ) }
                            initialOpen={ false }
                        >
                            <RangeControl
                                label={ __( 'Rayon de bordure personnalisé', 'minimalfse' ) }
                                value={ customBorderRadius }
                                onChange={ ( value ) => setAttributes( { customBorderRadius: value } ) }
                                min={ 0 }
                                max={ 50 }
                                step={ 1 }
                            />
                            <SelectControl
                                label={ __( 'Effet au survol', 'minimalfse' ) }
                                value={ hoverEffect || 'none' }
                                options={ [
                                    { label: __( 'Aucun', 'minimalfse' ), value: 'none' },
                                    { label: __( 'Élévation', 'minimalfse' ), value: 'lift' },
                                    { label: __( 'Pulsation', 'minimalfse' ), value: 'pulse' },
                                    { label: __( 'Agrandissement', 'minimalfse' ), value: 'scale' },
                                ] }
                                onChange={ ( value ) => setAttributes( { hoverEffect: value } ) }
                            />
                        </PanelBody>
                    </InspectorControls>
                </Fragment>
            );
        };
    }, 'addButtonControls' );

    addFilter(
        'editor.BlockEdit',
        'minimalfse/button-controls',
        addButtonControls
    );

    /**
     * Ajouter des contrôles personnalisés au bloc Groupe
     */
    const addGroupControls = createHigherOrderComponent( ( BlockEdit ) => {
        return ( props ) => {
            // Vérifier si c'est le bloc Groupe
            if ( props.name !== 'core/group' ) {
                return <BlockEdit { ...props } />;
            }

            const { attributes, setAttributes } = props;
            const { customBorderRadius, customBoxShadow, customAnimation } = attributes;

            return (
                <Fragment>
                    <BlockEdit { ...props } />
                    <InspectorControls>
                        <PanelBody
                            title={ __( 'Effets de groupe avancés', 'minimalfse' ) }
                            initialOpen={ false }
                        >
                            <RangeControl
                                label={ __( 'Rayon de bordure personnalisé', 'minimalfse' ) }
                                value={ customBorderRadius }
                                onChange={ ( value ) => setAttributes( { customBorderRadius: value } ) }
                                min={ 0 }
                                max={ 50 }
                                step={ 1 }
                            />
                            <ToggleControl
                                label={ __( 'Ajouter une ombre', 'minimalfse' ) }
                                checked={ !!customBoxShadow }
                                onChange={ () => setAttributes( { customBoxShadow: !customBoxShadow } ) }
                            />
                            <SelectControl
                                label={ __( 'Animation au défilement', 'minimalfse' ) }
                                value={ customAnimation || 'none' }
                                options={ [
                                    { label: __( 'Aucune', 'minimalfse' ), value: 'none' },
                                    { label: __( 'Fondu', 'minimalfse' ), value: 'fade-in' },
                                    { label: __( 'Glissement vers le haut', 'minimalfse' ), value: 'slide-up' },
                                    { label: __( 'Glissement vers la droite', 'minimalfse' ), value: 'slide-right' },
                                ] }
                                onChange={ ( value ) => setAttributes( { customAnimation: value } ) }
                            />
                        </PanelBody>
                    </InspectorControls>
                </Fragment>
            );
        };
    }, 'addGroupControls' );

    addFilter(
        'editor.BlockEdit',
        'minimalfse/group-controls',
        addGroupControls
    );

} )( window.wp );
