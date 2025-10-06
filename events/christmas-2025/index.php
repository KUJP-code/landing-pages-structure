<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Responsive Navbar with Custom Hamburger</title>


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP&family=Noto+Sans+SC&family=Noto+Serif+JP&family=Noto+Serif+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/global/event-page-template/event-page-stylesheets/event-pages-common.css" />
  <link rel="stylesheet" href="./stylesheets/christmas-2025-style.css" />

</head>
<body>

  <!-- NAV -->
  <nav>
    <div class="nav-inner">
      <a class="navbar-brand" href="#"><img src="/global/event-page-template/event-page-images/hero-logo-white.svg" alt="nav logo" /></a>

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
    <a href="#signup" class="button button-4">お申込みはこちら</a>
  </div>
</div>
</nav>



<!-- Hero Section -->
  
<section class="hero">

  <div class="hero-top">

    <div class="logo-box">
      <img src="./images/hero-images/main-hero-logo.svg" alt="Kids UP Christmas Party" class="hero-logo">
    </div>

<div class="text-box">
<h1 id="dynamic-h1" class="hero-title">ワクワクいっぱいの<br>クリスマスパーティーへようこそ！</h1>
<p id="dynamic-date" class="hero-date">12月20日（土）
<p class="p-sub">※開催日はスクールにより異なります。</p>
</p>

<h2>クラフトやゲーム、スナックビュッフェなど内容は盛りだくさん！<br>
クリスマスプレゼントももらえるよ♪</h2>
</div>
</div>


<div class="hero-mid">
  <div class="santas-workshop">
<img src="./images/hero-images/santas-workshop.svg" alt="Santa's Workshop" class="hero-logo">

<div class="inner-contents">

<div class="show-accordion">
   <img src="./images/hero-images/hero-mini-images/hero-workshop-parcel.jpg" alt="" class="hero-side">
</div>

<div class="show-both">

  <img src="./images/hero-images/hero-mini-images/hero-workshop-santa.jpg" alt="" class="hero-center">

</div>

<div class="show-accordion">
   <img src="./images/hero-images/hero-mini-images/hero-workshop-ornament.jpg" alt="" class="hero-side">
</div>

</div>

<div class="show-both">
  <h3>
  ❶ 9:00-10:20<br class="time-break"> ❸ 14:00-15:20
</h3>

</div>




  </div>


  <div class="christmas-market">
<img src="./images/hero-images/christmas-market.svg" alt="Christmas Market" class="hero-logo">

<div class="show-accordion">
  This content shows only in accordion mode (under 576px).
</div>



<div class="show-both">
  <h3>❷ 11:00-12:20<br class="time-break"> ❹ 16:00-17:20</h3>

        
</div>
  </div>



<script>
document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.hero-mid');
  if (!container) return;

  const panels = Array.from(container.querySelectorAll('.santas-workshop, .christmas-market'));

  // Make panels keyboard-focusable if needed
  panels.forEach(p => {
    if (!p.hasAttribute('tabindex')) p.setAttribute('tabindex', '0');
  });

  // Reset back to 50/50 state
  function reset() {
    panels.forEach(p => {
      p.classList.remove('active', 'inactive');
      // remove visible from any .show-accordion children
      p.querySelectorAll('.show-accordion.visible')
        .forEach(el => el.classList.remove('visible'));
    });
  }

  // Activate one panel (accordion mode)
  function activate(panel) {
    // If already active → reset to 50/50
    if (panel.classList.contains('active')) {
      reset();
      return;
    }

    panels.forEach(p => {
      if (p === panel) {
        p.classList.add('active');
        p.classList.remove('inactive');
        // Show accordion-only content
        p.querySelectorAll('.show-accordion')
          .forEach(el => el.classList.add('visible'));
      } else {
        p.classList.remove('active');
        p.classList.add('inactive');
        // Hide accordion-only content
        p.querySelectorAll('.show-accordion.visible')
          .forEach(el => el.classList.remove('visible'));
      }
    });
  }

  // Event listeners
  panels.forEach(panel => {
    panel.addEventListener('click', () => activate(panel));
    panel.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ' || e.key === 'Spacebar') {
        e.preventDefault();
        activate(panel);
      }
    });
  });

  // Optional: click outside to reset
  document.addEventListener('click', (e) => {
    if (!container.contains(e.target)) {
      reset();
    }
  });
});
</script>



</div>



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
    
    <div class="hero-bottom">

 <a href="" class="cta-button cta-primary">お申込みはこちら</a>
    </div>

</section>

<section class="gallery">
  
</section>



<!-- Event About Section -->

<div class="party-event-about">
  <div class="container">

    <div class="mobile-cta-hide about-event-wrapper">
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
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>






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
      // This loop builds the HTML from your JSON
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
      
      // ✨ NEW: Helper function for smooth scrolling with a top offset ✨
      const scrollToElementWithOffset = (element, remOffset) => {
        const remInPixels = parseFloat(getComputedStyle(document.documentElement).fontSize);
        const offsetInPixels = remOffset * remInPixels;
        const elementPosition = element.getBoundingClientRect().top + window.scrollY;
        const targetPosition = elementPosition - offsetInPixels;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      };

      // Accordion logic with auto-close and scroll functionality
      const allPrefectures = document.querySelectorAll('.prefecture');

      allPrefectures.forEach(prefecture => {
        const header = prefecture.querySelector('.prefecture-header');
        header.addEventListener('click', () => {
          const wasOpen = prefecture.classList.contains('expanded');

          allPrefectures.forEach(p => p.classList.remove('expanded'));

          if (!wasOpen) {
            prefecture.classList.add('expanded');
            // Use the new helper function for scrolling
            scrollToElementWithOffset(prefecture, 7);
          } else {
            // Use the new helper function for scrolling
            scrollToElementWithOffset(wrapper, 7);
          }
        });
      });
      // Accordion logic ends here

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

<section class="party-1">
<div class="container">

  <div class="party-logo-times-row">
      <div class="logo-box">
        <img src="./images/hero-images/santas-workshop.svg" alt="" class="img-fluid">
      </div>


    <div class="time-box">
        <h3>❶ 9:00-10:20</h3>
        <h3>❸ 14:00-15:20</h3>
    </div>
            <p class="time-disclaimer">※一部のスクールは開催時間が異なります。</p>
  </div>

<div class="meet-santa">

  <div class="activity-img">
   <img src="./images/santa-workshop/meet-santa.jpg" alt="" class="img-fluid"> 
  </div>

  <div class="party-textbox">
    <h3>
      サンタがやってくる！
    </h3>

    <p>
      大きな袋をかついだサンタさんがKids UPにやってくる！一人ひとりに、プレゼントを配ってくれるよ♪<br>
      <br>
    </p>

    <img src="./images/santa-workshop/decoration-present.svg" alt="サンタがやってくる！" class="decoration-present">
  </div>


</div>

<div class="pass-the-parcel">
 <div class="activity-img">
   <img src="./images/santa-workshop/pass-the-parcel.jpg" alt="" class="img-fluid"> 
  </div>

    <div class="party-textbox">
    <h3>
      プレゼントリレー
    </h3>

    <p>
      サンタさんから届いた大きなプレゼントを、音楽に合わせてみんなで回していこう♪<br>
中には何が入っているかな？ラッピングをめくるたびにドキドキしちゃう！<br>

<img src="./images/santa-workshop/decoration-stars.svg" alt="" class="decoration-stars">
      <br>
    </p>

   
  </div>
</div>


<div class="ornament">

  <div class="activity-img">
    <img src="./images/santa-workshop/ornament.jpg" alt="" class="img-fluid">
  </div>

      <div class="party-textbox">
    <h3>
      オーナメント作り
    </h3>

    <p>
      かわいいマスコットやデコレーションを透明なボールの中に入れて、きらきらなオーナメントを作るよ！
    </p>

   
  </div>

</div>

</div>


</section>

<section class="cta-party-times">

  <div class="container">
<div class="party-times-box">
              <h2>選べる2つのパーティー！<br>両方参加もOK♪</h2>
    <h3>
      ❶&❷ 9:00 - 12:20<br>
      ❸&❹ 14:00 - 17:20
    </h3>

    <p>❶&❷、もしくは❸&❹をお申込みの方は、<br class="break-hide">1回目のパーティー後、2回目のパーティー スタートまでのお時間は<br class="break-hide">無料でお預かりいたします。<br>
     <a href="#party-times" class="party-times-link"> ※一部のスクールは開催時間が異なります。</a>
  </p>

  </div>
           <a class="cta-button cta-primary" href="">お申込みはこちら
        
        </a>

</div>
</section>

<section class="party-2">
<div class="container">
    <div class="party-logo-times-row">
      <div class="logo-box">
        <img src="./images/hero-images/christmas-market.svg" alt="" class="img-fluid">
      </div>


    <div class="time-box">
        <h3>❷ 11:00-12:20</h3>
        <h3>❹ 16:00-17:20</h3>
    </div>
      <p class="time-disclaimer">※一部のスクールは開催時間が異なります。</p>
  </div>



