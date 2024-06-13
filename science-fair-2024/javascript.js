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
      "https://docs.google.com/forms/d/e/1FAIpQLScpl3LVakGefhpgK76t2rwtg9IXHSj_DsZmo0IvGACkqu9b1w/closedform",
      "_blank"
    );
  }

    function inquiryLink() {
      // Replace the URL with your desired link
      window.open("https://kids-up.jp/inquiry/", "_blank");
    }