<?php
/**
 * Bloc Statistiques
 *
 * @package MinimalFSE
 */

// Créer un ID unique pour le bloc
$block_id = 'stats-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

// Créer les classes du bloc
$class_name = 'stats-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Charger les valeurs et assigner des valeurs par défaut
$stats_title = get_field( 'stats_title' ) ?: 'Nos chiffres clés';
$stats_description = get_field( 'stats_description' ) ?: 'Découvrez l\'impact de notre expertise à travers ces statistiques clés.';
$stats_layout = get_field( 'stats_layout' ) ?: 'grid';
$stats_columns = get_field( 'stats_columns' ) ?: 4;
$stats_items = get_field( 'stats_items' );

// Gestion du mode preview dans l'éditeur
$is_preview = isset( $block['data']['is_preview'] ) ? $block['data']['is_preview'] : false;

// Si c'est une prévisualisation, utiliser des données fictives
if ( $is_preview || empty( $stats_items ) ) {
    $stats_items = array(
        array(
            'stats_number' => '250',
            'stats_suffix' => '+',
            'stats_label' => 'Projets réalisés',
            'stats_icon' => 'desktop',
        ),
        array(
            'stats_number' => '98',
            'stats_suffix' => '%',
            'stats_label' => 'Clients satisfaits',
            'stats_icon' => 'heart',
        ),
        array(
            'stats_number' => '15',
            'stats_suffix' => '',
            'stats_label' => 'Années d\'expérience',
            'stats_icon' => 'calendar',
        ),
        array(
            'stats_number' => '42',
            'stats_suffix' => 'K',
            'stats_label' => 'Heures économisées',
            'stats_icon' => 'clock',
        ),
    );
}

// Fonction pour obtenir l'icône SVG
function minimalfse_get_stats_icon( $icon = 'star', $color = 'currentColor', $size = 48 ) {
    $icons = array(
        'desktop' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
        'heart' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>',
        'calendar' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
        'clock' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
        'star' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>',
        'users' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
        'award' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>',
        'globe' => '<svg xmlns="http://www.w3.org/2000/svg" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="' . $color . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
    );
    
    return isset( $icons[$icon] ) ? $icons[$icon] : $icons['star'];
}
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?> stats-layout-<?php echo esc_attr( $stats_layout ); ?>">
    <div class="stats-header">
        <?php if ( $stats_title ) : ?>
            <h2 class="stats-title"><?php echo esc_html( $stats_title ); ?></h2>
        <?php endif; ?>
        
        <?php if ( $stats_description ) : ?>
            <div class="stats-description"><?php echo wpautop( $stats_description ); ?></div>
        <?php endif; ?>
    </div>
    
    <div class="stats-container stats-columns-<?php echo esc_attr( $stats_columns ); ?>">
        <?php if ( $stats_items && is_array( $stats_items ) ) : ?>
            <?php foreach ( $stats_items as $item ) : ?>
                <div class="stats-item">
                    <?php if ( ! empty( $item['stats_icon'] ) ) : ?>
                        <div class="stats-icon">
                            <?php echo minimalfse_get_stats_icon( $item['stats_icon'], 'var(--wp--preset--color--primary)', 48 ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="stats-number-container">
                        <span class="stats-number" data-count="<?php echo esc_attr( $item['stats_number'] ); ?>">0</span>
                        <?php if ( ! empty( $item['stats_suffix'] ) ) : ?>
                            <span class="stats-suffix"><?php echo esc_html( $item['stats_suffix'] ); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <?php if ( ! empty( $item['stats_label'] ) ) : ?>
                        <div class="stats-label"><?php echo esc_html( $item['stats_label'] ); ?></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php if ( $is_preview ) : ?>
    <div class="acf-block-preview-notice">
        <p><?php _e( 'Ceci est une prévisualisation du bloc Statistiques. Ajoutez vos statistiques dans les champs ACF pour personnaliser ce bloc.', 'minimalfse' ); ?></p>
    </div>
<?php endif; ?>
