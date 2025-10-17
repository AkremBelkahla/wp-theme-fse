<?php
/**
 * Title: Section Héro
 * Slug: minimalfse/hero-section
 * Categories: featured, header
 * Keywords: hero, banner, header, welcome
 * Block Types: core/cover, core/heading, core/paragraph, core/buttons
 * Description: Une section héro avec un arrière-plan, un titre, un texte et un bouton d'appel à l'action.
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/placeholder.jpg')); ?>","dimRatio":60,"overlayColor":"dark","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|s","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|s"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--s);min-height:80vh">
    <span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-60 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/placeholder.jpg')); ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontSize":"xxx-large","className":"is-style-default"} -->
            <h1 class="wp-block-heading has-text-align-center is-style-default has-white-color has-text-color has-xxx-large-font-size">Votre Vision, Notre Expertise</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"large"} -->
            <p class="has-text-align-center has-white-color has-text-color has-large-font-size">Nous créons des expériences numériques qui transforment votre entreprise et connectent avec votre audience.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button">Découvrir nos services</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button">Nous contacter</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
