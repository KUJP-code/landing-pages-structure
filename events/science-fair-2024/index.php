<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php include '../global-includes/global-head.php' ?>

    <link rel="canonical" href="https://kids-up.jp/events/science-fair-2024/" />
    <meta
      property="og:image"
      content="https://kids-up.jp/events/science-fair-2024/science-images/fb-main.webp"
    />

    <meta property="og:url" content="https://kids-up.jp" />
    <meta property="og:site_name" content="KidsUP" />

    <meta
      property="og:description"
      content="学童保育型英会話スクール・幼児クラス - KidsUP （キッズアップ）"
    />

    <meta
      name="twitter:title"
      content="学童保育型英会話スクール・幼児クラス - KidsUP （キッズアップ）"
    />

    <meta
      name="twitter:image"
      content="https://kids-up.jp/events/science-fair-2024/science-images/fb-main.webp"
    />
    <meta name="twitter:url" content="https://kids-up.jp" />
    <meta name="twitter:card" content="summary_large_image" />

    <link href="./stylesheets/science-style.css" rel="stylesheet" />
    <title>Science Fair 2024</title>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-MGWSQLH"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- JSON INFO -->
    <script src="./event-info.json"></script>

    <nav class="navbar navbar-expand-md sticky-top">
      <div class="d-none d-md-block">
        <a class="navbar-brand d-flex w-50 me-auto" href="https://kids-up.jp/"
          ><img
            src="../global-images/ku-logo-white-desktop.svg"
            class="nav-logo"
            alt=""
        /></a>
      </div>
      <div class="d-md-none">
        <a class="navbar-brand d-flex w-50 me-auto" href="https://kids-up.jp/"
          ><img
            src="../global-images/ku-logo-white-mobile.svg"
            class="nav-logo"
            alt=""
        /></a>
      </div>
      <button
        class="navbar-toggler collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-nav"
        aria-controls="navbar-nav"
        aria-expanded="false"
      >
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-nav">
        <ul
          class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0"
          style="text-align: center"
        >
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="#div1">イベント内容 </a>
          </li>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="#div2">ギャラリー </a>
          </li>

          <li class="nav-item text-nowrap">
            <a class="nav-link" href="#div3"> お申込み・お問合せ</a>
          </li>
          <a
            class="nav-btn text-nowrap"
            href="https://kids-up.jp/inquiry"
            role="button"
          >
            お問い合わせ
          </a>
        </ul>
      </div>
    </nav>
    <!-- HERO -->

    <script>
      // imageSwitcher.js

      // Get today's date
      var today = new Date();
      // Define the date beyond which you want to change the image
      var targetDate = new Date("2024-05-01");

      // Check if today's date is beyond the target date
      if (today > targetDate) {
        // If it is, change the image source
        document.getElementById("mobileImage").src =
          "./science-images/hero-mobile.webp";
        document.getElementById("scienceImage").src =
          "./science-images/science-fair.webp";
      } else {
        // Otherwise, keep the default image
        document.getElementById("mobileImage").src =
          "./science-images/hero-mobile-earlybird.webp";
        document.getElementById("scienceImage").src =
          "./science-images/science-fair-earlybird.webp";
      }
    </script>

    <div class="row hero-row">
      <img
        src="./science-images/hero-saturn-decoration.svg"
        alt="hero-saturn-decoration"
        class="hero-saturn-decoration d-none d-sm-block"
      />
      <div class="col-sm-6 d-sm-none">
        <img src="" alt="science fair" class="img-fluid" id="mobileImage" />
      </div>

      <div class="col-sm-6 d-none d-sm-block hero-left-col">
        <div class="hero-left-col-inner">
          <img
            src=""
            alt="science fair"
            class="hero-left-img"
            id="scienceImage"
          />
        </div>
      </div>
      <div class="col-sm-6 hero-right-col">
        <div class="hero-right-col-inner">
          <h1 class="hero-h1">君もサイエンティスト！</h1>

          <h2 class="hero-h2">
            Kids UPサイエンスフェアの
            <br class="d-sm-none" />お申し込みを受付中！<br />
            科学者になって、
            <br class="d-sm-none" />先生達と一緒に英語でいろいろな
            <br class="d-sm-none" />実験をしてみよう！
          </h2>

          <button class="cta-button" onclick="formLink()">
            <img
              src="./science-images/cta-decoration-left.svg"
              alt="cta-button-decoration"
              class="cta-decoration-left"
            />

            お申込みはこちら
            <img
              src="./science-images/cta-decoration-right.svg"
              alt="cta-button-decoration"
              class="cta-decoration-right"
            />
          </button>
        </div>
      </div>
    </div>

    <!-- EVENT INFO -->
    <div class="main-body-event-info">
      <div class="container d-none d-sm-block main-body-event-info-container">
        <img
          src="./science-images/main-event-info-img.webp"
          alt="main-event-info-img"
          class="main-event-info-img"
        />

        <button onclick="formLink()" class="cta-button cta-main">
          <img
            src="./science-images/cta-decoration-left.svg"
            alt="cta-button-decoration"
            class="cta-decoration-left"
          />

          お申込みはこちら
          <img
            src="./science-images/cta-decoration-right.svg"
            alt="cta-button-decoration"
            class="cta-decoration-right"
          />
        </button>
      </div>
      <img
        src="./science-images/main-body-decoration-1.svg"
        alt="main-body-decoration-1"
        class="main-body-decoration-1 d-none d-sm-block"
      />
      <div class="container event-container-details" id="div1">
        <h2 class="main-h2">Science Fair at Kids UP 2024</h2>
        <h3 class="main-h3" style="text-align: left">
          Kids UPサイエンスフェアでは、<br
            class="d-sm-none"
          />オールイングリッシュの環境で様々なアクティビティを行います。<br />
          英語が初心者でももちろん大丈夫！<br
            class="d-sm-none"
          />先生が楽しくお子様をサポートします。<br />宇宙テーマのアクティビティ、自分だけの3D銀河の構築、究極のUFOゲーム、<br
            class="d-sm-none"
          />回転するブラックホール実験などを一緒に行いながら、<br
            class="d-sm-none"
          />楽しく学びましょう！<br />枠に限りがありますので、お早めにお申し込みください。
        </h3>
      </div>
      <div class="container three-points-container">
        <div class="row">
          <div class="col-sm-4 three-points three-points-1">
            <div class="three-points-inner">
              <img
                src="./science-images/icon-bubble-1.svg"
                alt="icon-bubble-1"
                class="icon-bubble"
              />
              <h4 class="three-points-h4">
                初心者から上級者まで、全ての方に<br />
                ご参加いただけます
              </h4>

              <p class="three-points-p">
                お子さまのご年齢・英語のレベルに<br
                  class="d-sm-none"
                />関係なくご参加いただけますので<br class="d-sm-none" />
                ご安心ください！
              </p>
            </div>
          </div>

          <div class="col-sm-4 three-points three-points-2">
            <div class="three-points-inner">
              <img
                src="./science-images/icon-bubble-2.svg"
                alt="icon-bubble-2"
                class="icon-bubble"
              />
              <h4 class="three-points-h4">
                お好きなお時間をお選びいただけます
              </h4>
              <p class="three-points-p">
                時間が選べるから、他に用事が <br />あっても大丈夫！<br />
                ※定員になり次第〆切となりますので、<br />お早目にお申し込みください。
              </p>
            </div>
          </div>

          <div class="col-sm-4 three-points three-points-3">
            <div class="three-points-inner">
              <img
                src="./science-images/icon-bubble-3.svg"
                alt="icon-bubble-3"
                class="icon-bubble"
              />
              <h4 class="three-points-h4">
                ご希望のスクールでご参加いただけます
              </h4>
              <p class="three-points-p">
                東京・神奈川・千葉の各地にスクールを<br />
                展開しております。<br />
                お好きなスクールをお選びください。
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-sm-none main-body-event-info-container">
        <img
          src="./science-images/main-event-info-img.webp"
          alt="main-event-info-img"
          class="main-event-info-img"
        />
      </div>

      <button class="cta-button cta-main-2" onclick="formLink()">
        <img
          src="./science-images/cta-decoration-left.svg"
          alt="cta-button-decoration"
          class="cta-decoration-left"
        />
        お申込みはこちら
        <img
          src="./science-images/cta-decoration-right.svg"
          alt="cta-button-decoration"
          class="cta-decoration-right"
        />
      </button>
    </div>
    <!-- CALL TO ACTION JETPACK KID-->
    <div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-6">
            <img
              src="./science-images/rocket-girl.png"
              alt="rocket-girl"
              class="img-fluid"
            />
          </div>

          <div class="col-sm-6 col-md-7 col-lg-6 event-info-col">
            <img
              src="./science-images/event-info-decoration-1.svg"
              alt="event-info-decoration-1"
              class="event-info-decoration-1 d-none d-sm-block"
            />
            <img
              src="./science-images/event-info-decoration-2.svg"
              alt="event-info-decoration-2"
              class="event-info-decoration-2 d-none d-sm-block"
            />
            <img
              src="./science-images/event-info-decoration-3.svg"
              alt="event-info-decoration-3"
              class="event-info-decoration-3 d-none d-sm-block"
            />
            <div class="vertical-center">
              <h2 class="main-h2-lower">
                体験型アクティビティ<br />
                おともだち作り<br />
                アットホームな雰囲気
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- DATE INFO-->
    <div class="container school-date-container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="h2-event-date">
            <span class="h2-event-date-top">In-School Event </span><br />
            5/11土<br />
            <span class="h2-event-date-sub"
              >※スクールによって開催日・時間帯が異なります。</span
            >
          </h2>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
    <!-- Activity 1-->
    <div class="event-info-decoration-container">
      <img
        src="./science-images/rocket-decoration.webp"
        alt="rocket-decoration"
        class="rocket-decoration"
      />
      <img
        src="./science-images/event-info-top-decoration.webp"
        alt="event-info-top-decoration"
        class="event-info-top-start-decoration"
      />
    </div>
    <div class="activity-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./science-images/activity-1.webp"
              alt="activity-1"
              class="activity-img"
            />
          </div>
          <div class="col-sm-6">
            <div class="activity-info-wrapper">
              <h3 class="activity-title-h3-v1">
                Build Your Own 3D <br />GALAXY!
              </h3>
              <p class="activity-info">
                惑星をデザインして夜空を飾り、ライトアップされた美しい3Dギャラクシーを作るよ！<br />
                <br />
                宇宙飛行士になった気 分でロケットで遊ぼう☆
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity 2-->
    <div>
      <img
        src="./science-images/event-info-decoration-bottom.webp"
        alt="event-info-decoration-bottom"
        class="event-info-decoration-band"
      />

      <div class="container">
        <div class="row">
          <div class="col-sm-6 d-sm-none">
            <img
              src="./science-images/activity-2.webp"
              alt="activity-1"
              class="activity-img"
            />
          </div>

          <div class="col-sm-6">
            <div class="activity-info-wrapper">
              <h3 class="activity-title-h3-v2">
                Spinning Black Hole Experiment
              </h3>
              <p class="activity-info">
                星や惑星を引き込みながら、ぐるぐる回るブラックホールを作るよ！
              </p>
            </div>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <img
              src="./science-images/activity-2.webp"
              alt="activity-1"
              class="activity-img"
            />
          </div>
        </div>
      </div>

      <!-- Activity 3-->
      <img
        src="./science-images/event-info-decoration-top.webp"
        alt="event-info-decoration-top"
        class="event-info-decoration-band"
      />
    </div>
    <div class="activity-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./science-images/activity-3.webp"
              alt="activity-2"
              class="activity-img"
            />
          </div>
          <div class="col-sm-6">
            <div class="activity-info-wrapper">
              <h3 class="activity-title-h3-v1">Fizzing Planets Space Walk</h3>
              <p class="activity-info">
                みんなで宇宙飛行士になって、惑星や宇宙を探検しよう！<br />
                地球には無い特別な宇宙石を加えて、泡立つ化学反応も見られるよ！
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity 4-->

    <img
      src="./science-images/event-info-decoration-bottom.webp"
      alt="event-info-decoration-bottom.webp"
      class="event-info-decoration-band"
    />

    <div class="container">
      <div class="row">
        <div class="col-sm-6 d-sm-none">
          <img
            src="./science-images/activity-4.webp"
            alt="activity-1"
            class="activity-img"
          />
        </div>

        <div class="col-sm-6">
          <div class="activity-info-wrapper">
            <h3 class="activity-title-h3-v2">Ultimate UFO Game</h3>
            <p class="activity-info">
              きみのミッションは、この宇宙空間でUFOを新しい惑星に慎重に着陸させること。エイリアンにぶつからないように気をつけてね！
            </p>
          </div>
        </div>
        <div class="col-sm-6 d-none d-sm-block">
          <img
            src="./science-images/activity-4.webp"
            alt="activity-1"
            class="activity-img"
          />
        </div>
      </div>
    </div>

    <!-- Activity 5-->
    <img
      src="./science-images/event-info-decoration-top.webp"
      alt="event-info-decoration-top"
      class="event-info-decoration-band"
    />

    <div class="activity-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./science-images/activity-5.webp"
              alt="activity-2"
              class="activity-img"
            />
          </div>
          <div class="col-sm-6">
            <div class="activity-info-wrapper">
              <h3 class="activity-title-h3-v1">Get an original badge</h3>
              <p class="activity-info">
                ここでしか手に入れられないScience Fair
                2024のバッジを手に入れて、コレクションに加えてね♪
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity 6-->

    <img
      src="./science-images/event-info-decoration-bottom.webp"
      alt="event-info-decoration-bottom.webp"
      class="event-info-decoration-band"
    />

    <div class="container">
      <div class="row">
        <div class="col-sm-6 d-sm-none">
          <img
            src="./science-images/activity-6.webp"
            alt="activity-1"
            class="activity-img"
          />
        </div>

        <div class="col-sm-6">
          <div class="activity-info-wrapper">
            <h3 class="activity-title-h3-v2">Photo Service (Add on)</h3>
            <p class="activity-info">
              「フォトサービス」は当日の写真がダウンロードできます！<br />（別途お申込み）
            </p>
          </div>
        </div>
        <div class="col-sm-6 d-none d-sm-block">
          <img
            src="./science-images/activity-6.webp"
            alt="activity-1"
            class="activity-img"
          />
        </div>
      </div>
    </div>
    <!-- Gallery -->

    <div class="main-content-bottom-mask" id="div2">
      <div class="carousel-div" style="position: relative" id="div2">
        <div class="padding-0">
          <div class="swiper" id="image-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure>
                  <img
                    src="./science-images/gallery/gallery-1.webp"
                    alt="img-1"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 1 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./science-images/gallery/gallery-2.webp"
                    alt="img-2"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 2 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./science-images/gallery/gallery-3.webp"
                    alt="img-3"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 3 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./science-images/gallery/gallery-4.webp"
                    alt="img-4"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 4 -->
            </div>
            <!-- End Swiper Wrapper -->

            <div class="swiper-custom-nav large-display">
              <img
                src="./science-images/gallery/gallery-left-button.svg"
                alt="arrow-left"
                class="swiper-custom-nav-arrow swiper-button-left"
              />
              <img
                src="./science-images/gallery/gallery-right-button.svg"
                alt="arrow-right"
                class="swiper-custom-nav-arrow swiper-button-right"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---------------------------------------------------------------- sign-up ---------------------------------------------------------------->
    <section class="sign-up" id="div3">
      <div class="container">
        <h2 class="sign-up-h2">
          Science Fair at Kids UP<br class="d-sm-none" />ご参加までの流れ
        </h2>

        <div class="row">
          <div class="col-sm-4">
            <div class="sign-up-wrapper-left">
              <img
                src="./science-images/sign-up-step-1.svg"
                alt="sign-up-step-1"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">WEBフォームよりお申込み</h3>
              <p class="sign-up-p">
                WEBフォームより、2023年のキッズUPサイエンスフェアへの参加お申込みが可能です。ご希望のスクールを選択し、お申込みください。
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="sign-up-wrapper-middle">
              <img
                src="./science-images/sign-up-step-2.svg"
                alt="sign-up-step-2"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">お申込み内容のご確認</h3>
              <p class="sign-up-p">
                WEBフォーム送信後、スクールからはメールにてサイエンスフェアへの参加お申込み内容の確認をさせていただきます。もしお申込み内容に相違がある場合は、お気軽にご連絡ください。
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="sign-up-wrapper-right">
              <img
                src="./science-images/sign-up-step-3.svg"
                alt="sign-up-step-3"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">Science Fair 当日</h3>
              <p class="sign-up-p">
                フレンドリーな先生方が、お子様をお待ちしています！<br />
                ※定員に達し次第、受付を締め切らせていただきます。
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <button class="sign-up-button" onclick="formLink()">
              お申込みはこちら
            </button>
          </div>
          <div class="col-sm-6">
            <button class="sign-up-button" onclick="inquiryLink()">
              お問い合わせ
            </button>
          </div>
        </div>
      </div>

      <img
        src="./science-images/pre-footer-break.webp"
        alt="pre-footer-break"
        class="event-info-decoration-band"
      />
    </section>
    <!---------------------------------------------------------------- pre-footer ---------------------------------------------------------------->

    <?php include '../global-includes/global-pre-footer.php' ?>

    <!---------------------------------------------------------------- footer ---------------------------------------------------------------->
    <?php include '../global-includes/global-footer.php' ?>
    <!-- JS Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>