<div class="christmas-games">
<img src="./images/christmas-markets/tickets-1.svg" alt="" class="decoration-tickets-1">
<img src="./images/christmas-markets/tickets-2.svg" alt="" class="decoration-tickets-2">
<img src="./images/christmas-markets/tickets-1.svg" alt="" class="decoration-tickets-3">


  <div class="h3-box">
  <h3>クリスマスゲーム</h3>
</div>




<div class="card-container">


  
<div class="top-trumps">
  <div class="card">

<h3>巨大カードゲーム</h3>

    <img src="./images/christmas-markets/card-game.jpg" alt="" class="img-fluid">

            <p>大きなカードで対決だ！<br>
ティーチャーや他のチーム<br>
に勝てるかな？！</p>
  </div>
</div>

<div class="reindeer-game">
  <div class="card">
<h3>トナカイの輪投げ</h3>

        <img src="./images/christmas-markets/reindeer-game.jpg" alt="" class="img-fluid">

        <p>先生がトナカイになっちゃった！？<br>
          輪投げでスナックビュッフェのチケットをゲットしよう！</p>


  </div>
</div>
</div>



</div>

<div class="lower-container">

  <div class="snack-buffet card-style">
    <img src="./images/christmas-markets/snack-buffet-img.jpg" alt="" class="buffet-img">
    <div class="text">
      <h3>スナックビュッフェ</h3>
      <p>クリスマスマーケットへようこそ！<br>
      ゲームでゲットしたチケットを使って<br>
      スナックをゲットしよう♪<br>
      <br>
      <span class="p-sub">アレルゲン： 小麦, 卵, 乳, 大豆, ゼラチン, りんご</span>
      </p>
    </div>
  </div>

  <div class="raffle card-style">
    <h3>クリスマス抽選会</h3>
    <img src="./images/christmas-markets/raffle-img.jpg" alt="">
    <div class="text">
      <p>
        クリスマスバージョンのくじ引きタイム♪<br>
チケットをもらい、自分の番号が呼ばれたら...<br>
その番号のプレゼントが当たるよ！
      </p>
    </div>
  </div>

</div>

  </div>



</section>


<section class="all-parties">
  <div class="transition-bar"></div>
<div class="container">

  <div class="title-box">

    <div class="decoration-row">
      <img src="./images/all-parties/all-parties-title-decoration-1.svg" alt="" class="christmas-lights">
    </div>

    <h2>全パーティー<br class="mobile-break">共通</h2>
    

    <div class="decoration-row">
      <img src="./images/all-parties/all-parties-title-decoration-2.svg" alt="" class="christmas-lights">
    </div>

  </div>

  <p class="both-parties-general">全てのパーティーで開催されるイベントはこちら！<br>
限定のマスコットバッジがもらえるチャンスをお見逃しなく♪</p>

  <div class="features">

<div class="feature-1">
<div class="text">
<h3>NEW★Kids UP<br>
  オリジナル
カードゲーム！</h3>
<p>
  KidsUPオリジナル！<br>
駆け引きが楽しいわくわくの新カードゲームが登場★<br>
<br>
ルールは簡単だから誰でも楽しめるよ！<br>
遊んだ後はカードゲームをプレゼント！<br>
</p>
</div>
<img src="./images/all-parties/top-trumps.webp" alt="" class="image">
</div>


<div class="feature-2">
<div class="images">



   <div class="ribbon">
<?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238.8 70.63">

  <path class="ribbon-back" d="M182.35,21.3v28.1c14.58,4.47,27.44,11.77,37.08,21.23,1.05-6.14,1.93-12.17,2.66-18.08,5.72-2.09,11.29-4.06,16.7-5.92-13.72-13.47-33.97-22.53-56.44-25.33Z"/>
  <polygon class="ribbon-fold" points="211.17 44.64 182.08 48.87 182.82 7.49 211.7 15.28 211.17 44.64"/>
  <path class="ribbon-back" d="M56.58,18.49C34.31,20.59,14.05,28.87,0,41.69c5.34,2.05,10.84,4.22,16.48,6.52.52,5.93,1.18,11.99,2,18.17,10.04-9.16,23.25-16.01,38.09-19.94v-27.94Z"/>
  <polygon class="ribbon-fold" points="27.77 40.91 56.69 46.18 57.44 4.81 28.3 11.55 27.77 40.91"/>
  <path class="ribbon-front" d="M119.29,29.4c.39,0,.77.01,1.16.02,31.06.62,62.02,5.65,91.11,15.07.18-9.79.35-19.57.53-29.36C183,5.72,152.04.68,120.98.06c-.39,0-.77-.01-1.16-.02C88.76-.46,57.64,3.45,28.23,11.81c-.18,9.79-.35,19.57-.53,29.36,29.41-8.36,60.54-12.28,91.59-11.77Z"/>
  <text class="svg-text" transform="translate(36.65 26.23) rotate(-9.63)"><tspan x="0" y="0">フ</tspan></text>
  <text class="svg-text" transform="translate(46.98 24.45) rotate(-8.02)"><tspan x="0" y="0">ォ</tspan></text>
  <text class="svg-text" transform="translate(55.88 23.14) rotate(-6.7)"><tspan x="0" y="0">ト</tspan></text>
  <text class="svg-text" transform="translate(67.07 21.81) rotate(-5.25)"><tspan x="0" y="0">ブ</tspan></text>
  <text class="svg-text" transform="translate(78.82 20.72) rotate(-3.69)"><tspan x="0" y="0">ー</tspan></text>
  <text class="svg-text" transform="translate(90.52 19.96) rotate(-2.12)"><tspan x="0" y="0">ス</tspan></text>
  <text class="svg-text" transform="translate(102.24 19.56) rotate(-1.11)"><tspan x="0" y="0"> </tspan></text>
  <text class="svg-text" transform="translate(106.19 19.46) rotate(-.19)"><tspan x="0" y="0">&amp;</tspan></text>
  <text class="svg-text" transform="translate(115.96 19.45) rotate(.74)"><tspan x="0" y="0"> </tspan></text>
  <text class="svg-text" transform="translate(119.57 19.46) rotate(1.82)"><tspan x="0" y="0">フ</tspan></text>
  <text class="svg-text" transform="translate(130.06 19.76) rotate(3.37)"><tspan x="0" y="0">ォ</tspan></text>
  <text class="svg-text" transform="translate(139.03 20.23) rotate(4.77)"><tspan x="0" y="0">ト</tspan></text>
  <text class="svg-text" transform="translate(150.57 21.17) rotate(6.45)"><tspan x="0" y="0">サ</tspan></text>
  <text class="svg-text" transform="translate(162.41 22.5) rotate(8.49)"><tspan x="0" y="0">ー</tspan></text>
  <text class="svg-text" transform="translate(173.67 24.16) rotate(10.71)"><tspan x="0" y="0">ビ</tspan></text>
  <text class="svg-text" transform="translate(185.03 26.29) rotate(13.16)"><tspan x="0" y="0">ス</tspan></text>
  <text class="svg-text" transform="translate(192.65 27.93) rotate(15.52)"><tspan x="0" y="0">！</tspan></text>
</svg>

  </div>
  <img src="./images/all-parties/photo-service.jpg" alt="" class="photo">
</div>

<div class="text">
<p>  クリスマスムードにデコレーション
されたフォトブースで写真を撮ろう♪<br>
フォトサービスを申し込んで、
思い出を家族とシェアしよう♪</p>


<img src="./images/all-parties/camera-decoration.svg" alt="" class="camera-decoration">
</div>
</div>


<div class="feature-3">
  <div class="text">
    <h3>マスコットバッジを<br>
ゲットしよう！</h3>

<p>
  クリスマスバージョンのバッジを手に入れよう！<br>
どのマスコットのバッジがもらえるかはお楽しみ！<br>
2つのパーティーに参加すれば、違う種類の
バッジが手に入るよ！
</p>
  </div>


    <img src="./images/all-parties/badge.png" alt="" class="image">

</div>




</div>
</div>



</section>



<section class="lower-cta">
<div class="container lower-cta-contents">
<div class="image">
  <img src="./images/generic-images/lower-cta-img.png" alt="Jot's Christmas Tree" >
</div>

<div class="text">
<h2>

