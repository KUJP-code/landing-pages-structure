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
