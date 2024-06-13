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

    <link href="./stylesheets/specific-style.css" rel="stylesheet" />
    <title>大ゲーム大会</title>
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

    <nav class="navbar navbar-expand-md fixed-top">
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

    <div class="row hero-row">
      <div class="col-sm-6 d-sm-none">
        <img
          src="./mega-games-images/hero-mobile.webp"
          alt="science fair"
          class="img-fluid"
          id="mobileImage"
        />
      </div>

      <div class="col-sm-6 col-md-5 col-lg-6 d-none d-sm-block">
        <img
          src="./mega-games-images/hero-desktop.png"
          alt="science fair"
          class="hero-left-img"
        />
      </div>

      <div class="col-sm-6 col-md-7 col-lg-6 hero-right-col">
        <div class="hero-right-col-inner">
          <h1 class="hero-h1">みんなでゲーム大会！</h1>

          <h2 class="hero-h2">
            英語が学べるKids UP <br />オリジナルカードゲーム 「Roar!」など、<br />色々なゲームで遊ぼう！<br />好きなキャラクターの
            服装で参加OK！<br />
            ティーチャーに勝って賞品をGETしよう！
          </h2>

          <img
            src="./mega-games-images/header-earlybird.webp"
            alt="header-earlybird"
            class="header-earlybird"
          />

          <script>
            // Get the current date
            var currentDate = new Date();

            // Set the target end date (June 17, 2024)
            var endDate = new Date("2024-06-17");

            // If the current date is after the end date, hide the image
            if (currentDate > endDate) {
              var image = document.querySelector(".header-earlybird");
              if (image) {
                image.style.display = "none";
              }
            }
          </script>

          <button class="hero-cta-button" onclick="formLink()">
            お申込みはこちら
          </button>
        </div>
      </div>
    </div>

    <!-- EVENT INFO MAIN BODY -->
    <div class="main-body-bg">
      <div class="card-pack-intro">
        <img src="./mega-games-images/body-top-decoration.webp" alt="body-top-decoration" class="img-fluid" style="position: absolute; width: 100%;">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <img
                src="./mega-games-images/mega-games-cards.webp"
                alt="mega-games-cards"
                class="img-fluid mega-games-cards"
              />
            </div>

            <div class="col-sm-7">
              <img
                src="./mega-games-images/mega-games-card-header.webp"
                alt="mega-games-card-header"
                class="img-fluid mega-games-card-header"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="div1">
        <h2 class="main-h2">大ゲーム大会 at Kids UP 2024</h2>
        <p class="event-explainer">
          今回は英語が学べるKids UP
          オリジナルカードゲーム「Roar!」や様々なゲームを通して、年の離れたお子様同士も一緒に思いっきり楽しめるイベントです！しかもお気に入りのキャラクターの服装でご参加いただけます！ティーチャーとのゲームバトルに勝利して賞品をGETしよう★
          <br /><br />
          大ゲーム大会は、普段Kids
          UPにお通いでないご兄弟やお友達とのご参加も大歓迎♪
        </p>

        <div class="row">
          <div class="col-sm-4">
            <img
              src="./mega-games-images/three-points-icon-1.webp"
              alt="three-points-icon-1"
              class="three-points-icon"
            />

            <img
              src="./mega-games-images/three-points-1.webp"
              alt="初心者から上級者まで、全ての方に
ご参加いただけます
 お子さまのご年齢・英語のレベルに
関係なくご参加いただけますので
ご安心ください！"
              class="img-fluid"
            />
          </div>

          <div class="col-sm-4">
            <img
              src="./mega-games-images/three-points-icon-2.webp"
              alt="three-points-icon-2"
              class="three-points-icon"
            />

            <img
              src="./mega-games-images/three-points-2.webp"
              alt="お好きなお時間をお選びいただけます
時間が選べるから、他に用事が
あっても大丈夫！
※各回定員になり次第〆切となります
ので、お早目にお申し込みください。"
              class="img-fluid"
            />
          </div>

          <div class="col-sm-4">
            <img
              src="./mega-games-images/three-points-icon-3.webp"
              alt="three-points-icon-3"
              class="three-points-icon"
            />

            <img
              src="./mega-games-images/three-points-3.webp"
              alt="
