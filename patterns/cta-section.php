<?php
/**
 * Title: Section CTA
 * Slug: minimalfse/cta-section
 * Categories: call-to-action, buttons
 * Keywords: cta, call to action, contact, button
 * Block Types: core/group, core/heading, core/paragraph, core/buttons
 * Description: Une section d'appel à l'action avec un fond de couleur, un titre, un texte et des boutons.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","right":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"border":{"radius":"4px"}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--s)">
    <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
    <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">Prêt à transformer votre présence en ligne ?</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"white"} -->
    <p class="has-text-align-center has-white-color has-text-color">Contactez-nous dès aujourd'hui pour discuter de votre projet et découvrir comment nous pouvons vous aider à atteindre vos objectifs.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|m"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--m)">
        <!-- wp:button {"backgroundColor":"white","textColor":"primary","className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button">Demander un devis</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button">En savoir plus</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
