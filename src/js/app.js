/**
 * Scripts principaux pour le thème MinimalFSE
 */

// Fonction pour ajouter la classe 'js' au HTML
document.documentElement.classList.add('js');

// Gestion du défilement pour la navigation fixe
document.addEventListener('DOMContentLoaded', function() {
  // En-tête fixe au défilement
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
  const animateElements = document.querySelectorAll('.animate-fade-in, .animate-slide-up');
  
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
  
  // Gestion des accordéons
  const accordionToggles = document.querySelectorAll('.faq-question');
  
  if (accordionToggles.length > 0) {
    accordionToggles.forEach(toggle => {
      toggle.addEventListener('click', function() {
        const faqItem = this.closest('.faq-item');
        faqItem.classList.toggle('active');
        
        // Fermer les autres éléments si nécessaire
        const isSinglePanel = this.closest('.faq-single-panel');
        if (isSinglePanel) {
          const siblings = [...this.closest('.faq-container').querySelectorAll('.faq-item')].filter(item => item !== faqItem);
          siblings.forEach(sibling => sibling.classList.remove('active'));
        }
      });
    });
  }
  
  // Gestion des compteurs pour les statistiques
  const statCounters = document.querySelectorAll('[data-count]');
  
  if (statCounters.length > 0) {
    const countUp = (target, element, duration) => {
      const finalNumber = parseInt(target, 10);
      const startTime = performance.now();
      
      const updateCount = (currentTime) => {
        const elapsedTime = currentTime - startTime;
        
        if (elapsedTime > duration) {
          element.textContent = finalNumber;
          return;
        }
        
        const progress = elapsedTime / duration;
        const currentCount = Math.floor(progress * finalNumber);
        
        element.textContent = currentCount;
        requestAnimationFrame(updateCount);
      };
      
      requestAnimationFrame(updateCount);
    };
    
    const handleStatCounters = () => {
      statCounters.forEach(counter => {
        if (!counter.classList.contains('counted')) {
          const target = counter.getAttribute('data-count');
          countUp(target, counter, 2000);
          counter.classList.add('counted');
        }
      });
    };
    
    // Observer pour déclencher l'animation au défilement
    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          handleStatCounters();
          statsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    const statsContainers = document.querySelectorAll('.stats-container');
    statsContainers.forEach(container => {
      statsObserver.observe(container);
    });
  }
});
