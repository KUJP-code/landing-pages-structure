<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-MGWSQLH");
    </script>
    <!-- End Google Tag Manager -->

    <!-- EBiS tag version4.10 start -->
    <script type="text/javascript">
      (function (a, d, e, b, i, s) {
        window[i] = window[i] || [];
        var f = function (a, d, e, b, i, s) {
            var o = a.getElementsByTagName(d)[0],
              h = a.createElement(d),
              t = "text/javascript";
            h.type = t;
            h.async = e;
            h.onload = function () {
              window[i].init({ argument: s, auto: true });
            };
            h._p = o;
            return h;
          },
          h = f(a, d, e, b, i, s),
          l = "//taj",
          j = b + s + "/cmt.js";
        h.src = l + "1." + j;
        h._p.parentNode.insertBefore(h, h._p);
        h.onerror = function (k) {
          k = f(a, d, e, b, i, s);
          k.src = l + "2." + j;
          k._p.parentNode.insertBefore(k, k._p);
        };
      })(document, "script", true, "ebis.ne.jp/", "ebis", "UUQ5rhNV");
    </script>
    <!-- EBiS tag end -->

    <!-- Cookies Script -->
    <script>
      var _CIDN = "cid";
      var _PMTN = "_pid";
      var _LPTU = "./";
      var _param = location.search.substring(1).split("&");
      var _ulp = "",
        _ulcid = "";
      for (var i = 0; _param[i]; i++) {
        var kv = _param[i].split("=");
        if (kv[0] == _PMTN && kv[1].length > 1) {
          _ulp = kv[1];
        }
        if (kv[0] == _CIDN && kv[1].length > 1) {
          _ulcid = kv[1];
        }
      }
      if (_ulp && _ulcid) {
        _xhr = new XMLHttpRequest();
        _xhr.open("GET", _LPTU + "lptag.php?p=" + _ulp + "&cid=" + _ulcid);
        _xhr.send();
        localStorage.setItem("CL_" + _ulp, _ulcid);
      }
    </script>

    <!--  End Cookies Script -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KidsUP説明会</title>

    <!--Fonts and Favicons-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="./images/core/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta
      property="og:title"
      content="学童保育型英会話スクール・幼児クラス - Kids UP （キッズアップ）"
    />
    <meta property="og:image" content="images-boilerplate\fb_main.jpg" />
    <meta property="og:url" content="https://kids-up.jp" />
    <meta property="og:site_name" content="Kids UP" />
    <meta
      property="og:description"
      content="Kids UP（キッズアップ）は英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。"
    />
    <meta
      name="twitter:title"
      content="学童保育型英会話スクール・幼児クラス - Kids UP （キッズアップ）"
    />
    <meta name="twitter:image" content="images-boilerplate\fb_main.jpg" />
    <meta name="twitter:url" content="https://kids-up.jp" />
    <meta name="twitter:card" content="" />
    <title>学童保育型英会話スクール・幼児クラス - KidsUP</title>

    <!-- CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="/wp-content/themes/kidsup/css/custom-page-css/setsumeikai/setsumeikai.css"
    />
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGWSQLH" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/navbar-setsu-phone.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-1-hero.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/special-offers/winter-2026.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-2-why-KidsUP.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/call-to-action-static.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-3-course-information.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/call-to-action-static.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-4-working-moms.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/call-to-action-static.php'; ?>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-5-english-learners.php'; ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
