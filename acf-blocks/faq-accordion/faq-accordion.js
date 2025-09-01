/**
 * Script pour le bloc FAQ Accordéon avec Tailwind CSS
 */
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les blocs FAQ
    const faqBlocks = document.querySelectorAll('[class*="wp-block-acf-faq-accordion"]');
    
    faqBlocks.forEach(function(block) {
        // Sélectionner toutes les questions (en-têtes) dans ce bloc
        const faqQuestions = block.querySelectorAll('.flex.justify-between.items-center');
        
        // Ajouter un écouteur d'événement à chaque question
        faqQuestions.forEach(function(question) {
            question.addEventListener('click', function() {
                // Récupérer l'élément parent (item FAQ)
                const faqItem = this.closest('.border.border-gray-200.rounded-lg');
                const plusIcon = this.querySelector('svg');
                const contentDiv = faqItem.querySelector('.bg-white.px-4.md\\:px-6');
                
                // Vérifier si c'est un accordéon à panneau unique
                const isSinglePanel = block.classList.contains('single-panel');
                
                // Si c'est un accordéon à panneau unique, fermer tous les autres éléments
                if (isSinglePanel) {
                    const allItems = block.querySelectorAll('.border.border-gray-200.rounded-lg');
                    allItems.forEach(function(item) {
                        if (item !== faqItem && item.classList.contains('active')) {
                            // Fermer cet item
                            item.classList.remove('active');
                            const itemIcon = item.querySelector('svg');
                            const itemContent = item.querySelector('.bg-white.px-4.md\\:px-6');
                            
                            if (itemIcon) itemIcon.classList.remove('rotate-45');
                            if (itemContent) {
                                itemContent.classList.remove('max-h-screen', 'pb-4', 'md:pb-6');
                                itemContent.classList.add('max-h-0');
                            }
                        }
                    });
                }
                
                // Basculer l'état actif
                const isActive = faqItem.classList.toggle('active');
                
                // Animer l'icône
                if (plusIcon) {
                    if (isActive) {
                        plusIcon.classList.add('rotate-45');
                    } else {
                        plusIcon.classList.remove('rotate-45');
                    }
                }
                
                // Animer le contenu
                if (contentDiv) {
                    if (isActive) {
                        // Ouvrir le contenu
                        contentDiv.classList.add('max-h-screen', 'pb-4', 'md:pb-6');
                        contentDiv.classList.remove('max-h-0');
                    } else {
                        // Fermer le contenu
                        contentDiv.classList.remove('max-h-screen', 'pb-4', 'md:pb-6');
                        contentDiv.classList.add('max-h-0');
                    }
                }
            });
        });
    });
    
    // Pour l'éditeur Gutenberg, s'assurer que les éléments actifs sont correctement affichés
    if (document.body.classList.contains('block-editor-page') || document.body.classList.contains('wp-admin')) {
        setTimeout(function() {
            const activeItems = document.querySelectorAll('.border.border-gray-200.rounded-lg.active');
            activeItems.forEach(function(item) {
                const contentDiv = item.querySelector('.bg-white.px-4.md\\:px-6');
                const plusIcon = item.querySelector('svg');
                
                if (plusIcon) plusIcon.classList.add('rotate-45');
                if (contentDiv) {
                    contentDiv.classList.add('max-h-screen', 'pb-4', 'md:pb-6');
                    contentDiv.classList.remove('max-h-0');
                }
            });
        }, 500);
    }
});
