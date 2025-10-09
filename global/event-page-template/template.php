<!DOCTYPE html>
<html lang="en" style="background-color: gray;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Responsive Navbar with Custom Hamburger</title>


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP&family=Noto+Sans+SC&family=Noto+Serif+JP&family=Noto+Serif+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/global/event-page-template/event-page-stylesheets/event-pages-common.css" />
  <link rel="stylesheet" href="./page-custom.css" />

</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="nav-inner">
      <a class="navbar-brand" href="#"><img src="https://kids-up.jp/wp-content/themes/kidsup/img/logo.svg" alt="nav logo" /></a>

      <button class="nav-toggle" aria-label="Toggle navigation">
        <span class="bar-top"></span>
        <span class="bar-mid"></span>
        <span class="bar-bot"></span>
      </button>


      <div class="nav-links">
        <a href="#" class="button button-1">イベント内容</a>
        <a href="#" class="button button-2">アクティビティ内容</a>
        <a href="#" class="button button-3">お申込みはこちら</a>

      </div>


        <div class="sticky-cta">
    <a href="#signup" class="button button-3">お申込みはこちら</a>
  </div>
</div>
</nav>



<!-- Hero Section -->
  
<section class="hero">
  <h1 id="dynamic-h1" class="hero-title">HERO IS SET TO FILL VIEWPORT ON LOAD AND TAKES NAVBAR INTO CONSIDERATION</h1>



      <script>
        // Array of school names from the provided JSON file
        const schoolNames = [
            "denenchofu-yukigaya",
            "kamata-ekimae",
            "ikegami",
            "toyocho",
            "nagahara",
            "monzennakacho",
            "togoshi",
            "seijo",
            "omori",
            "waseda",
            "rinkai-shinonome",
            "shinkawasaki",
            "todoroki",
            "ojima",
            "mitaka",
            "futamatagawa",
            "shin-urayasu",
            "tennocho",
            "minami-machida-grandberry-park",
            "oi",
            "harumi",
            "yotsuya",
            "akabane",
            "kita-shinagawa",
            "mizonokuchi",
            "yakou",
            "socola-minami-gyotoku",
            "saginomiya",
            "magome",
            "okurayama",
            "musashi-shinjo",
            "musashi-kosugi",
            "kawaguchi",
            "ikebukuro",
            "ueno",
            "kanamecho"
        ];

        // Function to update the hero title based on the URL
        function updateHeroTitle() {
            // Corrected ID to match the h1 element in the HTML
            const heroTitle = document.getElementById('dynamic-h1');
            const url = window.location.href;

            for (const name of schoolNames) {
                // Check if the URL contains the school name. Using a case-insensitive check.
                if (url.toLowerCase().includes(name.toLowerCase())) {
                    // Capitalize the first letter of each word for a clean display
                    const capitalizedName = name.split('-').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
                    heroTitle.textContent = `Welcome to Kids UP ${capitalizedName}!`;
                    // Exit the loop once a match is found
                    break; 
                }
            }
        }

        // Call the function when the page loads
        document.addEventListener('DOMContentLoaded', updateHeroTitle);
    </script>
</section>



