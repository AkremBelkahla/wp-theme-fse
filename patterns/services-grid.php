<?php
/**
 * Title: Grille de Services
 * Slug: minimalfse/services-grid
 * Categories: services, columns
 * Keywords: services, features, grid, columns
 * Block Types: core/columns, core/heading, core/paragraph, core/image
 * Description: Une grille de services présentant vos offres principales.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","right":"var:preset|spacing|s","left":"var:preset|spacing|s"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--s)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--m)">Nos Services</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--l)">Découvrez notre gamme complète de services numériques conçus pour propulser votre entreprise.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light"}} -->
        <div class="wp-block-column has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
            <!-- wp:image {"align":"center","width":64,"height":64,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
            <figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 24 24' fill='none' stroke='%230056b3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='2' y='3' width='20' height='14' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='8' y1='21' x2='16' y2='21'%3E%3C/line%3E%3Cline x1='12' y1='17' x2='12' y2='21'%3E%3C/line%3E%3C/svg%3E" alt="Icône Design Web" style="object-fit:cover;width:64px;height:64px"/></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-text-align-center has-large-font-size">Design Web</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Créations web modernes et responsives qui captivent vos visiteurs et reflètent l'identité de votre marque.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">En savoir plus</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light"}} -->
        <div class="wp-block-column has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
            <!-- wp:image {"align":"center","width":64,"height":64,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 24 24' fill='none' stroke='%230056b3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 19l7-7 3 3-7 7-3-3z'%3E%3C/path%3E%3Cpath d='M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z'%3E%3C/path%3E%3Cpath d='M2 2l7.586 7.586'%3E%3C/path%3E%3Ccircle cx='11' cy='11' r='2'%3E%3C/circle%3E%3C/svg%3E" alt="Icône Développement" style="object-fit:cover;width:64px;height:64px"/></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-text-align-center has-large-font-size">Développement</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Solutions techniques robustes et évolutives qui transforment vos idées en réalités numériques performantes.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">En savoir plus</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light"}} -->
        <div class="wp-block-column has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
            <!-- wp:image {"align":"center","width":64,"height":64,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 24 24' fill='none' stroke='%230056b3' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M12 20h9'%3E%3C/path%3E%3Cpath d='M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z'%3E%3C/path%3E%3C/svg%3E" alt="Icône Marketing" style="object-fit:cover;width:64px;height:64px"/></figure>
            <!-- /wp:image -->

            <!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-text-align-center has-large-font-size">Marketing Digital</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Stratégies marketing ciblées qui augmentent votre visibilité en ligne et génèrent des résultats mesurables.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">En savoir plus</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