ご希望のスクールでご参加いただけます
東京・神奈川・千葉・埼玉の各地にスクールを
展開しております。
お好きなスクールをお選びください。"
              class="img-fluid"
            />
          </div>
        </div>
      </div>
      <!-- CUSTOMER TESTIMONY-->

      <div class="customer-testimony-wrapper">
        <img
          src="./mega-games-images/testimony-mid-bg.svg"
          alt="testimony-mid-bg"
          class="customer-tesimony-bg"
        />
        <div class="container">
          <h2 class="main-h2">こんなお声をいただきました♪</h2>

          <div class="row customer-testimony-row">
            <div class="d-none d-sm-block col-md-4 customer-testimony-col">
              <div class="customer-testimony-textbox">
                <p>
                  もう3年通学していますが、定期的に開催されるKids
                  UPの楽しいイベントが大きなモチベーションの一つになっているようです。それまで習い事が続かなかった子供ですがKids
                  UPは絶対に辞めたくない、と言っています。イベントでは普段のレッスンとは違う楽しさがあるようで、フォトサービスで子供の笑顔を見るのをいつも楽しみにしています。
                </p>
                <p style="font-weight: bold">Tさん</p>
              </div>
              <img
                src="./mega-games-images/customer-testimony-1.svg"
                alt="customer-testimony-1"
                class="customer-testimony-img"
              />
            </div>

            <div class="d-none d-sm-block col-md-4 customer-testimony-col">
              <div class="customer-testimony-textbox">
                <p>
                  楽しく英語に触れてほしい、という思いから、シーズナルスクールに参加しました。
                  普段は末っ子気質ですが、Kids UPでは年下のお友達を助けている
                  と聞き、驚きです！
                </p>
                <p style="font-weight: bold">Sさん</p>
              </div>
              <img
                src="./mega-games-images/customer-testimony-2.svg"
                alt="customer-testimony-2"
                class="customer-testimony-img"
              />
            </div>

            <div class="d-none d-sm-block col-md-4 customer-testimony-col">
              <div class="customer-testimony-textbox">
                <p>
                  保育園以外の所に預けるのが初めてだった為、母子共に緊張していましたが、先生達のおかげで楽しく過ごせたようです。「Kids
                  UPではね、Please!って言うんだよ！」と家でも英語を教えてくれました。次回のイベントでは学校の友達も誘って参加したい、と言っています。
                </p>
                <p style="font-weight: bold">Mさん</p>
              </div>
              <img
                src="./mega-games-images/customer-testimony-3.svg"
                alt="customer-testimony-1"
                class="customer-testimony-img"
              />
            </div>
          </div>
          <div class="d-block d-sm-none swiper-arrow-container">
            <div class="swiper-container-testimony">
              <div class="swiper-wrapper">
                <!-- SLIDE 1 -->
                <div class="swiper-slide testimony-slide">
                  <div class="col-md-4 customer-testimony-col">
                    <div class="customer-testimony-textbox">
                      <p>
                        もう3年通学していますが、定期的に開催されるKids
                        UPの楽しいイベントが大きなモチベーションの一つになっているようです。それまで習い事が続かなかった子供ですがKids
                        UPは絶対に辞めたくない、と言っています。イベントでは普段のレッスンとは違う楽しさがあるようで、フォトサービスで子供の笑顔を見るのをいつも楽しみにしています。
                      </p>
                      <p style="font-weight: bold">Tさん</p>
                    </div>
                    <img
                      src="./mega-games-images/customer-testimony-1.svg"
                      alt="customer-testimony-1"
                      class="customer-testimony-img"
                    />
                  </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="swiper-slide testimony-slide">
                  <div class="col-md-4 customer-testimony-col">
                    <div class="customer-testimony-textbox">
                      <p>
                        すでに通学している兄と一緒に年中の妹も参加させたところ、とても楽しかったようで自分も通いたい！と言い出しました。まだ早いかなと思っていましたが幼児から通学している生徒さんが英語ペラペラになっているのを知り、
                        妹の通学もスタートさせることを決めました！
                      </p>
                      <p style="font-weight: bold">Sさん</p>
                    </div>
                    <img
                      src="./mega-games-images/customer-testimony-2.svg"
                      alt="customer-testimony-2"
                      class="customer-testimony-img"
                    />
                  </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="swiper-slide testimony-slide">
                  <div class="col-md-4 customer-testimony-col">
                    <div class="customer-testimony-textbox">
                      <p>
                        保育園以外の所に預けるのが初めてだった為、母子共に緊張していましたが、先生達のおかげで楽しく過ごせたようです。「Kids
                        UPではね、Please!って言うんだよ！」と家でも英語を教えてくれました。次回のイベントでは学校の友達も誘って参加したい、と言っています。
                      </p>
                      <p style="font-weight: bold">Mさん</p>
                    </div>
                    <img
                      src="./mega-games-images/customer-testimony-3.svg"
                      alt="customer-testimony-1"
                      class="customer-testimony-img"
                    />
                  </div>
                </div>
              </div>

              <!-- Navigation arrows ---->
            </div>
            <img
              src="./mega-games-images/gallery/gallery-left-button.svg"
              alt="arrow-left"
              class="swiper-button-testimony-prev"
            />
            <img
              src="./mega-games-images/gallery/gallery-right-button.svg"
              alt="arrow-right"
              class="swiper-button-testimony-next"
            />
          </div>
        </div>
      </div>
      <!---------------------------------------- four-benefits -------------------------------------------->
      <div class="four-benefits-wrapper">
        <div class="container four-benefits-container">
          <!-- main-parent-row -->
          <div class="row">
            <!-- break to 2 rows at lg -->
           
              <!-- nested row -->

                <div class="col-xl-3 col-lg-6 col-sm-12">
                  <!-- benefit 1 -->
                  <div class="row benefit-icon-child-row">
                    <div class="col-sm-3 benefit-icon-child-col-img">
                      <img
                        src="./mega-games-images/benefit-icon-1.svg"
                        alt="benefit-icon-1"
                        class="benefit-icon"
                      />
                    </div>

                    <div class="col-sm-9 benefit-icon-child-col-text">
                      <p class="four-benefits-text">
                        ネイティブスピーカー から生きた英語が 学べます！
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-12">
                  <!-- benefit 2 -->
                  <div class="row benefit-icon-child-row">
                    <div class="col-sm-3 benefit-icon-child-col-img">
                      <img
                        src="./mega-games-images/benefit-icon-2.svg"
                        alt="benefit-icon-2"
                        class="benefit-icon"
                      />
                    </div>

                    <div class="col-sm-9 benefit-icon-child-col-text">
                      <p class="four-benefits-text">
                        バイリンガル講師も在籍 <br />※困った時には日本語で
                        SOSも可能です
                      </p>
                    </div>
                  </div>
                </div>

            <!-- break to 2 rows at lg -->
        

                <div class="col-xl-3 col-lg-6 col-sm-12">
                  <!-- benefit 3 -->
                  <div class="row benefit-icon-child-row">
                    <div class="col-sm-3 benefit-icon-child-col-img">
                      <img
                        src="./mega-games-images/benefit-icon-3.svg"
                        alt="benefit-icon-3"
                        class="benefit-icon"
                      />
                    </div>

                    <div class="col-sm-9 benefit-icon-child-col-text">
                      <p class="four-benefits-text">
                        先生やお友達と 楽しく過ごすことで、
                        <br />強い絆をつくります
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-sm-12">
                  <!-- benefit 4 -->
                  <div class="row benefit-icon-child-row">
                    <div class="col-sm-3 benefit-icon-child-col-img">
                      <img
                        src="./mega-games-images/benefit-icon-4.svg"
                        alt="benefit-icon-4"
                        class="benefit-icon"
                      />
                    </div>

                    <div class="col-sm-9 benefit-icon-child-col-text">
                      <p class="four-benefits-text">
                        先生は全員 が「社員」なので、<br />
                        しっかりとしたサポート 体制を取ることができます
                      </p>
                    </div>
                  </div>
                </div>
   
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="call-to-action">
      <img
        src="./mega-games-images/call-to-action-mid-bg.svg"
        alt="call-to-action-mid-bg"
        class="call-to-action-bg"
      />
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./mega-games-images/cta-kid.png"
              alt=""
              class="img-fluid cta-kid"
            />
          </div>
          <div class="col-sm-6">
            <button class="cta-button" onclick="formLink()">
              お申込みはこちら
            </button>
          </div>
        </div>
      </div>
    </div>
    <!---------------------------------------- activities -------------------------------------------->

    <div class="activities-wrapper">
      <div class="container">
        <!-- Activity 1-->
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./mega-games-images/ball-pool-game.webp"
              alt="ball-pool-game"
              class="img-fluid activity-text"
            />
          </div>
          <div class="col-sm-6">
            <img
              src="./mega-games-images/activity-1.png"
              alt="ball-pool-img"
              class="img-fluid activity-img"
            />
          </div>
        </div>
      </div>
      <!-- Activity 2-->
      <img
        src="./mega-games-images/mid-event-top.svg"
        alt="mid-event-top"
        class="mid-event-top"
      />
      <div class="mid-event-wrapper">
        <div class="container">
          <div class="row">
            <div class="d-none d-sm-block col-md-4 col-sm-6">
              <img
                src="./mega-games-images/original-card-img.webp"
                alt="ball-pool-game"
                class="img-fluid activity-img"
              />
            </div>

            <div class="col-sm-6">
              <img
                src="./mega-games-images/original-card.webp"
                alt="ball-pool-game"
                class="img-fluid activity-text"
              />
            </div>

            <div class="d-block d-sm-none col-md-4 col-sm-6">
              <img
                src="./mega-games-images/original-card-img.webp"
                alt="ball-pool-game"
                class="img-fluid activity-img"
              />
            </div>
          </div>
        </div>
      </div>
      <img
        src="./mega-games-images/mid-event-bottom.svg"
        alt="mid-event-bottom"
        class="mid-event-bottom"
      />
      <!-- Activity 3-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img
              src="./mega-games-images/costume.webp"
              alt="ball-pool-game"
              class="img-fluid activity-text"
            />
          </div>
          <div class="col-sm-6">
            <img
              src="./mega-games-images/activity-3.png"
              alt="ball-pool-img"
              class="img-fluid activity-img"
            />
          </div>
        </div>
      </div>

      <!-- Activity 4-->
      <div class="container">
        <img
          src="./mega-games-images/game-banner-bottom.webp"
          alt="
          オリジナルカードゲームを持ち帰ろう！
          Kids UPオリジナルカードゲーム「Roar!」が初登場！動物や形、色、数字などの英語を楽しみながら
