
   
   
   
   
   
   
   
   const toggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    toggle.addEventListener('click', () => {
      toggle.classList.toggle('opened');
      navLinks.classList.toggle('show');
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!toggle.contains(e.target) && !navLinks.contains(e.target)) {
        toggle.classList.remove('opened');
        navLinks.classList.remove('show');
      }
    });

    // Close when clicking any link
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        toggle.classList.remove('opened');
        navLinks.classList.remove('show');
      });
    });



document.addEventListener('DOMContentLoaded', () => {
  const cta = document.querySelector('.sticky-cta');
  const hideTriggers = document.querySelectorAll('.hero, .footer, .mobile-cta-hide'); // Now includes the ID

  if (cta && hideTriggers.length > 0) {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.7
    };

    const observer = new IntersectionObserver((entries) => {
      const isAnyTriggerIntersecting = entries.some(entry => entry.isIntersecting);

      if (isAnyTriggerIntersecting) {
        cta.style.transform = 'translateY(100%)';
      } else {
        cta.style.transform = 'translateY(0%)';
      }
    }, observerOptions);

    hideTriggers.forEach(trigger => {
      observer.observe(trigger);
    });
  }
});







