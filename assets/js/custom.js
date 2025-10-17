/**
 * Scripts personnalisés pour le thème MinimalFSE
 */

document.addEventListener('DOMContentLoaded', function() {
    // Ajouter la classe 'js' au HTML pour les améliorations JavaScript
    document.documentElement.classList.add('js');
    
    // Gestion du défilement pour la navigation fixe
    const header = document.querySelector('.site-header');
    if (header) {
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('sticky-header');
                
                if (scrollTop > lastScrollTop) {
                    // Défilement vers le bas
                    header.classList.add('header-hidden');
                } else {
                    // Défilement vers le haut
                    header.classList.remove('header-hidden');
                }
            } else {
                header.classList.remove('sticky-header', 'header-hidden');
            }
            
            lastScrollTop = scrollTop;
        });
    }
    
    // Animation des éléments au défilement
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    if (animateElements.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    }
    
    // Gestion des accordéons pour les FAQ
    const accordionToggles = document.querySelectorAll('.accordion-toggle');
    
    if (accordionToggles.length > 0) {
        accordionToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const content = this.nextElementSibling;
                
                this.classList.toggle('active');
                
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });
    }
    
    // Amélioration de l'accessibilité pour la navigation au clavier
    const focusableElements = document.querySelectorAll('a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])');
    
    if (focusableElements.length > 0) {
        focusableElements.forEach(element => {
            element.addEventListener('focus', function() {
                this.classList.add('keyboard-focus');
            });
            
            element.addEventListener('blur', function() {
                this.classList.remove('keyboard-focus');
            });
        });
    }
});
