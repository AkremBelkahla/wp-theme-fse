<?php
/**
 * Bloc Témoignage
 *
 * @package MinimalFSE
 */

// Créer un ID unique pour le bloc
$block_id = 'testimonial-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

// Créer les classes du bloc
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Charger les valeurs et assigner des valeurs par défaut
$testimonial_text = get_field( 'testimonial_text' ) ?: 'Votre témoignage ici...';
$testimonial_name = get_field( 'testimonial_name' ) ?: 'Nom du client';
$testimonial_position = get_field( 'testimonial_position' ) ?: 'Poste / Entreprise';
$testimonial_image = get_field( 'testimonial_image' );
$testimonial_rating = get_field( 'testimonial_rating' ) ?: 5;
$testimonial_style = get_field( 'testimonial_style' ) ?: 'style-1';

// Gestion du mode preview dans l'éditeur
$is_preview = isset( $block['data']['is_preview'] ) ? $block['data']['is_preview'] : false;

// Générer les étoiles pour la notation
$stars = '';
for ( $i = 1; $i <= 5; $i++ ) {
    if ( $i <= $testimonial_rating ) {
        $stars .= '<span class="testimonial-star filled">★</span>';
    } else {
        $stars .= '<span class="testimonial-star">★</span>';
    }
}
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?> testimonial-<?php echo esc_attr( $testimonial_style ); ?>">
    <div class="testimonial-inner">
        <?php if ( $testimonial_style === 'style-1' ) : ?>
            <div class="testimonial-content">
                <div class="testimonial-quote-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor" opacity="0.2">
                        <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                    </svg>
                </div>
                
                <div class="testimonial-text">
                    <?php echo wpautop( $testimonial_text ); ?>
                </div>
                
                <div class="testimonial-rating">
                    <?php echo $stars; ?>
                </div>
                
                <div class="testimonial-author">
                    <?php if ( $testimonial_image ) : ?>
                        <div class="testimonial-image">
                            <img src="<?php echo esc_url( $testimonial_image['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_name ); ?>" />
                        </div>
                    <?php else : ?>
                        <div class="testimonial-image testimonial-placeholder-image">
                            <?php echo esc_html( substr( $testimonial_name, 0, 1 ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="testimonial-info">
                        <div class="testimonial-name"><?php echo esc_html( $testimonial_name ); ?></div>
                        <div class="testimonial-position"><?php echo esc_html( $testimonial_position ); ?></div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="testimonial-content">
                <div class="testimonial-author">
                    <?php if ( $testimonial_image ) : ?>
                        <div class="testimonial-image">
                            <img src="<?php echo esc_url( $testimonial_image['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_name ); ?>" />
                        </div>
                    <?php else : ?>
                        <div class="testimonial-image testimonial-placeholder-image">
                            <?php echo esc_html( substr( $testimonial_name, 0, 1 ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="testimonial-info">
                        <div class="testimonial-name"><?php echo esc_html( $testimonial_name ); ?></div>
                        <div class="testimonial-position"><?php echo esc_html( $testimonial_position ); ?></div>
                    </div>
                </div>
                
                <div class="testimonial-text">
                    <?php echo wpautop( $testimonial_text ); ?>
                </div>
                
                <div class="testimonial-rating">
                    <?php echo $stars; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php if ( $is_preview ) : ?>
    <div class="acf-block-preview-notice">
        <p><?php _e( 'Ceci est une prévisualisation du bloc Témoignage. Ajoutez votre contenu dans les champs ACF pour personnaliser ce bloc.', 'minimalfse' ); ?></p>
    </div>
<?php endif; ?>
