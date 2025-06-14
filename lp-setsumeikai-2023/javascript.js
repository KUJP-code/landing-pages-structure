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
