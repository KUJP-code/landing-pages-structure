<!DOCTYPE html>
<html lang="en" style="background-color: gray;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Responsive Navbar with Custom Hamburger</title>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP&family=Noto+Sans+SC&family=Noto+Serif+JP&family=Noto+Serif+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./components/stylesheets/style.css" />
<link rel="preconnect" href="https://player.vimeo.com">

</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="nav-inner">
      <a class="navbar-brand" href="#"><img src="./components/images/hero-logo-vivid-orange.svg" alt="nav logo" /></a>




      <div class="nav-links">
        <a href="#" class="button button-1">お近くの教室を探す</a>
        <a href="#" class="button button-2">電話でお問合せ</a>
        <a href="#" class="button button-3">無料体験お申し込み</a>

              <button class="nav-toggle" aria-label="Toggle navigation">
        <span class="bar-top"></span>
        <span class="bar-mid"></span>
        <span class="bar-bot"></span>
      </button>

      </div>

      

        <div class="sticky-cta">
    <a href="#signup" class="button button-3">お申込みはこちら</a>
  </div>
</div>
</nav>

<!-- Hero -->
<div class="contents">

<div class="hero-wrapper">

    <div class="hero-inner">
                <div class="hero-video-container">
          <iframe 
                class="hero-video-iframe"

                src="https://player.vimeo.com/video/1122728938?autoplay=1&loop=1&muted=1&background=1" 
                frameborder="0"
                allow="autoplay; encrypted-media" 
                allowfullscreen>
            </iframe>

            <div class="hero-overlay">
               
            </div>
        </div>
    </div>

</div>

</div>

<!-- Hero -->





  <script src="./template.js"></script>
</body>
</html>