<!-- Event About Section -->
<div class="party-event-about">
  <div class="container">

    <div class="about-event-wrapper">
    <div class="text">
    <h2>Kids UP クリスマスパーティー 2025</h2>
    <p>2種類のパーティー両方参加も大歓迎！！<br>
        2つのパーティーの合間の時間も無料でお子様をお預かりします♪<br>
        クリスマスを120％楽しめること間違いなし！</p>
   
    <a class="cta-button cta-secondary" href="">お申込みはこちら
        <svg class="arrow" viewBox="0 0 1006.31 837.38" xmlns="http://www.w3.org/2000/svg">
        <path d="M1006.22,415.05c-.03-.58-.08-1.15-.12-1.73-.04-.62-.08-1.24-.14-1.86-.07-.72-.17-1.44-.26-2.16-.06-.46-.11-.93-.18-1.39-.11-.78-.25-1.55-.39-2.32-.07-.4-.14-.8-.21-1.2-.15-.78-.33-1.56-.51-2.34-.09-.39-.17-.79-.27-1.18-.19-.75-.39-1.5-.6-2.24-.12-.42-.23-.84-.36-1.25-.21-.69-.44-1.38-.67-2.06-.16-.47-.31-.94-.48-1.4-.22-.61-.45-1.22-.69-1.83-.21-.53-.41-1.07-.63-1.59-.22-.53-.45-1.05-.68-1.57-.26-.59-.52-1.19-.8-1.78-.21-.45-.44-.89-.66-1.33-.32-.64-.64-1.29-.99-1.92-.21-.39-.42-.76-.64-1.14-.38-.67-.76-1.34-1.15-2.01-.21-.35-.43-.68-.64-1.03-.42-.67-.84-1.35-1.29-2.01-.23-.34-.47-.67-.7-1-.45-.64-.89-1.29-1.36-1.92-.28-.38-.58-.74-.86-1.12-.44-.57-.88-1.14-1.34-1.7-.4-.49-.82-.95-1.23-1.43-.37-.43-.74-.87-1.12-1.3-.82-.9-1.65-1.78-2.51-2.64L639.74,21.59c-28.78-28.78-75.45-28.78-104.23,0h0c-28.78,28.78-28.78,75.45,0,104.23l219.17,219.17H73.7c-40.7,0-73.7,33-73.7,73.7h0c0,40.71,33,73.7,73.7,73.7h680.97l-219.17,219.17c-28.78,28.78-28.78,75.45,0,104.23h0c28.78,28.78,75.45,28.78,104.23,0l344.99-344.99c.86-.86,1.7-1.74,2.51-2.64.38-.42.75-.86,1.12-1.29.41-.48.83-.95,1.23-1.43.46-.56.9-1.13,1.34-1.7.29-.37.58-.74.86-1.12.47-.63.92-1.28,1.36-1.92.23-.34.47-.67.7-1,.45-.66.87-1.34,1.29-2.01.21-.34.43-.68.64-1.03.4-.66.78-1.33,1.15-2.01.21-.38.43-.76.64-1.14.34-.64.66-1.28.99-1.92.22-.44.45-.89.66-1.33.28-.59.54-1.18.8-1.78.23-.52.46-1.04.68-1.57.22-.53.42-1.06.63-1.59.24-.61.47-1.21.69-1.83.17-.47.32-.94.48-1.4.23-.68.46-1.37.67-2.06.13-.42.24-.84.36-1.25.21-.74.42-1.49.6-2.24.1-.39.18-.78.27-1.18.18-.78.36-1.55.51-2.34.08-.4.14-.8.21-1.2.14-.77.28-1.54.39-2.32.07-.46.12-.93.18-1.39.09-.72.19-1.43.26-2.16.06-.62.1-1.24.14-1.86.04-.58.1-1.15.12-1.73.06-1.21.09-2.43.09-3.64h0c0-1.22-.03-2.43-.09-3.65Z"/>
        </svg>
    </a>
</div>

<div class="image-column">
  <img src="./images/about-event/about-event.png" alt="teachers" class="about-images">
</div>

</div>

</div>



<!-- Three Reasons Section -->

<!-- Row, from 768px and up -->

<div class="container three-reasons-row">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-1.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-2.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-3.php'; ?>

</div>


<!-- Swiper, from 768px and down-->
</div>

<div class="swiper three-reasons-swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-1.php'; ?>
    </div>
    <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-2.php'; ?>
    </div>
    <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-3.php'; ?>
    </div>
      <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-1.php'; ?>
    </div>
    <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-2.php'; ?>
    </div>
    <div class="swiper-slide">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/event-page-template/event-page-common-components/three-reasons-reason-3.php'; ?>
    </div>
  </div>

  <!-- Navigation -->
    <div class="three-reasons-nav">
              <?xml version="1.0" encoding="UTF-8"?>
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62 62" class="three-reasons-nav-prev">
                <circle id="Ellipse_12" data-name="Ellipse 12" class="swiper-button-bg" cx="31" cy="31" r="31"/>
                <g class="cls-4">
                  <g id="Group_134" data-name="Group 134">
                    <path id="Path_151" data-name="Path 151" class="swiper-button-arrow" d="M29.82,39.85l-9.88-9.31,9.88-9.31c.88-.8,2.24-.74,3.04.14.78.86.74,2.18-.09,2.99l-4.27,4.02h11.01c1.19,0,2.15.96,2.15,2.15s-.96,2.15-2.15,2.15h-11.01l4.27,4.03c.85.83.87,2.19.04,3.04-.81.83-2.13.87-2.99.09"/>
                  </g>
                </g>
              </svg>

              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62 62" class="three-reasons-nav-next">
                <circle id="Ellipse_12" data-name="Ellipse 12" class="swiper-button-bg" cx="31" cy="31" r="31"/>
                <g class="cls-4">
                  <g id="Group_134" data-name="Group 134">
                    <path id="Path_151" data-name="Path 151" class="swiper-button-arrow" d="M31.78,21.22l9.88,9.31-9.88,9.31c-.88.8-2.24.74-3.04-.14-.78-.86-.74-2.18.09-2.99l4.27-4.02h-11.01c-1.19,0-2.15-.96-2.15-2.15s.96-2.15,2.15-2.15h11.01l-4.27-4.03c-.85-.83-.87-2.19-.04-3.04.81-.83,2.13-.87,2.99-.09"/>
                  </g>
                </g>
              </svg>
    </div>



