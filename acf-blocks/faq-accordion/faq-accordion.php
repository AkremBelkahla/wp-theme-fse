<?php
/**
 * Bloc FAQ Accordéon
 *
 * @package MinimalFSE
 */

// Créer un ID unique pour le bloc
$block_id = 'faq-accordion-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
    $block_id = $block['anchor'];
}

// Créer les classes du bloc
$class_name = 'faq-accordion-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Charger les valeurs et assigner des valeurs par défaut
$faq_title = get_field( 'faq_title' ) ?: 'Questions fréquentes';
$faq_description = get_field( 'faq_description' ) ?: 'Trouvez les réponses aux questions les plus courantes sur nos services.';
$faq_items = get_field( 'faq_items' );
$faq_style = get_field( 'faq_style' ) ?: 'default';
$faq_open_first = get_field( 'faq_open_first' ) ?: false;

// Gestion du mode preview dans l'éditeur
$is_preview = isset( $block['data']['is_preview'] ) ? $block['data']['is_preview'] : false;

// Si c'est une prévisualisation, utiliser des données fictives
if ( $is_preview || empty( $faq_items ) ) {
    $faq_items = array(
        array(
            'faq_question' => 'Comment fonctionne votre processus de conception ?',
            'faq_answer' => 'Notre processus de conception commence par une phase de découverte où nous apprenons à connaître votre entreprise et vos objectifs. Ensuite, nous passons à la conception, au développement, aux tests et enfin au lancement. Tout au long du processus, nous maintenons une communication constante pour nous assurer que le produit final répond à vos attentes.',
        ),
        array(
            'faq_question' => 'Quels sont vos délais de livraison habituels ?',
            'faq_answer' => 'Les délais de livraison varient en fonction de la complexité du projet. Un site web simple peut prendre 2-4 semaines, tandis qu\'un projet plus complexe peut prendre 2-3 mois. Nous établissons toujours un calendrier clair au début du projet pour vous donner une idée précise des délais.',
        ),
        array(
            'faq_question' => 'Proposez-vous des services de maintenance après le lancement ?',
            'faq_answer' => 'Oui, nous proposons plusieurs forfaits de maintenance pour garder votre site à jour, sécurisé et fonctionnel. Ces forfaits incluent les mises à jour régulières, la surveillance de la sécurité, les sauvegardes et le support technique.',
        ),
    );
}
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?> max-w-4xl mx-auto py-12 px-4 <?php echo $faq_style === 'minimal' ? 'faq-minimal' : ($faq_style === 'modern' ? 'faq-modern' : 'faq-default'); ?>">
    <div class="text-center mb-12">
        <?php if ( $faq_title ) : ?>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?php echo esc_html( $faq_title ); ?></h2>
        <?php endif; ?>
        
        <?php if ( $faq_description ) : ?>
            <div class="text-lg text-gray-600 max-w-3xl mx-auto"><?php echo wpautop( $faq_description ); ?></div>
        <?php endif; ?>
    </div>
    
    <div class="space-y-4">
        <?php if ( $faq_items && is_array( $faq_items ) ) : ?>
            <?php foreach ( $faq_items as $index => $item ) : ?>
                <div class="border border-gray-200 rounded-lg overflow-hidden <?php echo ( $index === 0 && $faq_open_first ) ? 'active' : ''; ?>">
                    <div class="flex justify-between items-center p-4 md:p-6 bg-white cursor-pointer hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg font-semibold text-gray-900"><?php echo esc_html( $item['faq_question'] ); ?></h3>
                        <span class="flex-shrink-0 ml-4">
                            <svg class="w-6 h-6 text-primary transform transition-transform duration-200 <?php echo ( $index === 0 && $faq_open_first ) ? 'rotate-45' : ''; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </span>
                    </div>
                    <div class="bg-white px-4 md:px-6 overflow-hidden transition-all duration-300 max-h-0 <?php echo ( $index === 0 && $faq_open_first ) ? 'max-h-screen pb-4 md:pb-6' : ''; ?>">
                        <div class="prose text-gray-600">
                            <?php echo wpautop( $item['faq_answer'] ); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php if ( $is_preview ) : ?>
    <div class="mt-4 p-4 bg-gray-100 border border-gray-300 rounded-md text-sm text-gray-600">
        <p><?php _e( 'Ceci est une prévisualisation du bloc FAQ Accordéon. Ajoutez vos questions/réponses dans les champs ACF pour personnaliser ce bloc.', 'minimalfse' ); ?></p>
    </div>
<?php endif; ?>
