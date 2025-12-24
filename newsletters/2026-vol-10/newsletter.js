document.addEventListener("DOMContentLoaded", () => {
  // 1. Select swipers while EXCLUDING the parallax one to avoid conflicts
  const genericSwipers = document.querySelectorAll(".swiper-container:not(.parallaxSwiper), .swiper:not(.parallaxSwiper)");

  genericSwipers.forEach((swiperEl) => {
    // 2. Safety check: Don't initialize if already done
    if (swiperEl.swiper) return;

    // 3. Define the buttons specifically for THIS swiper
    // We look inside the swiper first, then the parent (in case buttons are outside)
    const nextBtn = swiperEl.querySelector(".swiper-button-next") || swiperEl.parentElement.querySelector(".swiper-button-next");
    const prevBtn = swiperEl.querySelector(".swiper-button-prev") || swiperEl.parentElement.querySelector(".swiper-button-prev");
    const paginationEl = swiperEl.querySelector(".swiper-pagination");

    new Swiper(swiperEl, {
      slidesPerView: 4,
      spaceBetween: 35,
      loop: true,
      
      // Correct Navigation Block
      navigation: {
        nextEl: nextBtn,
        prevEl: prevBtn,
      },

      pagination: {
        el: paginationEl,
        clickable: true,
      },

      observer: true,
      observeParents: true,

      breakpoints: {
        1200: { slidesPerView: 4 },
        1000: { slidesPerView: 3 },
        750: { slidesPerView: 2.5, centeredSlides: true },
        500: { slidesPerView: 2.5, centeredSlides: true },
        0: { slidesPerView: 1.5, centeredSlides: true },
      },
    });
  });
});


  document.addEventListener('DOMContentLoaded', function() {
    // --- Configuration ---
    const fixedHeader = document.getElementById('template-nav'); // Replace with your actual fixed header ID
    const additionalOffset = 20; // Adjust as needed
  
    // --- Helper Function ---
    function getFixedHeaderHeight() {
      return fixedHeader ? fixedHeader.offsetHeight : 0;
    }
  
    // --- Modified Smooth Scroll Function ---
    function smoothScrollTo(targetId) {
      const targetElement = document.getElementById(targetId);
  
      if (targetElement) {
        const targetTop = targetElement.offsetTop - getFixedHeaderHeight() - additionalOffset;
        window.scrollTo({
          top: targetTop,
          behavior: 'smooth'
        });
      } else {
        console.warn('Target element not found:', targetId);
      }
    }
  
    // --- Handle Anchor Link Clicks ---
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
  
        const targetId = this.getAttribute('href').substring(1);
        smoothScrollTo(targetId);
      });
    });
  
    // --- Handle Initial Hash (if any) ---
    if (window.location.hash) {
      const hash = window.location.hash.substring(1);
      smoothScrollTo(hash);
    }
  });

  
  

  document.addEventListener("DOMContentLoaded", function () {
    const hash = window.location.hash.substring(1); // Get hash without #

    if (hash.startsWith("article-")) {
        // Show the selected article
        const selectedArticle = document.querySelector("." + hash + "-selected");
        if (selectedArticle) {
            selectedArticle.style.display = "block";
        }

        // Hide only the matching default article
        const defaultArticle = document.querySelector("." + hash + "-default");
        if (defaultArticle) {
            defaultArticle.style.display = "none";
        }
    }
});
