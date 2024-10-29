document.addEventListener("DOMContentLoaded", () => {
  const nav = document.getElementById("navbar");
  const toggler = document.querySelector(".navbar-toggler");

  // Function to update navbar style based on scroll and toggle status
  function updateNavbarStyle() {
    if (!toggler.classList.contains("collapsed")) {
      // Navbar solid if hamburger menu is open
      nav.classList.add("scrolled");
    } else if (window.scrollY === 0) {
      // Navbar transparent at top of the page
      nav.classList.remove("scrolled");
    } else {
      // Navbar solid if scrolled down
      nav.classList.add("scrolled");
    }
  }

  // Initial navbar update on load
  updateNavbarStyle();

  // Scroll listener to adjust navbar style if menu is closed
  window.addEventListener("scroll", () => {
    if (toggler.classList.contains("collapsed")) {
      updateNavbarStyle();
    }
  });

  // Navbar toggler listener for style updates
  toggler.addEventListener("click", updateNavbarStyle);

  document.addEventListener("DOMContentLoaded", () => {
    const cutoffDate = new Date('2024-09-30');
    const currentDate = new Date();
  
    if (currentDate > cutoffDate) {
      // Add the hidden class to all elements with the class 'earlybird'
      document.querySelectorAll('.earlybird').forEach(element => {
        element.classList.add('hidden-after-cutoff');
      });
    }
  });
  

// Open Form Link
function formLink() {
  window.open("https://www.kids-up.app", "_blank");
}

// Open Inquiry Link
function inquiryLink() {
  window.open("https://kids-up.jp/inquiry/", "_blank");
}
