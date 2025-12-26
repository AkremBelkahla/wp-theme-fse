<?php
/**
 * Title: Hero Section Moderne
 * Slug: minimalfse/hero-modern
 * Categories: featured, call-to-action
 * Keywords: hero, banner, cta
 * Description: A modern hero section with gradient background and call-to-action buttons
 */
?>

<!-- wp:cover {"overlayColor":"dark","minHeight":600,"gradient":"primary-to-accent","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);min-height:600px">
    <span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-100 has-background-dim has-background-gradient has-primary-to-accent-gradient-background"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontSize":"xxx-large"} -->
            <h1 class="has-text-align-center has-white-color has-text-color has-xxx-large-font-size">Transformez Votre Présence Digitale</h1>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
            <p class="has-text-align-center has-white-color has-text-color has-large-font-size">Des solutions web innovantes qui propulsent votre entreprise vers le succès</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--m)">
                <!-- wp:button {"backgroundColor":"white","textColor":"primary","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button">Démarrer Maintenant</a></div>
                <!-- /wp:button -->
                
                <!-- wp:button {"backgroundColor":"accent","textColor":"white","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button">En Savoir Plus</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