参加枠には限りがございますので、<br>
お申込みはお早めに!
</h2>

    <a class="cta-button cta-secondary" href="">お申込みはこちら
        <svg class="arrow" viewBox="0 0 1006.31 837.38" xmlns="http://www.w3.org/2000/svg">
        <path d="M1006.22,415.05c-.03-.58-.08-1.15-.12-1.73-.04-.62-.08-1.24-.14-1.86-.07-.72-.17-1.44-.26-2.16-.06-.46-.11-.93-.18-1.39-.11-.78-.25-1.55-.39-2.32-.07-.4-.14-.8-.21-1.2-.15-.78-.33-1.56-.51-2.34-.09-.39-.17-.79-.27-1.18-.19-.75-.39-1.5-.6-2.24-.12-.42-.23-.84-.36-1.25-.21-.69-.44-1.38-.67-2.06-.16-.47-.31-.94-.48-1.4-.22-.61-.45-1.22-.69-1.83-.21-.53-.41-1.07-.63-1.59-.22-.53-.45-1.05-.68-1.57-.26-.59-.52-1.19-.8-1.78-.21-.45-.44-.89-.66-1.33-.32-.64-.64-1.29-.99-1.92-.21-.39-.42-.76-.64-1.14-.38-.67-.76-1.34-1.15-2.01-.21-.35-.43-.68-.64-1.03-.42-.67-.84-1.35-1.29-2.01-.23-.34-.47-.67-.7-1-.45-.64-.89-1.29-1.36-1.92-.28-.38-.58-.74-.86-1.12-.44-.57-.88-1.14-1.34-1.7-.4-.49-.82-.95-1.23-1.43-.37-.43-.74-.87-1.12-1.3-.82-.9-1.65-1.78-2.51-2.64L639.74,21.59c-28.78-28.78-75.45-28.78-104.23,0h0c-28.78,28.78-28.78,75.45,0,104.23l219.17,219.17H73.7c-40.7,0-73.7,33-73.7,73.7h0c0,40.71,33,73.7,73.7,73.7h680.97l-219.17,219.17c-28.78,28.78-28.78,75.45,0,104.23h0c28.78,28.78,75.45,28.78,104.23,0l344.99-344.99c.86-.86,1.7-1.74,2.51-2.64.38-.42.75-.86,1.12-1.29.41-.48.83-.95,1.23-1.43.46-.56.9-1.13,1.34-1.7.29-.37.58-.74.86-1.12.47-.63.92-1.28,1.36-1.92.23-.34.47-.67.7-1,.45-.66.87-1.34,1.29-2.01.21-.34.43-.68.64-1.03.4-.66.78-1.33,1.15-2.01.21-.38.43-.76.64-1.14.34-.64.66-1.28.99-1.92.22-.44.45-.89.66-1.33.28-.59.54-1.18.8-1.78.23-.52.46-1.04.68-1.57.22-.53.42-1.06.63-1.59.24-.61.47-1.21.69-1.83.17-.47.32-.94.48-1.4.23-.68.46-1.37.67-2.06.13-.42.24-.84.36-1.25.21-.74.42-1.49.6-2.24.1-.39.18-.78.27-1.18.18-.78.36-1.55.51-2.34.08-.4.14-.8.21-1.2.14-.77.28-1.54.39-2.32.07-.46.12-.93.18-1.39.09-.72.19-1.43.26-2.16.06-.62.1-1.24.14-1.86.04-.58.1-1.15.12-1.73.06-1.21.09-2.43.09-3.64h0c0-1.22-.03-2.43-.09-3.65Z"/>
        </svg>
    </a>
</div>

</div>



</section>
  

<section class="gallery">

  <div class="swiper gallery-swiper">
        <div class="swiper-wrapper">
            </div>
    </div>

    <div class="gallery-nav">
              <?xml version="1.0" encoding="UTF-8"?>
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62 62" class="gallery-nav-prev">
                <circle id="Ellipse_12" data-name="Ellipse 12" class="swiper-button-bg" cx="31" cy="31" r="31"/>
                <g class="cls-4">
                  <g id="Group_134" data-name="Group 134">
                    <path id="Path_151" data-name="Path 151" class="swiper-button-arrow" d="M29.82,39.85l-9.88-9.31,9.88-9.31c.88-.8,2.24-.74,3.04.14.78.86.74,2.18-.09,2.99l-4.27,4.02h11.01c1.19,0,2.15.96,2.15,2.15s-.96,2.15-2.15,2.15h-11.01l4.27,4.03c.85.83.87,2.19.04,3.04-.81.83-2.13.87-2.99.09"/>
                  </g>
                </g>
              </svg>

              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62 62" class="gallery-nav-next">
                <circle id="Ellipse_12" data-name="Ellipse 12" class="swiper-button-bg" cx="31" cy="31" r="31"/>
                <g class="cls-4">
                  <g id="Group_134" data-name="Group 134">
                    <path id="Path_151" data-name="Path 151" class="swiper-button-arrow" d="M31.78,21.22l9.88,9.31-9.88,9.31c-.88.8-2.24.74-3.04-.14-.78-.86-.74-2.18.09-2.99l4.27-4.02h-11.01c-1.19,0-2.15-.96-2.15-2.15s.96-2.15,2.15-2.15h11.01l-4.27-4.03c-.85-.83-.87-2.19-.04-3.04.81-.83,2.13-.87,2.99-.09"/>
                  </g>
                </g>
              </svg>
    </div>


    <div id="image-modal" class="image-modal">
        <div class="modal-background"></div>
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modal-image">
    </div>


</section>

<section class="sign-up" id="#sign-up">
  
<div class="container">

<h2>クリスマスパーティー2025ご参加までの流れ</h2>

<div class="sign-up-row">

  <div class="step">
    
    <div class="step-image">


