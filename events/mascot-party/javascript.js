

function formLink() {
  // Get the current URL
  const currentUrl = window.location.href;

  // Parse the URL to get the query parameters
  const urlParams = new URLSearchParams(new URL(currentUrl).search);

  // Get the utm_source parameter from the current URL
  let utmSource = urlParams.get('utm_source');

  // Set the default utm_source if it's not present in the current URL
  if (!utmSource) {
    utmSource = 'online';
  }

  // Construct the new URL with the utm parameters
  const newUrl = `https://www.kids-up.app?utm_source=${encodeURIComponent(utmSource)}&utm_medium=landing-page&utm_campaign=mascot_party`;

  // Opens the specified URL in a new tab
  window.open(newUrl, "_blank");
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
      slidesPerView: 4.5, // Number of slides for viewports >= 1025px
    },
    992: {
      slidesPerView: 4, // Number of slides for viewports >= 992px
    },
    768: {
      slidesPerView: 3.5, // Number of slides for viewports >= 768px
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






  /*
COUNTDOWN TIMER
*/
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minutesEl = document.getElementById("minutes");
const secondsEl = document.getElementById("seconds");

const endDate = "2025-05-24T10:00:00"; // Set your end date and time
let countdownInterval; // Store the interval ID

function countdown() {
  const endDateParsed = new Date(endDate);
  const now = new Date();
  let totalSeconds = (endDateParsed - now) / 1000;

  // Check if the countdown is over
  if (totalSeconds < 0) {
    clearInterval(countdownInterval); // Stop the interval
    totalSeconds = 0; // Set all values to 0
  }

  const days = Math.floor(totalSeconds / 3600 / 24);
  const hours = Math.floor(totalSeconds / 3600) % 24;
  const minutes = Math.floor(totalSeconds / 60) % 60;
  const seconds = Math.floor(totalSeconds) % 60;

  daysEl.innerHTML = formatTime(days);
  hoursEl.innerHTML = formatTime(hours);
  minutesEl.innerHTML = formatTime(minutes);
  secondsEl.innerHTML = formatTime(seconds);
}

function formatTime(time) {
  return time < 10 ? `0${time}` : time;
}

// Initial call
countdown();

// Set the interval and store its ID
countdownInterval = setInterval(countdown, 1000);