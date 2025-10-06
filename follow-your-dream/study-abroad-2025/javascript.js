new Swiper("#image-carousel", {
  // Slide Formatting
  slidesPerView: 1.25,
  centeredSlides: true,

  // Extra Properties
  lazyLoading: true,
  loop: true,
  keyboard: {
    enabled: true,
  },

  // Navbutton Enabled
  navigation: {
    nextEl: ".swiper-button-right",
    prevEl: ".swiper-button-left",
  },

  // Breakpoints
  breakpoints: {
    576: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

  function formLink() {
    // Replace the URL with your desired link
    window.open(
      "https://docs.google.com/forms/d/e/1FAIpQLSd2eEh5wE9oNt4MifCoFmAgeilmXvxguJCOFwJcI_VSsXO4Hw/viewform",
      "_blank"
    );
  }

    function inquiryLink() {
      // Replace the URL with your desired link
      window.open("https://kids-up.jp/inquiry/", "_blank");
    }


    var swiper = new Swiper(".swiper-container-testimony", {
      slidesPerView: 1.25,
      centeredSlides: true,
      spaceBetween: 30,
      loop: true,
      lazy: true,
      navigation: {
        nextEl: ".swiper-button-testimony-next",
        prevEl: ".swiper-button-testimony-prev",
      },
    });