<?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_4_copy" data-name="Layer 4 copy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.3 535.35">
  <defs>
    <style>
      .sign-up-step-1-1 {
        fill: none;
      }



    </style>
    <clipPath id="clippath">
      <rect class="sign-up-step-1-1" x="39.86" y=".13" width="187.88" height="48.23"/>
    </clipPath>
  </defs>
  <path id="Path_351-2" data-name="Path 351-2" class="sign-up-bg" d="M476.88,535.35H34.41c-19,0-34.41-15.41-34.41-34.41V58.46C0,39.46,15.41,24.05,34.41,24.05h442.47c19,0,34.41,15.41,34.41,34.41v442.47c0,19-15.41,34.41-34.41,34.41"/>
  <path id="Path_353-2" data-name="Path 353-2" class="sign-up-stroke" d="M362.61,384.54c-11.56-.13-11.56-17.41,0-17.67,11.56.27,11.56,17.41,0,17.67M362.61,354.24c-28.17.8-28.17,41.99,0,42.79,28.17-.66,28.17-41.99,0-42.79"/>
  <path id="Path_354-2" data-name="Path 354-2" class="sign-up-stroke" d="M387.73,207.42h-50.36c-8.24,0-8.24,12.49,0,12.62h50.36c8.24-.13,8.24-12.62,0-12.62"/>
  <g id="Group_277" data-name="Group 277">
    <path id="Path_355" data-name="Path 355" class="sign-up-stroke" d="M179.78,258.17c1.33-.27,2.79-.4,4.25-.4s7.97,0,12.09,3.19c4.78,4.38,5.18,11.69.8,16.48-1.33,1.46-3.06,2.66-5.05,3.32-2.39.8-5.05,1.2-7.57,1.2s-3.99,0-3.99-2.79,1.86-2.39,3.06-2.39c3.06,0,10.5,0,10.5-6.91s-5.45-7.04-9.57-7.04-2.92.13-4.38.4v6.91c0,4.25,0,11.83-8.11,11.83-5.05.13-9.3-3.85-9.43-9.04v-.53c0-8.37,8.24-11.56,11.96-13.02v-4.92c-2.66.13-8.11.13-8.24.13-1.59,0-3.32,0-3.32-2.66s2.13-2.66,3.19-2.66c5.31,0,5.98,0,8.37-.13v-3.06c0-1.06,0-2.92,2.79-2.92s2.79,1.73,2.79,2.92v2.79c3.72-.13,4.12-.13,4.52-.13,1.33-.27,2.52.66,2.79,1.99v.66c0,1.86-1.2,2.39-1.46,2.52-.53.13-1.2.27-5.98.4v3.85h0ZM174.33,264.82c-2.39.93-6.64,2.92-6.64,7.31,0,2.26,1.46,4.25,3.72,4.52,1.99,0,2.92-1.86,2.92-6.64v-5.18ZM189.88,244.89c2.79,0,10.76,6.91,10.76,9.97-.13,1.59-1.46,2.92-3.06,2.92s-1.59-.53-2.92-2.52c-1.59-2.26-3.72-4.25-6.11-5.71-1.2-.53-1.73-1.86-1.2-3.06.13-.27.27-.53.53-.66.53-.53,1.33-.8,1.99-.93"/>
    <path id="Path_356" data-name="Path 356" class="sign-up-stroke" d="M222.3,245.02c-.27-1.33.66-2.52,1.99-2.66h.66c2.26,0,2.92.93,2.92,2.66v3.06h10.23c3.45,0,5.45,1.2,5.45,5.45v14.62c0,4.38-2.13,5.45-5.45,5.45h-10.23v7.71c.27,1.33-.66,2.52-1.99,2.66h-.66c-2.26,0-2.92-.93-2.92-2.66v-7.71h-10.1c-3.32,0-5.45-1.06-5.45-5.45v-14.62c0-4.25,1.99-5.45,5.45-5.45h10.1v-3.06ZM212.2,258.31h10.1v-5.45h-8.64c-.66-.13-1.33.4-1.46,1.06v4.38ZM222.3,268.54v-5.58h-10.1v4.12c-.13.66.4,1.33,1.06,1.46h9.04ZM227.75,252.99v5.45h10.1v-3.85c.13-.8-.4-1.46-1.2-1.46h-8.9v-.13h0ZM237.98,262.96h-10.1v5.58h8.64c.66.13,1.46-.4,1.59-1.06v-4.52h-.13,0Z"/>
    <path id="Path_357" data-name="Path 357" class="sign-up-stroke" d="M287.27,277.57c1.33-.13,2.39.66,2.66,1.99v.53c.13,1.33-.8,2.52-2.13,2.66h-19.27c-7.97,0-10.36-3.59-11.16-4.92-.93,1.2-1.86,2.39-2.92,3.59-1.33,1.46-1.99,1.99-3.06,1.99-1.73-.13-3.06-1.46-2.92-3.19,0-1.2.4-1.59,2.39-3.19.66-.53,2.26-2.13,3.19-2.92v-8.77c0-.27,0-1.33-1.06-1.33h-1.86c-1.2.13-2.39-.66-2.52-1.99v-.53c0-1.99.8-2.79,2.66-2.79h3.06c3.99,0,4.92.93,4.92,4.92v7.97c.53,5.18,5.71,5.98,9.04,5.98h19,0ZM252.06,242.76c1.46,0,4.38,2.52,5.85,3.72,2.52,2.13,2.79,2.79,2.79,3.72-.13,1.59-1.33,2.92-2.92,2.92s-1.46-.4-2.79-1.59c-1.2-1.2-3.19-2.79-3.45-3.06-1.33-1.06-2.26-1.86-2.26-2.79-.13-1.46,1.06-2.92,2.79-2.92M266.28,248.87c-1.46,0-2.66-1.2-2.66-2.66s1.2-2.66,2.66-2.66h7.84c4.52,0,4.65,1.99,5.05,5.98.53,5.71,2.52,11.29,5.85,16.08.8,1.06,2.26,2.66,3.45,3.99.66.66,1.2,1.46,1.33,2.39-.13,1.59-1.46,2.92-3.06,3.06-1.33,0-2.66-1.06-4.38-3.32-2.92-3.85-4.92-8.24-6.11-12.89-1.33,3.85-3.19,7.44-5.58,10.63-1.73,2.26-4.52,5.58-6.64,5.58-1.59-.13-2.92-1.46-2.92-3.06s.4-1.33.8-1.73c2.39-1.86,4.52-4.12,6.25-6.64,3.59-5.18,5.45-11.43,5.45-13.69s0-1.06-1.06-1.06h-6.25Z"/>
  </g>
  <rect class="sign-up-step-1-1" x="148.95" y="238.51" width="131.94" height="54.88"/>
  <g id="Group_277-2" data-name="Group 277-2">
    <path id="Path_355-2" data-name="Path 355-2" class="sign-up-main-colour" d="M179.78,258.17c1.33-.27,2.79-.4,4.25-.4s7.97,0,12.09,3.19c4.78,4.38,5.18,11.69.8,16.48-1.33,1.46-3.06,2.66-5.05,3.32-2.39.8-5.05,1.2-7.57,1.2s-3.99,0-3.99-2.79,1.86-2.39,3.06-2.39c3.06,0,10.5,0,10.5-6.91s-5.45-7.04-9.57-7.04-2.92.13-4.38.4v6.91c0,4.25,0,11.83-8.11,11.83-5.05.13-9.3-3.85-9.43-9.04v-.53c0-8.37,8.24-11.56,11.96-13.02v-4.92c-2.66.13-8.11.13-8.24.13-1.59,0-3.32,0-3.32-2.66s2.13-2.66,3.19-2.66c5.31,0,5.98,0,8.37-.13v-3.06c0-1.06,0-2.92,2.79-2.92s2.79,1.73,2.79,2.92v2.79c3.72-.13,4.12-.13,4.52-.13,1.33-.27,2.52.66,2.79,1.99v.66c0,1.86-1.2,2.39-1.46,2.52-.53.13-1.2.27-5.98.4v3.85h0ZM174.33,264.82c-2.39.93-6.64,2.92-6.64,7.31,0,2.26,1.46,4.25,3.72,4.52,1.99,0,2.92-1.86,2.92-6.64v-5.18ZM189.88,244.89c2.79,0,10.76,6.91,10.76,9.97-.13,1.59-1.46,2.92-3.06,2.92s-1.59-.53-2.92-2.52c-1.59-2.26-3.72-4.25-6.11-5.71-1.2-.53-1.73-1.86-1.2-3.06.13-.27.27-.53.53-.66.53-.53,1.33-.8,1.99-.93"/>
    <path id="Path_356-2" data-name="Path 356-2" class="sign-up-main-colour" d="M222.3,245.02c-.27-1.33.66-2.52,1.99-2.66h.66c2.26,0,2.92.93,2.92,2.66v3.06h10.23c3.45,0,5.45,1.2,5.45,5.45v14.62c0,4.38-2.13,5.45-5.45,5.45h-10.23v7.71c.27,1.33-.66,2.52-1.99,2.66h-.66c-2.26,0-2.92-.93-2.92-2.66v-7.71h-10.1c-3.32,0-5.45-1.06-5.45-5.45v-14.62c0-4.25,1.99-5.45,5.45-5.45h10.1v-3.06ZM212.2,258.31h10.1v-5.45h-8.64c-.66-.13-1.33.4-1.46,1.06v4.38ZM222.3,268.54v-5.58h-10.1v4.12c-.13.66.4,1.33,1.06,1.46h9.04ZM227.75,252.99v5.45h10.1v-3.85c.13-.8-.4-1.46-1.2-1.46h-8.9v-.13h0ZM237.98,262.96h-10.1v5.58h8.64c.66.13,1.46-.4,1.59-1.06v-4.52h-.13,0Z"/>
    <path id="Path_357-2" data-name="Path 357-2" class="sign-up-main-colour" d="M287.27,277.57c1.33-.13,2.39.66,2.66,1.99v.53c.13,1.33-.8,2.52-2.13,2.66h-19.27c-7.97,0-10.36-3.59-11.16-4.92-.93,1.2-1.86,2.39-2.92,3.59-1.33,1.46-1.99,1.99-3.06,1.99-1.73-.13-3.06-1.46-2.92-3.19,0-1.2.4-1.59,2.39-3.19.66-.53,2.26-2.13,3.19-2.92v-8.77c0-.27,0-1.33-1.06-1.33h-1.86c-1.2.13-2.39-.66-2.52-1.99v-.53c0-1.99.8-2.79,2.66-2.79h3.06c3.99,0,4.92.93,4.92,4.92v7.97c.53,5.18,5.71,5.98,9.04,5.98h19,0ZM252.06,242.76c1.46,0,4.38,2.52,5.85,3.72,2.52,2.13,2.79,2.79,2.79,3.72-.13,1.59-1.33,2.92-2.92,2.92s-1.46-.4-2.79-1.59c-1.2-1.2-3.19-2.79-3.45-3.06-1.33-1.06-2.26-1.86-2.26-2.79-.13-1.46,1.06-2.92,2.79-2.92M266.28,248.87c-1.46,0-2.66-1.2-2.66-2.66s1.2-2.66,2.66-2.66h7.84c4.52,0,4.65,1.99,5.05,5.98.53,5.71,2.52,11.29,5.85,16.08.8,1.06,2.26,2.66,3.45,3.99.66.66,1.2,1.46,1.33,2.39-.13,1.59-1.46,2.92-3.06,3.06-1.33,0-2.66-1.06-4.38-3.32-2.92-3.85-4.92-8.24-6.11-12.89-1.33,3.85-3.19,7.44-5.58,10.63-1.73,2.26-4.52,5.58-6.64,5.58-1.59-.13-2.92-1.46-2.92-3.06s.4-1.33.8-1.73c2.39-1.86,4.52-4.12,6.25-6.64,3.59-5.18,5.45-11.43,5.45-13.69s0-1.06-1.06-1.06h-6.25Z"/>
  </g>
  <rect class="sign-up-step-1-1" x="148.95" y="238.51" width="131.94" height="54.88"/>
  <g id="Group_285" data-name="Group 285">
    <g class="sign-up-step-1-4">
      <g id="Group_284" data-name="Group 284">
        <path id="Path_384" data-name="Path 384" class="sign-up-main-colour" d="M203.56,48.37H64.05c-13.29,0-24.18-10.76-24.18-24.18S50.62,0,64.05,0h139.52c13.29,0,24.18,10.76,24.18,24.18s-10.9,24.18-24.18,24.18h0"/>
      </g>
    </g>
  </g>
  <path class="sign-up-bg" d="M102.58,27.5c0,1.86-.66,3.32-1.99,4.38-1.33,1.06-3.19,1.59-5.71,1.59s-4.12-.4-5.85-1.2v-4.12c.93.4,1.99.8,3.06,1.2s2.13.53,3.19.53,1.86-.27,2.26-.66c.4-.4.66-.93.66-1.59s0-.93-.53-1.33-.8-.66-1.46-1.06c-.66-.27-1.33-.66-2.13-1.06-.8-.4-1.06-.53-1.59-.8-.53-.27-1.06-.66-1.59-1.2-.53-.53-.93-1.06-1.33-1.73-.27-.66-.53-1.46-.53-2.39,0-1.86.66-3.32,1.86-4.38,1.33-1.06,3.06-1.59,5.18-1.59s2.13.13,3.06.4c.93.27,1.99.66,3.06,1.06l-1.46,3.45c-.93-.4-1.86-.66-2.52-.93-.8-.27-1.59-.27-2.39-.27s-1.46.13-1.99.53c-.4.4-.66.93-.66,1.46,0,.8.27,1.33.93,1.73s1.59.93,2.92,1.59c1.06.53,1.99,1.06,2.79,1.59.8.53,1.33,1.2,1.73,1.99.93.8,1.06,1.73,1.06,2.79Z"/>
  <path class="sign-up-bg" d="M112.81,30.16c.53,0,.93,0,1.46-.13s.93-.27,1.33-.4v3.19c-.53.27-1.06.4-1.73.53-.66.13-1.46.27-2.26.27s-1.86-.13-2.52-.53-1.33-.8-1.73-1.59c-.4-.8-.66-1.86-.66-3.19v-7.71h-2.13v-1.86l2.39-1.46,1.2-3.32h2.79v3.45h4.52v3.32h-4.52v7.71c0,.66,0,1.06.53,1.33.27.27.8.4,1.33.4Z"/>
  <path class="sign-up-bg" d="M125.3,17.14c2.26,0,3.99.66,5.18,1.86,1.33,1.2,1.99,3.06,1.99,5.31v2.13h-10.23c0,1.2.4,2.26,1.06,2.92.66.66,1.59,1.06,2.92,1.06s1.99-.13,2.79-.27c.8-.27,1.73-.53,2.66-.93v3.32c-.8.4-1.59.66-2.52.8-.8.13-1.86.27-3.19.27s-3.06-.27-4.25-.93-2.13-1.46-2.92-2.66c-.66-1.2-1.06-2.66-1.06-4.52s.27-3.45.93-4.65,1.46-2.13,2.66-2.79c1.2-.66,2.52-.93,3.99-.93ZM125.43,20.2c-.8,0-1.59.27-2.13.8s-.93,1.33-.93,2.52h6.11c0-.93-.27-1.73-.8-2.39-.53-.66-1.33-.93-2.26-.93Z"/>
  <path class="sign-up-bg" d="M144.97,17.14c1.73,0,3.19.66,4.38,2.13,1.06,1.33,1.73,3.45,1.73,6.11s-.53,4.78-1.73,6.25c-1.2,1.46-2.66,2.13-4.38,2.13s-2.13-.27-2.79-.66-1.2-.93-1.73-1.46h-.27c0,.8.27,1.59.27,2.39v6.38h-4.38v-22.99h3.59l.66,2.13h.27c.4-.66,1.06-1.2,1.73-1.73.53-.53,1.46-.66,2.66-.66ZM143.5,20.6c-1.2,0-1.99.4-2.39,1.06-.53.66-.66,1.73-.66,3.19v.53c0,1.59.27,2.66.66,3.59.4.8,1.33,1.2,2.52,1.2s1.73-.4,2.26-1.2c.53-.8.66-1.99.66-3.59,0-3.19-1.06-4.78-3.06-4.78Z"/>
  <path class="sign-up-bg" d="M171.94,33.35h-4.38v-16.21c0,.13-.27.27-.66.66-.27.27-.66.53-.93.8l-2.39,1.99-2.13-2.66,6.78-5.31h3.59v20.73h.13Z"/>
  <rect class="sign-up-step-1-1" x="0" y="24.05" width="511.3" height="511.3"/>
  <rect class="sign-up-step-1-1" x="0" y="24.05" width="511.3" height="511.3"/>
  <path id="Path_352-2" data-name="Path 352-2" class="sign-up-stroke" d="M431.71,389.72c0,10.36-8.5,18.87-18.87,18.87h-100.59c-10.36,0-18.87-8.5-18.87-18.87v-179.11c0-10.36,8.5-18.87,18.87-18.87h100.59c10.36,0,18.87,8.5,18.87,18.87v179.11ZM79.59,370.85v-9.04h96.33l10.36,25.78c.93,2.39,3.32,3.99,5.85,3.99h89.03c.4,6.25,2.52,12.22,6.25,17.14H117.46c-20.99-.13-37.87-17.01-37.87-37.87M196.25,378.96l-6.91-17.14h91.42v17.14h-84.51ZM103.38,168.22c0-9.57,7.84-17.41,17.41-17.41h249.27c9.57,0,17.41,7.84,17.41,17.41v11.03h-75.21c-17.41,0-31.36,14.08-31.49,31.49v138.59H103.24v-181.11h.13ZM412.84,179.25h-12.89v-11.03c0-16.61-13.42-30.03-30.03-30.03H120.65c-16.61,0-30.03,13.42-30.03,30.03v181.11h-17.54c-3.45,0-6.25,2.79-6.25,6.25h0v15.28c0,27.77,22.59,50.23,50.36,50.36h295.51c17.41,0,31.36-14.08,31.49-31.49v-179.11c.13-17.27-13.95-31.36-31.36-31.36"/>
