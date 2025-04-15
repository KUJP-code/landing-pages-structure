var swiper = new Swiper(".swiper-container", {
    slidesPerView: 4,
  
    spaceBetween: 35,
    loop: true,
    lazy: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1200: {
        slidesPerView: 4,
      },

      1000: {
        slidesPerView: 3,
      },

      750: {
        slidesPerView: 2.5,
        centeredSlides: true,
      },

      
      500: {
        slidesPerView: 2.5,
        centeredSlides: true,
      },
      0: {
        slidesPerView: 1.5,
        centeredSlides: true,
      },
    },
  });
  

  
  