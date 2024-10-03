document.addEventListener("DOMContentLoaded", function () {
  // Show the pop-up on scroll only once
  var popUpDisplayed = false;

  window.onscroll = function () {
    if (
      !popUpDisplayed &&
      (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
    ) {
      showPopup();
      popUpDisplayed = true;
    }
  };
});

function showPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
  setTimeout(function () {
    popup.classList.add("show");
  }, 100); // Delay added for smoother animation
}

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  var gallerySwiper = new Swiper(".mySwiper2", {
    loop: true, // Loop main gallery
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: {
        el: ".mySwiper",
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      },
    },
  });

  var thumbsSwiper = new Swiper(".mySwiper", {
    loop: true, // Loop thumbnail gallery
    slidesPerView: 4,
    slideToClickedSlide: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".mySwiper-next",
      prevEl: ".mySwiper-prev",
    },
  });
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
  
  