</svg>
</div>

    
    <h3>WEBフォームよりお申込み</h3>
    <p>WEBフォームよりKids UPのハロウィンパーティーにお申込みが可能です。お申込みフォームより入力のうえ、お申込みください。</p>

  </div>

  <div class="step">
    
    <div class="step-image">

      <?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_4_copy" data-name="Layer 4 copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.43 535.35">
  <defs>
    <style>
      .sign-up-step-2-1 {
        fill: none;
      }


    </style>
  </defs>
  <rect class="sign-up-step-2-1" x=".13" y="24.05" width="511.3" height="511.3"/>
  <path id="Path_359" data-name="Path 359" class="sign-up-bg" d="M468.78,535.35H42.65c-23.52,0-42.65-19.13-42.65-42.65h0V66.57C0,43.05,19.13,23.92,42.65,23.92h426.13c23.52,0,42.65,19.13,42.65,42.65h0v426.13c0,23.65-19,42.65-42.65,42.65h0"/>
  <path class="sign-up-stroke" d="M386.66,239.7v107.1c0,.97-.11,1.91-.31,2.82l-67.15-87.2,36.29-35.39c-3.09-3.04-5.73-6.52-7.83-10.35l-81.78,79.76c-4.38,4.25-11.43,4.25-15.81,0l-108.54-105.86c.3-.02.6-.05.91-.05h200.14c.52-4.54,1.73-8.87,3.53-12.89h-203.67c-14.35,0-26.04,11.69-26.04,26.04v143.11c0,14.35,11.69,26.04,26.04,26.04h231.07c14.35,0,25.91-11.56,26.04-26.04v-109.1c-4.08,1.28-8.4,1.97-12.89,2ZM129.29,346.8v-143.11c0-2.08.49-4.03,1.33-5.77l66.71,65.06-67.48,87.63c-.36-1.21-.56-2.48-.56-3.81ZM373.51,359.96h-231.07c-1.11,0-2.18-.15-3.21-.41l67.39-87.51,34.42,33.57c4.52,4.38,10.5,6.91,16.88,6.91s12.36-2.39,17.01-6.91l35-34.13,67.65,87.84c-1.28.41-2.64.63-4.05.63Z"/>
  <path class="sign-up-main-colour" d="M386.66,151.42c-24.32,0-44.11,19.8-44.11,44.11s19.8,44.11,44.11,44.11,44.11-19.8,44.11-44.11-19.8-44.11-44.11-44.11ZM383.47,218.58h0l-21.26-21.66c-.27-5.18,4.38-6.51,6.78-4.12l13.82,14.08,26.97-32.95c2.13-2.66,6.91-1.73,7.18,3.45l-33.48,41.19Z"/>
  <g id="Group_284" data-name="Group 284">
    <path id="Path_384" data-name="Path 384" class="sign-up-main-colour" d="M203.16,48.37H63.65c-13.29,0-24.18-10.76-24.18-24.18S50.23,0,63.65,0h139.52c13.29,0,24.18,10.76,24.18,24.18s-10.9,24.18-24.18,24.18h0"/>
  </g>
  <rect class="sign-up-step-2-1" x="39.46" y=".13" width="187.88" height="48.23"/>
  <g class="sign-up-bg">
    <path class="sign-up-bg" d="M102.18,27.5c0,1.86-.66,3.32-1.99,4.38-1.33,1.06-3.19,1.59-5.71,1.59s-4.12-.4-5.85-1.2v-4.12c.93.4,1.99.8,3.06,1.2s2.13.53,3.19.53,1.86-.27,2.26-.66c.4-.4.66-.93.66-1.59s0-.93-.53-1.33-.8-.66-1.46-1.06c-.66-.27-1.33-.66-2.13-1.06s-1.06-.53-1.59-.8c-.53-.27-1.06-.66-1.59-1.2-.53-.53-.93-1.06-1.33-1.73-.27-.66-.53-1.46-.53-2.39,0-1.86.66-3.32,1.86-4.38,1.33-1.06,3.06-1.59,5.18-1.59s2.13.13,3.06.4c.93.27,1.99.66,3.06,1.06l-1.46,3.45c-.93-.4-1.86-.66-2.52-.93-.8-.27-1.59-.27-2.39-.27s-1.46.13-1.99.53c0,.53-.27,1.06-.27,1.59,0,.8.27,1.33.93,1.73s1.59.93,2.92,1.59c1.06.53,1.99,1.06,2.79,1.59.8.53,1.33,1.2,1.73,1.99.53.66.66,1.59.66,2.66Z"/>
    <path class="sign-up-bg" d="M112.41,30.16c.53,0,.93,0,1.46-.13s.93-.27,1.33-.4v3.19c-.53.27-1.06.4-1.73.53s-1.46.27-2.26.27-1.86-.13-2.52-.53-1.33-.8-1.73-1.59-.66-1.86-.66-3.19v-7.71h-2.13v-1.86l2.26-1.33,1.2-3.32h2.79v3.32h4.52v3.32h-4.52v7.71c0,.66,0,1.06.53,1.33s.93.4,1.46.4Z"/>
    <path class="sign-up-bg" d="M124.9,17.14c2.26,0,3.99.66,5.18,1.86,1.33,1.2,1.99,3.06,1.99,5.31v2.13h-10.23c0,1.2.4,2.26,1.06,2.92s1.59,1.06,2.92,1.06,1.99-.13,2.79-.27c.8-.27,1.73-.53,2.66-.93v3.32c-.8.4-1.59.66-2.52.8-.8.13-1.86.27-3.19.27s-3.06-.27-4.25-.93-2.13-1.46-2.92-2.66c-.66-1.2-1.06-2.66-1.06-4.52s.27-3.45.93-4.65,1.46-2.13,2.66-2.79,2.52-.93,3.99-.93ZM124.9,20.2c-.8,0-1.59.27-2.13.8-.53.53-.93,1.33-.93,2.52h6.11c0-.93-.27-1.73-.8-2.39-.4-.66-1.2-.93-2.26-.93Z"/>
    <path class="sign-up-bg" d="M144.57,17.14c1.73,0,3.19.66,4.38,2.13,1.06,1.33,1.73,3.45,1.73,6.11s-.53,4.78-1.73,6.25c-1.2,1.46-2.66,2.13-4.38,2.13s-2.13-.27-2.79-.66-1.2-.93-1.73-1.46h-.27c0,.8.27,1.59.27,2.39v6.38h-4.38v-22.99h3.59l.66,2.13h.27c.4-.66,1.06-1.2,1.73-1.73.53-.53,1.46-.66,2.66-.66ZM143.11,20.6c-1.2,0-1.99.4-2.39,1.06-.53.66-.66,1.73-.66,3.19v.53c0,1.59.27,2.66.66,3.59.4.8,1.33,1.2,2.52,1.2s1.73-.4,2.26-1.2c.53-.8.66-1.99.66-3.59,0-3.19-1.06-4.78-3.06-4.78Z"/>
    <path class="sign-up-bg" d="M175.26,33.35h-14.62v-3.06l5.18-5.31c1.06-1.06,1.86-1.99,2.52-2.79s1.06-1.33,1.46-1.99c.27-.53.4-1.2.4-1.86s-.27-1.46-.66-1.86c-.4-.4-1.06-.66-1.86-.66s-1.59.13-2.39.53c-.8.4-1.59.93-2.39,1.59l-2.39-2.79c.53-.53,1.2-.93,1.86-1.46.66-.4,1.46-.8,2.39-1.06.93-.27,1.99-.4,3.19-.4s2.52.27,3.59.8c.93.53,1.73,1.2,2.26,1.99s.8,1.86.8,2.92-.27,2.26-.66,3.19c-.4.93-1.06,1.86-1.99,2.79s-1.86,1.99-3.19,3.06l-2.66,2.52v.27h9.04v3.59h.13Z"/>
  </g>
