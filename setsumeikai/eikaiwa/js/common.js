$(function () {
    $('#js-slider').slick({
      arrows: true, // 前・次のボタンを表示する
      dots: true, // ドットナビゲーションを表示する
      appendDots: $('.dots-2'), // ドットナビゲーションの生成位置を変更
      speed: 1000, // スライドさせるスピード（ミリ秒）
      slidesToShow: 1, // 表示させるスライド数
      centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
      variableWidth: true, // スライド幅の自動計算を無効化
    });
  });


// faqアコーディオン
  $('.accordion-header').click(function() {
    $('.accordion-header').not(this).next().slideUp();
    $('.accordion-header').not(this).removeClass('active');
    $(this).next().slideToggle();
    $(this).toggleClass('active');
  });


  $('.slider').slick({
    autoplay:true, // 自動再生を設定
    autoplaySpeed:5000, // スライド切り替えの時間を設定
    dots:true // インジケーターを表示
  });