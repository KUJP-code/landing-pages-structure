

// Open Form Link
function formLink() {
  // Opens the specified URL in a new tab
  window.open("https://www.kids-up.app", "_blank");
}

// Open Inquiry Link
function inquiryLink() {
  // Opens the specified URL in a new tab
  window.open("https://kids-up.jp/inquiry/", "_blank");
}

// Initialize Swiper for Image Carousel
new Swiper("#gallery-carousel", {
  slidesPerView: 1.25,
  centeredSlides: true,
  lazyLoading: true,
  loop: true,
  keyboard: {
    enabled: true,
  },
  navigation: {
    nextEl: "#gallery-next",
    prevEl: "#gallery-prev",
  },
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
    
    1399: {
      slidesPerView: 4, // Number of slides for viewports >= 1025px
    },

    
        1199: {
      slidesPerView: 3.5, // Number of slides for viewports >= 1025px
    },


    992: {
      slidesPerView: 3.25, // Number of slides for viewports >= 992px
    },
    768: {
      slidesPerView: 2.75, // Number of slides for viewports >= 768px
    },

    576: {
      slidesPerView: 2.25, // Number of slides for viewports < 768px
    },
    320: {
      slidesPerView: 1.25, // Number of slides for viewports < 768px
    },


    0: {
      slidesPerView: 1, // Number of slides for viewports < 768px
    },
  },
});


// Initialize Swiper for Testimony Carousel
var swiper = new Swiper(".swiper-container-testimony", {
  slidesPerView: 1.25,       // Number of slides visible at a time
  centeredSlides: true,     // Center the slides
  spaceBetween: 16,         // Space between slides
  loop: true,               // Enable looping
  lazy: true,               // Enable lazy loading

  // Navigation buttons
  navigation: {
    nextEl: ".swiper-button-testimony-next",
    prevEl: ".swiper-button-testimony-prev",
  },

  // Equal height adjustment
  on: {
    init: () => setEqualSlideHeights(),
    resize: () => setEqualSlideHeights(),
  }
});

// Function to equalize slide heights
function setEqualSlideHeights() {
  const slides = document.querySelectorAll('.testimony-slide');
  let maxHeight = 0;

  // Reset heights to allow recalculation
  slides.forEach(slide => {
    slide.style.height = 'auto';
  });

  // Find the tallest slide
  slides.forEach(slide => {
    const height = slide.offsetHeight;
    if (height > maxHeight) maxHeight = height;
  });

  // Apply the max height to all slides
  slides.forEach(slide => {
    slide.style.height = `${maxHeight}px`;
  });
}



// Accordion Icon Rotation on Collapse
document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach((item) => {
    const button = item.querySelector(".accordion-button");
    const icon = button.querySelector(".accordion-btn-icon");
    const collapseElement = item.querySelector(".accordion-collapse");

    // Set initial icon state based on collapse element state
    if (collapseElement.classList.contains("show")) {
      icon.style.transform = "rotate(45deg)";
    } else {
      icon.style.transform = "rotate(0deg)";
    }

    // Rotate icon on show event
    collapseElement.addEventListener("show.bs.collapse", () => {
      icon.style.transform = "rotate(45deg)";
    });

    // Rotate icon back on hide event
    collapseElement.addEventListener("hide.bs.collapse", () => {
      icon.style.transform = "rotate(0deg)";
    });
  });
});



  // Set your cutoff date here (e.g., September 15, 2024)
  const cutoffDate = new Date('2024-05-15');
  
  // Get the current date
  const currentDate = new Date();
  
  // Check if the current date is after the cutoff date
  if (currentDate > cutoffDate) {
      // Select all elements with the class 'earlybird'
      const earlyBirdElements = document.querySelectorAll('.earlybird');
      
      // Hide each element by setting the display property to 'none'
      earlyBirdElements.forEach(element => {
          element.style.display = 'none';
      });
  }
  