</div>



</div>
</div>


<div class="schools-list">
<div class="container prefecture-wrapper">
  <p id="loading-message">Loading school list...</p>
  <!-- JS will inject .prefecture.tokyo, .prefecture.kanagawa, etc. here -->
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const wrapper = document.querySelector('.prefecture-wrapper');
  const loadingMessage = document.getElementById('loading-message');
  if (loadingMessage) loadingMessage.remove();

  fetch('/global/event-page-template/event-page-common-components/school-lists/2025/school_info.json')
    .then(response => {
      if (!response.ok) throw new Error('Network response was not ok');
      return response.json();
    })
    .then(schoolInfo => {
      for (const prefectureKey in schoolInfo) {
        if (!schoolInfo.hasOwnProperty(prefectureKey)) continue;
        const prefectureData = schoolInfo[prefectureKey];
        const prefectureNameJp = prefectureData['日本語'];

        const prefectureDiv = document.createElement('div');
        prefectureDiv.className = 'prefecture';
        prefectureDiv.classList.add(`prefecture-${prefectureKey.toLowerCase()}`);

        const prefectureHeader = document.createElement('div');
        prefectureHeader.className = 'prefecture-header';
        prefectureHeader.innerHTML = `
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.45 65.37" class="location-pin">
          <path class="map-pin-3-bg-color" d="M26.21,65.37c-1.54,0-3.83-.43-6-2.47-5.94-5.56-10.6-11.26-14.24-17.39-2.85-4.79-4.64-9.31-5.48-13.81C.12,29.72-.04,28,0,26.45-.06,15.11,7.39,4.78,18.18,1.28c2.61-.85,5.32-1.28,8.05-1.28,10.04,0,19.33,5.93,23.69,15.11,2.52,5.31,3.16,11.1,1.9,17.18-.98,4.75-2.94,9.37-6.15,14.52-2.65,4.24-5.86,8.33-9.83,12.5-1.18,1.24-2.39,2.43-3.63,3.59-2.19,2.03-4.47,2.46-6.01,2.46Z"/>
          <path class="map-pin-3-main-color" d="M6.84,26.53c-.1-8.32,5.25-16.09,13.45-18.75,9.26-3.01,19.23,1.35,23.46,10.26,1.96,4.12,2.3,8.43,1.39,12.87-.92,4.45-2.87,8.46-5.26,12.29-2.58,4.13-5.63,7.89-8.98,11.41-1.08,1.13-2.18,2.23-3.33,3.29-.9.84-1.79.85-2.67.01-5.05-4.73-9.51-9.94-13.05-15.9-2.14-3.61-3.86-7.41-4.63-11.57-.25-1.34-.41-2.68-.37-3.91ZM26.2,36.9c5.92,0,10.67-4.72,10.68-10.63,0-5.93-4.71-10.67-10.62-10.69-5.95-.01-10.7,4.71-10.7,10.66,0,5.92,4.73,10.66,10.64,10.66Z"/>
        </svg>
          <h2>${prefectureNameJp}</h2>
        `;
        prefectureDiv.appendChild(prefectureHeader);

        const wardsContainer = document.createElement('div');
        wardsContainer.className = 'wards-container';

        for (const wardKey in prefectureData) {
          if (wardKey === '日本語') continue;
          const wardData = prefectureData[wardKey];
          if (!Array.isArray(wardData.schools)) continue;

          const wardDiv = document.createElement('div');
          wardDiv.className = 'ward';

          const wardHeader = document.createElement('h3');
          wardHeader.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <circle cx="12" cy="12" r="8"/>
            </svg>
            <span>${wardData['日本語']}</span>
          `;
          wardDiv.appendChild(wardHeader);

          const schoolList = document.createElement('ul');
          wardData.schools.forEach(school => {
            const li = document.createElement('li');
            li.textContent = school;
            schoolList.appendChild(li);
          });

          wardDiv.appendChild(schoolList);
          wardsContainer.appendChild(wardDiv);
        }

        prefectureDiv.appendChild(wardsContainer);
        wrapper.appendChild(prefectureDiv);
      }
    })
    .catch(error => {
      console.error('There was a problem fetching the school data:', error);
      const msg = document.createElement('p');
      msg.textContent =
        'Failed to load school data. Please ensure "school_info.json" is in the same directory and you are using a local web server.';
      document.querySelector('main').appendChild(msg);
    });
});
</script>
</div>

<div class="div-2"></div>


<div class="div-1">
  
</div>

  <script>
    const toggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    toggle.addEventListener('click', () => {
      toggle.classList.toggle('opened');
      navLinks.classList.toggle('show');
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!toggle.contains(e.target) && !navLinks.contains(e.target)) {
        toggle.classList.remove('opened');
        navLinks.classList.remove('show');
      }
    });

    // Close when clicking any link
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        toggle.classList.remove('opened');
        navLinks.classList.remove('show');
      });
    });



document.addEventListener('DOMContentLoaded', () => {
  const cta = document.querySelector('.sticky-cta');
  const hideTriggers = document.querySelectorAll('.hero, .footer, .mobile-cta-hide'); // Now includes the ID

  if (cta && hideTriggers.length > 0) {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.7
    };

    const observer = new IntersectionObserver((entries) => {
      const isAnyTriggerIntersecting = entries.some(entry => entry.isIntersecting);

      if (isAnyTriggerIntersecting) {
        cta.style.transform = 'translateY(100%)';
      } else {
        cta.style.transform = 'translateY(0%)';
      }
    }, observerOptions);

    hideTriggers.forEach(trigger => {
      observer.observe(trigger);
    });
  }
});
  </script>


<script>
        // Array of school names from the provided JSON file
        const schoolNames = [
            "denenchofu-yukigaya",
            "kamata-ekimae",
            "ikegami",
            "toyocho",
            "nagahara",
            "monzennakacho",
            "togoshi",
            "seijo",
            "omori",
            "waseda",
            "rinkai-shinonome",
            "shinkawasaki",
            "todoroki",
            "ojima",
            "mitaka",
            "futamatagawa",
            "shin-urayasu",
            "tennocho",
            "minami-machida-grandberry-park",
            "oi",
            "harumi",
            "yotsuya",
            "akabane",
            "kita-shinagawa",
            "mizonokuchi",
            "yakou",
            "socola-minami-gyotoku",
            "saginomiya",
            "magome",
            "okurayama",
            "musashi-shinjo",
            "musashi-kosugi",
            "kawaguchi",
            "ikebukuro",
            "ueno",
            "kanamecho"
        ];

        // Function to update the hero title based on the URL
        function updateHeroTitle() {
            const heroTitle = document.getElementById('hero-title');
            const url = window.location.href;

            for (const name of schoolNames) {
                // Check if the URL contains the school name. Using a case-insensitive check.
                if (url.toLowerCase().includes(name.toLowerCase())) {
                    // Capitalize the first letter of each word for a clean display
                    const capitalizedName = name.split('-').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
                    heroTitle.textContent = `Welcome to Kids UP ${capitalizedName}!`;
                    // Exit the loop once a match is found
                    break; 
                }
            }
        }

        // Call the function when the page loads
        document.addEventListener('DOMContentLoaded', updateHeroTitle);
    </script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".three-reasons-swiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 16, // 1rem

    navigation: {
      nextEl: ".three-reasons-swiper .three-reasons-nav-next",
      prevEl: ".three-reasons-swiper .three-reasons-nav-prev",
    },
    on: {
      init: equalizeHeights,
      resize: equalizeHeights,
      slideChange: equalizeHeights
    }
  });

  function equalizeHeights() {
    const boxes = document.querySelectorAll(
      ".three-reasons-swiper .swiper-slide .reason-box"
    );
    let maxHeight = 0;

    // reset first
    boxes.forEach(box => {
      box.style.height = "auto";
    });

    // measure tallest
    boxes.forEach(box => {
      if (box.offsetHeight > maxHeight) {
        maxHeight = box.offsetHeight;
      }
    });

    // apply tallest height to all
    boxes.forEach(box => {
      box.style.height = maxHeight + "px";
    });
  }
</script>


  <script src="./template.js"></script>
</body>
</html>