</svg>


    </div>
    
    <h3>お申込み内容のご確認</h3>
    <p>WEBフォーム送信後、スクールからメールにてお申込み内容の確認をさせていただきます。お申込み内容に相違があった場合には、お気軽にお申し出ください。</p>

  </div>

  <div class="step">
    
    <div class="step-image">


<?xml version="1.0" encoding="UTF-8"?>
<svg id="Layer_4_copy" data-name="Layer 4 copy" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.3 535.35">
  <defs>
    <style>
      .sign-up-step-3-1 {
        fill: none;
      }

      .sign-up-step-3-4 {
        isolation: isolate;
      }




    </style>
    <clipPath id="clippath">
      <rect class="sign-up-step-3-1" x="40.13" y=".13" width="187.88" height="48.23"/>
    </clipPath>
  </defs>
  <path id="Path_364" data-name="Path 364" class="sign-up-bg" d="M469.04,535.35H42.39c-23.39,0-42.25-19-42.25-42.25h0V66.44C.13,43.05,19.13,24.18,42.39,24.18h426.66c23.39,0,42.25,19,42.25,42.25h0v426.66c0,23.39-18.87,42.25-42.25,42.25h0"/>
  <g>
    <path class="sign-up-stroke" d="M451.37,259.77c-2.34-12.7-7.35-24.36-14.39-34.43,2.18-2.92,3.49-6.54,3.49-10.48,0-9.7-7.84-17.54-17.54-17.54-4.22,0-8.09,1.49-11.12,3.97-12.69-8.05-27.53-12.95-43.36-13.67-3.19-.13-6.25-.13-9.43.13-16.45,1.09-31.57,6.4-44.24,14.95-3.19-3.31-7.66-5.38-12.63-5.38-9.7,0-17.54,7.84-17.54,17.54,0,5.19,2.25,9.82,5.82,13.03-8.41,13.44-13.26,29.58-13.26,47.42,0,48.5,39.33,87.83,87.83,87.83,48.5-.13,87.83-39.33,87.7-87.83,0-5.18-.4-10.36-1.33-15.55ZM370.05,350.12c-41.32,2.79-77.07-28.44-79.86-69.76-.3-4.5-.18-8.94.29-13.27,20.98,13.53,49.31,10.06,66.15-9.45,2.79-3.32,5.18-6.91,7.18-10.76,12.62,25.25,43.32,35.48,68.56,22.85,2.65-1.36,5.17-2.91,7.56-4.67,0,2.72.01,6.09.01,10.25,0,39.46-30.56,72.15-69.89,74.81Z"/>
    <path class="sign-up-stroke" d="M332.58,285.28c-5.18,0-5.18,7.97,0,7.97s5.18-7.97,0-7.97Z"/>
    <path class="sign-up-stroke" d="M394.5,286.87c-5.18-.13-5.18,7.97,0,7.97s5.18-7.97,0-7.97Z"/>
    <path class="sign-up-stroke" d="M388.26,310.53c-1.46-.8-3.45-.13-4.25,1.46-2.26,4.25-5.58,7.84-9.83,10.1-11.83,6.51-26.57,2.13-33.09-9.57-.93-1.46-2.79-1.99-4.38-1.2-1.46.93-1.99,2.79-1.2,4.39,5.31,9.7,15.68,15.81,26.84,15.81s22.06-6.38,27.37-16.74c.8-1.46.13-3.45-1.46-4.25Z"/>
  </g>
  <g>
    <path class="sign-up-stroke" d="M257.64,259.77c-7.44-40.39-41.86-70.29-82.91-72.15-3.19-.13-6.25-.13-9.43.13-46.11,3.06-81.85,39.06-81.85,87.56s39.33,87.83,87.83,87.83c48.5-.13,87.83-39.33,87.7-87.83,0-5.18-.4-10.36-1.33-15.55ZM176.32,350.12c-41.32,2.79-77.07-28.44-79.86-69.76-.4-5.97-.08-11.81.87-17.46l148.87,1.73c0,2.8.01,6.31.01,10.69,0,39.46-30.56,72.15-69.89,74.81Z"/>
    <path class="sign-up-stroke" d="M138.85,285.28c-5.18,0-5.18,7.97,0,7.97s5.18-7.97,0-7.97Z"/>
    <path class="sign-up-stroke" d="M200.77,286.87c-5.18-.13-5.18,7.97,0,7.97s5.18-7.97,0-7.97Z"/>
    <path class="sign-up-stroke" d="M194.53,310.66c-1.46-.8-3.45-.13-4.25,1.46-2.26,4.25-5.58,7.84-9.83,10.1-11.83,6.51-26.57,2.13-33.09-9.7-.93-1.59-2.79-2.13-4.38-1.2-1.59.93-2.13,2.79-1.2,4.39,5.31,9.7,15.68,15.81,26.84,15.81s22.06-6.38,27.37-16.61c.8-1.46.13-3.45-1.46-4.25Z"/>
  </g>
  <path id="Path_377" data-name="Path 377" class="sign-up-main-colour" d="M86.63,179.65c-1.73,0-3.19-1.46-3.19-3.19v-22.85c0-1.73,1.46-3.19,3.32-3.19s3.06,1.46,3.19,3.19v22.85c0,1.86-1.59,3.19-3.32,3.19"/>
  <path id="Path_378" data-name="Path 378" class="sign-up-main-colour" d="M98.06,168.22h-22.85c-1.73,0-3.19-1.33-3.32-3.19,0-1.73,1.33-3.19,3.19-3.32h22.99c1.73,0,3.19,1.46,3.19,3.32s-1.46,3.19-3.19,3.19"/>
  <path id="Path_379" data-name="Path 379" class="sign-up-main-colour" d="M266.28,388.12c-1.73,0-3.19-1.46-3.19-3.19v-22.85c0-1.73,1.33-3.19,3.19-3.32,1.73,0,3.19,1.33,3.32,3.19v22.99c-.13,1.86-1.59,3.19-3.32,3.19"/>
  <path id="Path_380" data-name="Path 380" class="sign-up-main-colour" d="M277.71,376.7h-22.85c-1.73,0-3.19-1.33-3.32-3.19,0-1.73,1.33-3.19,3.19-3.32h22.99c1.73,0,3.19,1.33,3.32,3.19,0,1.86-1.46,3.32-3.32,3.32.13,0,0,0,0,0"/>
  <path id="Path_381" data-name="Path 381" class="sign-up-stroke" d="M260.96,188.68c-3.85,0-6.91-3.06-6.91-6.91s3.06-6.91,6.91-6.91,6.91,3.06,6.91,6.91-3.06,6.91-6.91,6.91M260.96,178.05c-1.99,0-3.72,1.59-3.72,3.72s1.59,3.72,3.72,3.72,3.72-1.59,3.72-3.72-1.73-3.72-3.72-3.72"/>
  <path id="Path_382" data-name="Path 382" class="sign-up-stroke" d="M80.52,362.21c-3.85,0-6.91-3.06-6.91-6.91s3.06-6.91,6.91-6.91,6.91,3.06,6.91,6.91-3.19,6.91-6.91,6.91M80.52,351.72c-1.99,0-3.72,1.59-3.72,3.72s1.59,3.72,3.72,3.72,3.72-1.59,3.72-3.72-1.73-3.72-3.72-3.72"/>
  <path id="Path_383" data-name="Path 383" class="sign-up-stroke" d="M57.27,187.09c0,2.92,2.39,5.31,5.31,5.31s5.31-2.39,5.31-5.31-2.39-5.31-5.31-5.31-5.31,2.39-5.31,5.31h0"/>
  <rect class="sign-up-step-3-1" y="24.05" width="511.3" height="511.3"/>
  <g id="Group_285" data-name="Group 285">
    <g class="sign-up-step-3-6">
      <g id="Group_284" data-name="Group 284">
        <path id="Path_384" data-name="Path 384" class="sign-up-main-colour" d="M203.83,48.37H64.31c-13.29,0-24.18-10.76-24.18-24.18S50.89,0,64.31,0h139.52c13.29,0,24.18,10.76,24.18,24.18s-10.9,24.18-24.18,24.18h0"/>
      </g>
    </g>
  </g>
  <g class="sign-up-step-3-4">
    <path class="sign-up-bg" d="M102.84,27.5c0,1.86-.66,3.32-1.99,4.38-1.33,1.06-3.19,1.59-5.71,1.59s-4.12-.4-5.85-1.2v-4.12c.93.4,1.99.8,3.06,1.2s2.13.53,3.19.53,1.86-.27,2.26-.66c.4-.4.66-.93.66-1.59s0-.93-.53-1.33-.8-.66-1.46-1.06c-.66-.27-1.33-.66-2.13-1.06s-1.06-.53-1.59-.8c-.53-.27-1.06-.66-1.59-1.2-.53-.53-.93-1.06-1.33-1.73-.27-.66-.53-1.46-.53-2.39,0-1.86.66-3.32,1.86-4.38,1.33-1.06,3.06-1.59,5.18-1.59s2.13.13,3.06.4c.93.27,1.99.66,3.06,1.06l-1.46,3.45c-.93-.4-1.86-.66-2.52-.93-.8-.27-1.59-.27-2.39-.27s-1.46.13-1.99.53c-.4.4-.66.93-.66,1.46,0,.8.27,1.33.93,1.73s1.59.93,2.92,1.59c1.06.53,1.99,1.06,2.79,1.59.8.53,1.33,1.2,1.73,1.99.93.8,1.06,1.73,1.06,2.79Z"/>
    <path class="sign-up-bg" d="M113.08,30.16c.53,0,.93,0,1.46-.13s.93-.27,1.33-.4v3.19c-.53.27-1.06.4-1.73.53s-1.46.27-2.26.27-1.86-.13-2.52-.53-1.33-.8-1.73-1.59-.66-1.86-.66-3.19v-7.71h-2.13v-1.86l2.39-1.46,1.2-3.32h2.79v3.45h4.38v3.32h-4.52v7.71c0,.66,0,1.06.53,1.33s.8.4,1.46.4Z"/>
    <path class="sign-up-bg" d="M125.57,17.14c2.26,0,3.99.66,5.18,1.86,1.33,1.2,1.99,3.06,1.99,5.31v2.13h-10.23c0,1.2.4,2.26,1.06,2.92s1.59,1.06,2.92,1.06,1.99-.13,2.79-.27c.8-.27,1.73-.53,2.66-.93v3.32c-.8.4-1.59.66-2.52.8-.8.13-1.86.27-3.19.27s-3.06-.27-4.25-.93c-1.2-.66-2.13-1.46-2.92-2.66-.66-1.2-1.06-2.66-1.06-4.52s.27-3.45.93-4.65,1.46-2.13,2.66-2.79,2.52-.93,3.99-.93ZM125.57,20.2c-.8,0-1.59.27-2.13.8-.53.53-.93,1.33-.93,2.52h6.11c0-.93-.27-1.73-.8-2.39-.4-.66-1.2-.93-2.26-.93Z"/>
    <path class="sign-up-bg" d="M145.1,17.14c1.73,0,3.19.66,4.38,2.13,1.06,1.33,1.73,3.45,1.73,6.11s-.53,4.78-1.73,6.25c-1.2,1.46-2.66,2.13-4.38,2.13s-2.13-.27-2.79-.66c-.66-.4-1.2-.93-1.73-1.46h-.27c0,.8.27,1.59.27,2.39v6.38h-4.38v-22.99h3.59l.66,2.13h.27c.4-.66,1.06-1.2,1.73-1.73.66-.53,1.59-.66,2.66-.66ZM143.77,20.6c-1.2,0-1.99.4-2.39,1.06-.53.66-.66,1.73-.66,3.19v.53c0,1.59.27,2.66.66,3.59.4.8,1.33,1.2,2.52,1.2s1.73-.4,2.26-1.2c.53-.8.66-1.99.66-3.59,0-3.19-1.06-4.78-3.06-4.78Z"/>
    <path class="sign-up-bg" d="M174.99,17.14c0,1.46-.4,2.66-1.33,3.45-.93.8-1.99,1.46-3.19,1.73h0c1.59.4,2.92.8,3.85,1.73.93.8,1.33,1.86,1.33,3.32s-.27,2.26-.93,3.32c-.53.93-1.46,1.73-2.79,2.26-1.2.53-2.79.8-4.78.8s-4.25-.4-5.98-1.2v-3.72c.93.4,1.86.8,2.79,1.06.93.27,1.86.4,2.79.4,1.59,0,2.66-.27,3.32-.8.66-.53.93-1.33.93-2.26s-.13-1.06-.4-1.46c-.27-.4-.8-.66-1.59-.93s-1.73-.27-3.06-.27h-1.59v-3.45h1.59c1.33,0,2.26-.13,2.92-.4s1.2-.53,1.33-.93c.27-.4.4-.93.4-1.46,0-.8-.27-1.33-.66-1.73s-1.2-.66-2.26-.66-1.86.13-2.66.53c-.8.4-1.33.66-1.86.93l-1.99-3.06c.8-.53,1.73-1.06,2.92-1.46,1.06-.4,2.39-.53,3.99-.53s3.85.4,5.05,1.33c1.33.66,1.86,1.86,1.86,3.45h0Z"/>
  </g>