学べる、幅広い年齢層向けの新感覚ゲームです。簡単なゲームから少し難しいものまで、３才から
小学生まで楽しめます。「Roar!」でワイルドに英語を学ぼう！
"
          class="img-fluid"
        />
      </div>
    </div>
    <!-- Gallery -->

    <div class="main-content-bottom-mask" id="div2">
      <div class="carousel-div" style="position: relative">
        <div class="padding-0">
          <div class="swiper" id="image-carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure>
                  <img
                    src="./mega-games-images/gallery/gallery-1.webp"
                    alt="img-1"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 1 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./mega-games-images/gallery/gallery-2.webp"
                    alt="img-2"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 2 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./mega-games-images/gallery/gallery-3.webp"
                    alt="img-3"
                    class="swiper-img"
                  />
                </figure>
              </div>
              <!-- End Slide 3 -->

              <div class="swiper-slide">
                <figure>
                  <img
                    src="./mega-games-images/gallery/gallery-4.webp"
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
                src="./mega-games-images/gallery/gallery-left-button.svg"
                alt="arrow-left"
                class="swiper-custom-nav-arrow swiper-button-left"
              />
              <img
                src="./mega-games-images/gallery/gallery-right-button.svg"
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
          大ゲーム大会 at Kids UP<br class="d-sm-none" />ご参加までの流れ
        </h2>

        <div class="row">
          <div class="col-sm-4">
            <div class="sign-up-wrapper-left">
              <img
                src="./mega-games-images/sign-up-step-1.svg"
                alt="sign-up-step-1"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">WEBフォームよりお申込み</h3>
              <p class="sign-up-p">
                WEBフォームより、Kids UP
                大ゲーム大会への参加お申込みが可能です。ご希望のスクールを選択し、お申込みください。
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="sign-up-wrapper-middle">
              <img
                src="./mega-games-images/sign-up-step-2.svg"
                alt="sign-up-step-2"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">お申込み内容のご確認</h3>
              <p class="sign-up-p">
                WEBフォーム送信後、自動返信メールが届きましたらお申込み完了となります。自動返信メールが届かない場合はお気軽にご連絡ください。
              </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="sign-up-wrapper-right">
              <img
                src="./mega-games-images/sign-up-step-3.svg"
                alt="sign-up-step-3"
                class="img-fluid"
              />
              <h3 class="sign-up-h3">大ゲーム大会当日</h3>
              <p class="sign-up-p">
                フレンドリーな先生達がお子様をお待ちしています！<br />
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
        src="./mega-games-images/pre-footer-topper.svg"
        alt="pre-footer"
        class="img-fluid"
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
