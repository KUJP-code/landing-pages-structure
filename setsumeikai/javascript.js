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
