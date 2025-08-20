// Remove Box Shadow on Scroll
document.addEventListener("DOMContentLoaded", function () {
  const nav = document.getElementById("navbar");
  const toggler = document.querySelector(".navbar-toggler");

  // Function to update navbar style
  function updateNavbarStyle() {
    if (!toggler.classList.contains("collapsed")) {
      // If hamburger menu is open, make navbar solid
      nav.classList.add("scrolled");
    } else {
      // If hamburger menu is closed
      if (window.scrollY === 0) {
        // If page is at top, make navbar transparent
        nav.classList.remove("scrolled");
      } else {
        // If page is scrolled down, make navbar solid
        nav.classList.add("scrolled");
      }
    }
  }

  // Initial update
  updateNavbarStyle();

  // Listen for scroll event
  window.addEventListener("scroll", function () {
    if (!toggler.classList.contains("collapsed")) {
      // If hamburger menu is open, do not update navbar style
      return;
    }
    updateNavbarStyle();
  });

  // Listen for toggle button click event
  toggler.addEventListener("click", updateNavbarStyle);
});



function formLink() {
  const baseUrl = "https://www.kids-up.app";
  const currentUrl = new URL(window.location.href);
  const searchParams = currentUrl.searchParams;

  let utmParams = new URLSearchParams();

  // If UTM parameters exist in the current URL, copy them
  if (
    searchParams.has("utm_source") ||
    searchParams.has("utm_medium") ||
    searchParams.has("utm_campaign")
  ) {
    if (searchParams.has("utm_source")) utmParams.set("utm_source", searchParams.get("utm_source"));
    if (searchParams.has("utm_medium")) utmParams.set("utm_medium", searchParams.get("utm_medium"));
    if (searchParams.has("utm_campaign")) utmParams.set("utm_campaign", searchParams.get("utm_campaign"));
  } else {
    // If no UTM parameters, add default ones to indicate landing page funnel
    utmParams.set("utm_source", "landing_page");
    utmParams.set("utm_medium", "web");
    utmParams.set("utm_campaign", "halloween_2025");
  }

  // Construct the full URL with UTM parameters
  const fullUrl = `${baseUrl}?${utmParams.toString()}`;

  // Open the new URL in a new tab
  window.open(fullUrl, "_blank");
}

// Open Inquiry Link
function inquiryLink() {
  // Opens the specified URL in a new tab
  window.open("https://kids-up.jp/inquiry/", "_blank");
}


// Initialize Swiper for Image Carousel
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

// Initialize Swiper for Activity Carousel
var swiper = new Swiper(".swiper-container", {
  slidesPerView: 3, // Number of slides visible at a time
  centeredSlides: true, // Center the slides
  spaceBetween: 30, // Space between slides
  loop: true, // Enable looping
  lazy: true, // Enable lazy loading

  // Navigation buttons
  navigation: {
    nextEl: ".swiper-button-activity-next",
    prevEl: ".swiper-button-activity-prev",
  },

  // Responsive breakpoints
  breakpoints: {
    1025: {
      slidesPerView: 5.5, // Number of slides for viewports >= 1025px
    },
    992: {
      slidesPerView: 4, // Number of slides for viewports >= 992px
    },
    768: {
      slidesPerView: 3, // Number of slides for viewports >= 768px
    },
    0: {
      slidesPerView: 1.5, // Number of slides for viewports < 768px
    },
  },
});

// Initialize Swiper for Testimony Carousel
var swiper = new Swiper(".swiper-container-testimony", {
  slidesPerView: 1.25, // Number of slides visible at a time
  centeredSlides: true, // Center the slides
  spaceBetween: 15, // Space between slides
  loop: true, // Enable looping
  lazy: true, // Enable lazy loading

  // Navigation buttons
  navigation: {
    nextEl: ".swiper-button-testimony-next",
    prevEl: ".swiper-button-testimony-prev",
  },
});


new Swiper(".three-points-swiper", {
  slidesPerView: 1.5,
  spaceBetween: 16,
  centeredSlides: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-three-next",
    prevEl: ".swiper-button-three-prev",
  },
});