</svg>

    </div>
    
    <h3>クリスマスパーティー当日</h3>
    <p>フレンドリーな先生たちがお子様をお待ちしております！

    </p>

  </div>

</div>


<div class="button-box">
    <a class="cta-button cta-secondary button-1" href="">お申込みはこちら
        <svg class="arrow" viewBox="0 0 1006.31 837.38" xmlns="http://www.w3.org/2000/svg">
        <path d="M1006.22,415.05c-.03-.58-.08-1.15-.12-1.73-.04-.62-.08-1.24-.14-1.86-.07-.72-.17-1.44-.26-2.16-.06-.46-.11-.93-.18-1.39-.11-.78-.25-1.55-.39-2.32-.07-.4-.14-.8-.21-1.2-.15-.78-.33-1.56-.51-2.34-.09-.39-.17-.79-.27-1.18-.19-.75-.39-1.5-.6-2.24-.12-.42-.23-.84-.36-1.25-.21-.69-.44-1.38-.67-2.06-.16-.47-.31-.94-.48-1.4-.22-.61-.45-1.22-.69-1.83-.21-.53-.41-1.07-.63-1.59-.22-.53-.45-1.05-.68-1.57-.26-.59-.52-1.19-.8-1.78-.21-.45-.44-.89-.66-1.33-.32-.64-.64-1.29-.99-1.92-.21-.39-.42-.76-.64-1.14-.38-.67-.76-1.34-1.15-2.01-.21-.35-.43-.68-.64-1.03-.42-.67-.84-1.35-1.29-2.01-.23-.34-.47-.67-.7-1-.45-.64-.89-1.29-1.36-1.92-.28-.38-.58-.74-.86-1.12-.44-.57-.88-1.14-1.34-1.7-.4-.49-.82-.95-1.23-1.43-.37-.43-.74-.87-1.12-1.3-.82-.9-1.65-1.78-2.51-2.64L639.74,21.59c-28.78-28.78-75.45-28.78-104.23,0h0c-28.78,28.78-28.78,75.45,0,104.23l219.17,219.17H73.7c-40.7,0-73.7,33-73.7,73.7h0c0,40.71,33,73.7,73.7,73.7h680.97l-219.17,219.17c-28.78,28.78-28.78,75.45,0,104.23h0c28.78,28.78,75.45,28.78,104.23,0l344.99-344.99c.86-.86,1.7-1.74,2.51-2.64.38-.42.75-.86,1.12-1.29.41-.48.83-.95,1.23-1.43.46-.56.9-1.13,1.34-1.7.29-.37.58-.74.86-1.12.47-.63.92-1.28,1.36-1.92.23-.34.47-.67.7-1,.45-.66.87-1.34,1.29-2.01.21-.34.43-.68.64-1.03.4-.66.78-1.33,1.15-2.01.21-.38.43-.76.64-1.14.34-.64.66-1.28.99-1.92.22-.44.45-.89.66-1.33.28-.59.54-1.18.8-1.78.23-.52.46-1.04.68-1.57.22-.53.42-1.06.63-1.59.24-.61.47-1.21.69-1.83.17-.47.32-.94.48-1.4.23-.68.46-1.37.67-2.06.13-.42.24-.84.36-1.25.21-.74.42-1.49.6-2.24.1-.39.18-.78.27-1.18.18-.78.36-1.55.51-2.34.08-.4.14-.8.21-1.2.14-.77.28-1.54.39-2.32.07-.46.12-.93.18-1.39.09-.72.19-1.43.26-2.16.06-.62.1-1.24.14-1.86.04-.58.1-1.15.12-1.73.06-1.21.09-2.43.09-3.64h0c0-1.22-.03-2.43-.09-3.65Z"/>
        </svg>
    </a>

        <a class="cta-button cta-secondary button-2" href="">お問い合わせ
        <svg class="arrow" viewBox="0 0 1006.31 837.38" xmlns="http://www.w3.org/2000/svg">
        <path d="M1006.22,415.05c-.03-.58-.08-1.15-.12-1.73-.04-.62-.08-1.24-.14-1.86-.07-.72-.17-1.44-.26-2.16-.06-.46-.11-.93-.18-1.39-.11-.78-.25-1.55-.39-2.32-.07-.4-.14-.8-.21-1.2-.15-.78-.33-1.56-.51-2.34-.09-.39-.17-.79-.27-1.18-.19-.75-.39-1.5-.6-2.24-.12-.42-.23-.84-.36-1.25-.21-.69-.44-1.38-.67-2.06-.16-.47-.31-.94-.48-1.4-.22-.61-.45-1.22-.69-1.83-.21-.53-.41-1.07-.63-1.59-.22-.53-.45-1.05-.68-1.57-.26-.59-.52-1.19-.8-1.78-.21-.45-.44-.89-.66-1.33-.32-.64-.64-1.29-.99-1.92-.21-.39-.42-.76-.64-1.14-.38-.67-.76-1.34-1.15-2.01-.21-.35-.43-.68-.64-1.03-.42-.67-.84-1.35-1.29-2.01-.23-.34-.47-.67-.7-1-.45-.64-.89-1.29-1.36-1.92-.28-.38-.58-.74-.86-1.12-.44-.57-.88-1.14-1.34-1.7-.4-.49-.82-.95-1.23-1.43-.37-.43-.74-.87-1.12-1.3-.82-.9-1.65-1.78-2.51-2.64L639.74,21.59c-28.78-28.78-75.45-28.78-104.23,0h0c-28.78,28.78-28.78,75.45,0,104.23l219.17,219.17H73.7c-40.7,0-73.7,33-73.7,73.7h0c0,40.71,33,73.7,73.7,73.7h680.97l-219.17,219.17c-28.78,28.78-28.78,75.45,0,104.23h0c28.78,28.78,75.45,28.78,104.23,0l344.99-344.99c.86-.86,1.7-1.74,2.51-2.64.38-.42.75-.86,1.12-1.29.41-.48.83-.95,1.23-1.43.46-.56.9-1.13,1.34-1.7.29-.37.58-.74.86-1.12.47-.63.92-1.28,1.36-1.92.23-.34.47-.67.7-1,.45-.66.87-1.34,1.29-2.01.21-.34.43-.68.64-1.03.4-.66.78-1.33,1.15-2.01.21-.38.43-.76.64-1.14.34-.64.66-1.28.99-1.92.22-.44.45-.89.66-1.33.28-.59.54-1.18.8-1.78.23-.52.46-1.04.68-1.57.22-.53.42-1.06.63-1.59.24-.61.47-1.21.69-1.83.17-.47.32-.94.48-1.4.23-.68.46-1.37.67-2.06.13-.42.24-.84.36-1.25.21-.74.42-1.49.6-2.24.1-.39.18-.78.27-1.18.18-.78.36-1.55.51-2.34.08-.4.14-.8.21-1.2.14-.77.28-1.54.39-2.32.07-.46.12-.93.18-1.39.09-.72.19-1.43.26-2.16.06-.62.1-1.24.14-1.86.04-.58.1-1.15.12-1.73.06-1.21.09-2.43.09-3.64h0c0-1.22-.03-2.43-.09-3.65Z"/>
        </svg>
    </a>

</div>


</div>


</section>

<section class="bottom">

  <div class="container">

    <img src="/events/global-images/pre-footer-teachers-kids-group.png" alt="" class="bottom-image">
    <h3>学童保育型　 英会話スクール</h3>
    <p>【3歳から高校生対象】東京を中心に36校のスクールを運営<br>
モットーは「Learn with Fun!」一緒に楽しく英語を学びましょう！</p>
  </div>

</section>


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
  const hideTriggers = document.querySelectorAll('.hero, .cta-party-times, .lower-cta, .footer, .gallery, .sign-up, .mobile-cta-hide'); // Now includes the ID

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




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".three-reasons-swiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 16, // 1rem
    pagination: {
      el: ".three-reasons-swiper .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".three-reasons-swiper .swiper-button-next",
      prevEl: ".three-reasons-swiper .swiper-button-prev",
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


    <script src="javascript.js"></script>

</body>
</html>
