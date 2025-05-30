<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Navbar with Custom Hamburger</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Your own stylesheet -->
  <link rel="stylesheet" href="./global-css-2025.css">


  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&family=M+PLUS+1p&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
  
  <style>









   
    
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/global/global-images/ku-logo-white-desktop.svg" alt="nav logo"></a>

      <!-- Custom hamburger -->
      <button class="navbar-toggler nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bar-top"></span>
        <span class="bar-mid"></span>
        <span class="bar-bot"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link"  href="#">イベント内容</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="#">スクール一覧</a>
          </li>


          <li class="nav-item">
            <a class="nav-link"  href="#">アクティビティ内容</a>
          </li>


          <li class="nav-item">
            <a class="nav-link"  href="#">ギャラリー</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="#">お申込み・お問い合わせ</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link nav-button nav-button-text" href="https://kids-up.jp/inquiry/">お問い合わせ</a>
          </li>

          <li class="nav-item dropdown">
            <!-- dropdown content here -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    // Toggle hamburger animation
    document.addEventListener('DOMContentLoaded', function() {
      var toggle = document.querySelector('.nav-toggle');

      toggle.addEventListener('click', function() {
        this.classList.toggle('opened');
      });

      // Close navbar when clicking outside
      document.addEventListener('click', function(event) {
        var navbarCollapse = document.getElementById('navbarSupportedContent');
        var isClickInside = navbarCollapse.contains(event.target) || toggle.contains(event.target);

        if (!isClickInside && navbarCollapse.classList.contains('show')) {
          var collapse = new bootstrap.Collapse(navbarCollapse, { toggle: true });
          collapse.hide();
          toggle.classList.remove('opened');
        }
      });

      // Close menu when clicking a nav link (optional, improves UX on mobile)
      var navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(function(navLink) {
        navLink.addEventListener('click', function() {
          var navbarCollapse = document.getElementById('navbarSupportedContent');
          if (navbarCollapse.classList.contains('show')) {
            var collapse = new bootstrap.Collapse(navbarCollapse, { toggle: true });
            collapse.hide();
            toggle.classList.remove('opened');
          }
        });
      });
    });
  </script>

</body>
</html>
