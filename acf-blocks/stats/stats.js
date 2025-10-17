/**
 * Script pour l'animation des compteurs dans le bloc Statistiques
 */
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour animer les compteurs
    function animateCounters() {
        const counters = document.querySelectorAll('.stats-number');
        const speed = 200; // Plus le nombre est petit, plus l'animation est rapide
        
        counters.forEach(counter => {
            // Vérifier si le compteur a déjà été animé
            if (counter.classList.contains('animated')) {
                return;
            }
            
            const target = parseInt(counter.getAttribute('data-count'), 10);
            const increment = Math.ceil(target / speed);
            let count = 0;
            
            const updateCount = () => {
                if (count < target) {
                    count += increment;
                    
                    // S'assurer que nous ne dépassons pas la cible
                    if (count > target) {
                        count = target;
                    }
                    
                    counter.innerText = count;
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target;
                    counter.classList.add('animated');
                }
            };
            
            updateCount();
        });
    }
    
    // Fonction pour vérifier si un élément est visible dans la fenêtre
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Fonction pour déclencher l'animation lorsque le bloc est visible
    function handleScroll() {
        const statsBlocks = document.querySelectorAll('.stats-block');
        
        statsBlocks.forEach(block => {
            if (isElementInViewport(block)) {
                animateCounters();
                // Supprimer l'écouteur d'événement une fois l'animation déclenchée
                window.removeEventListener('scroll', handleScroll);
            }
        });
    }
    
    // Vérifier si le bloc est visible au chargement de la page
    handleScroll();
    
    // Ajouter un écouteur d'événement pour le défilement
    window.addEventListener('scroll', handleScroll);
    
    // Pour l'éditeur Gutenberg, déclencher l'animation immédiatement
    if (document.body.classList.contains('block-editor-page')) {
        setTimeout(animateCounters, 500);
    }
});
