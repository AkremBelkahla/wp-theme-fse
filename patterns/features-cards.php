<?php
/**
 * Title: Features Cards
 * Slug: minimalfse/features-cards
 * Categories: featured
 * Keywords: features, services, cards
 * Description: A grid of feature cards with icons and descriptions
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
    <!-- wp:heading {"textAlign":"center","level":2} -->
    <h2 class="has-text-align-center">Nos Services</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--l)">Des solutions complètes pour répondre à tous vos besoins digitaux</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"radius":"12px"}},"backgroundColor":"light","className":"hover:shadow-lg transition-all","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hover:shadow-lg transition-all has-light-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:heading {"level":3,"textColor":"primary"} -->
                <h3 class="has-primary-color has-text-color">🎨 Design UI/UX</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Création d'interfaces utilisateur modernes et intuitives qui captivent et convertissent vos visiteurs.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"radius":"12px"}},"backgroundColor":"light","className":"hover:shadow-lg transition-all","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hover:shadow-lg transition-all has-light-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:heading {"level":3,"textColor":"primary"} -->
                <h3 class="has-primary-color has-text-color">⚡ Développement Web</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Solutions techniques performantes et évolutives construites avec les dernières technologies.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"border":{"radius":"12px"}},"backgroundColor":"light","className":"hover:shadow-lg transition-all","layout":{"type":"constrained"}} -->
            <div class="wp-block-group hover:shadow-lg transition-all has-light-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
                <!-- wp:heading {"level":3,"textColor":"primary"} -->
                <h3 class="has-primary-color has-text-color">📱 Applications Mobiles</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Applications natives et hybrides pour iOS et Android qui engagent vos utilisateurs.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
