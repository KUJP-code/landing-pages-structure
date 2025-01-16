<section class="sign-up" id="sign-up">
  <div class="container">
    <h2 class="sign-up-h2">
      Kids UPの<?php echo htmlspecialchars($eventType); ?><br class="d-sm-none" />ご参加までの流れ
    </h2>

    <div class="row sign-up-row">
      <div class="col-sm-4">
        <div class="sign-up-wrapper-left">
          <div w3-include-html="../global-images/sign-up-step-1.html"></div>
          <h3 class="sign-up-h3">
            WEBフォームよりお申込み<br /><br class="d-none d-sm-block" />
          </h3>
          <p class="sign-up-p">
            WEBフォームよりKids UPの<?php echo htmlspecialchars($eventType); ?>にお申込みが可能です。お申し込みフォームより入力のうえ、お申込みください。
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="sign-up-wrapper-middle">
          <div w3-include-html="../global-images/sign-up-step-2.html"></div>
          <h3 class="sign-up-h3">
            お申込み内容のご確認<br /><br class="d-none d-sm-block" />
          </h3>
          <p class="sign-up-p">
            WEBフォーム送信後、スクールからメールにてお申込内容の確認をさせていただきます。お申込内容に相違があった場合には、お気軽にお申し出ください。
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="sign-up-wrapper-right">
          <div w3-include-html="../global-images/sign-up-step-3.html"></div>
          <h3 class="sign-up-h3">
            Kids UPの<?php echo htmlspecialchars($eventType); ?><br>
            イベント当日
          </h3>
          <p class="sign-up-p">
            フレンドリーな先生たちがお子様をお待ちしております！<br />
            <br />
            ※各日程ごとに定員になり次第受付を締め切らせていただきます。
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
</section>
