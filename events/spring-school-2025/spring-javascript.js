

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
  



  /*
Responsive Falling Petals Animation with Respawn Delay
*/

// Configuration for different breakpoints
const animationConfig = {
  small: {
    petalCount: 1,
    translateY: "1100px",
    rotate: 270,
    duration: 20000,
    respawnDelay: 1000,
  },
  medium: {
    petalCount: 1,
    translateY: "600px",
    rotate: 360,
    duration: 12000,
    respawnDelay: 1000,
  },
  large: {
    petalCount: 2,
    translateY: "800px",
    rotate: 360,
    duration: 15000,
    respawnDelay: 1500,
  },
  extralarge: {
    petalCount: 2,
    translateY: "900px",
    rotate: 360,
    duration: 15000,
    respawnDelay: 1000,
  },
  twoxlarge: {
    petalCount: 1,
    translateY: "1200px",
    rotate: 360,
    duration: 15000,
    respawnDelay: 900,
  },
  fourk: {
    petalCount: 4,
    translateY: "2600px",
    rotate: 360,
    duration: 20000,
    respawnDelay: 1500,
  },
};

// Function to determine current configuration based on viewport width
function getConfig() {
  const width = window.innerWidth;
  if (width <= 576) return animationConfig.small;
  if (width <= 768) return animationConfig.medium;
  if (width <= 992) return animationConfig.large;
  if (width <= 1200) return animationConfig.extralarge;
  if (width <= 1920) return animationConfig.twoxlarge;
  return animationConfig.fourk;
}

// Global variable to track the total number of petals created
let global_petal_count = 0;
let isTabVisible = true; // Flag to track the visibility of the tab

// Function to create new petal elements
function create() {
  const config = getConfig();
  for (let i = 0; i < config.petalCount; i++) {
    const petal_element = document.createElement("petal");
    petal_element.setAttribute("id", `petal_${global_petal_count}`);

    // Randomize starting position based on percentage
    petal_element.style.top = Math.floor(Math.random() * 51 - 250) + "px";
    petal_element.style.left = Math.random() * 120 - 10 + "%"; // Randomize between -10% and 110%

    document.getElementById("petals").appendChild(petal_element);
    global_petal_count++;
  }
}

// Function to manage the animation
function resolveLater() {
  if (!isTabVisible) {
    // Pause the animation if the tab is not visible
    return Promise.resolve();
  }

  create();
  const config = getConfig();
  const petal_targets = [];
  for (let i = global_petal_count - config.petalCount; i < global_petal_count; i++) {
    petal_targets.push(`#petal_${i}`);
  }

  // Anime.js timeline for the animation
  anime.timeline({
    easing: "easeOutQuad",
    duration: config.duration,
    autoplay: true,
  })
    .add({
      targets: petal_targets,
      translateY: config.translateY, // Fall distance
      rotate: config.rotate, // Rotation
    })
    .add({
      targets: petal_targets,
      opacity: 0,
    }, 800); // Fade out after initial animation

  // Recursively call after a delay
  return new Promise((resolve) => {
    setTimeout(() => resolve(resolveLater()), config.respawnDelay); // Delay based on config
  });
}

// Handle page visibility change to pause/resume animation
document.addEventListener("visibilitychange", () => {
  if (document.hidden) {
    isTabVisible = false; // Stop animation when the tab is hidden
  } else {
    isTabVisible = true; // Resume animation when the tab becomes visible
    asyncCall(); // Restart the animation
  }
});

// Start the animation loop
async function asyncCall() {
  await resolveLater();
}

asyncCall();

