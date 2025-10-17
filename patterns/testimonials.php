<?php
/**
 * Title: Témoignages
 * Slug: minimalfse/testimonials
 * Categories: testimonials, text
 * Keywords: testimonials, quotes, clients, feedback
 * Block Types: core/group, core/columns, core/quote
 * Description: Une section de témoignages clients avec citations et photos.
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","right":"var:preset|spacing|s","left":"var:preset|spacing|s"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--s)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--m)">Ce que nos clients disent</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--l)">Découvrez les témoignages de nos clients satisfaits qui ont transformé leur présence en ligne avec nos services.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:quote {"align":"center","className":"is-style-default"} -->
                <blockquote class="wp-block-quote has-text-align-center is-style-default">
                    <!-- wp:paragraph -->
                    <p>L'équipe a complètement transformé notre présence en ligne. Notre nouveau site est non seulement magnifique, mais il génère également des résultats commerciaux concrets.</p>
                    <!-- /wp:paragraph -->
                    <cite>Marie Dupont, PDG de Dupont Innovations</cite>
                </blockquote>
                <!-- /wp:quote -->

                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image aligncenter size-thumbnail is-resized is-style-rounded"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Crect width='60' height='60' fill='%23cccccc'/%3E%3Ctext x='50%25' y='50%25' font-size='18' text-anchor='middle' alignment-baseline='middle' font-family='monospace' fill='%23333333'%3EMD%3C/text%3E%3C/svg%3E" alt="Photo de Marie Dupont" style="object-fit:cover;width:60px;height:60px"/></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:quote {"align":"center","className":"is-style-default"} -->
                <blockquote class="wp-block-quote has-text-align-center is-style-default">
                    <!-- wp:paragraph -->
                    <p>Je suis impressionné par la qualité du travail et l'attention aux détails. Notre site est maintenant plus rapide, plus beau et plus fonctionnel que jamais.</p>
                    <!-- /wp:paragraph -->
                    <cite>Thomas Martin, Directeur Marketing chez TechSolutions</cite>
                </blockquote>
                <!-- /wp:quote -->

                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image aligncenter size-thumbnail is-resized is-style-rounded"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Crect width='60' height='60' fill='%23cccccc'/%3E%3Ctext x='50%25' y='50%25' font-size='18' text-anchor='middle' alignment-baseline='middle' font-family='monospace' fill='%23333333'%3ETM%3C/text%3E%3C/svg%3E" alt="Photo de Thomas Martin" style="object-fit:cover;width:60px;height:60px"/></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"width":"1px","radius":"4px"}},"borderColor":"light","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-light-border-color" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:quote {"align":"center","className":"is-style-default"} -->
                <blockquote class="wp-block-quote has-text-align-center is-style-default">
                    <!-- wp:paragraph -->
                    <p>Travailler avec cette équipe a été un plaisir absolu. Ils ont écouté nos besoins et ont livré un site qui dépasse toutes nos attentes.</p>
                    <!-- /wp:paragraph -->
                    <cite>Sophie Bernard, Fondatrice de CreativeStudio</cite>
                </blockquote>
                <!-- /wp:quote -->

                <!-- wp:image {"align":"center","width":60,"height":60,"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image aligncenter size-thumbnail is-resized is-style-rounded"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Crect width='60' height='60' fill='%23cccccc'/%3E%3Ctext x='50%25' y='50%25' font-size='18' text-anchor='middle' alignment-baseline='middle' font-family='monospace' fill='%23333333'%3ESB%3C/text%3E%3C/svg%3E" alt="Photo de Sophie Bernard" style="object-fit:cover;width:60px;height:60px"/></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
                <p class="has-text-align-center has-small-font-size">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
