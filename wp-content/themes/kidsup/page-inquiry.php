<?php get_header('inquiry'); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
</header><!-- end header-->
		<a name="pagetop"></a>
		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<?php breadcrumb(); ?>
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper" >
					<section id="inquiry-01" class="page-contents-section slide-bottom show" style="padding-bottom: 0;">
						<div class="page-contents-inner">
							<p class="p_normal-otherpage" style="text-align: center;">当スクールへのお問い合わせ・ご依頼の際は、以下のフォームに入力のうえ、送信してください。<br><a class="link_txt" href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">よくあるご質問</a>もご参考ください。<br>個別でのご相談・体験レッスンも承っておりますので、こちらのフォームにてご依頼ください。</p>
							
<style>
:root {
  --ku-orange: #ef8200;
  --ku-orange-hover: #f08e18;
  --ku-secondary: #111827;
  --ku-faded: #d1c2ad;
  --main-background: #faf2e8;
  --shadow-input-orange: inset 0 0 0 2px var(--ku-orange);
  font-family: "Noto Sans JP", "Noto Sans SC", "Noto Sans", "Noto Serif JP",
    "Noto Serif SC", serif;
}

button {
  cursor: pointer;
  width: 60%;

  @media (max-width: 992px) {
    width: 90%;
  }
}

#formContactUs {
  background: var(--main-background);
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-evenly;
  align-items: center;
  gap: 1.25rem 0;
  padding: 0.75rem 0;
  color: var(--ku-secondary);

  @media (max-width: 992px) {
    flex-flow: column nowrap;
  }

  label {
    display: flex;
    flex-flow: row nowrap;
    font-weight: 600;
    font-size: 1.125rem;
    line-height: 1.75rem;
  }
}

.form-group {
  width: 60%;
  display: flex;
  flex-flow: column nowrap;
  gap: 0.5rem;
  text-align: left;

  @media (max-width: 992px) {
    width: 90%;
  }
}

.form-group.privacy {
  flex-flow: row nowrap;
  align-items: center;
  justify-content: center;
}

#school-form-group {
  flex-basis: 93%;
}

.label-text {
  color: var(--ku-secondary);
  font-size: 1rem;
  line-height: 1.5rem;
}

.label {
  display: inline;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em;
  padding: 0.125rem 0.5rem;
  margin-left: 0.5rem;
  font-size: 0.75rem;
  line-height: 1rem;
}

.label-required {
  border: 2px solid var(--ku-orange);
  color: var(--ku-orange);
  border-radius: 0.25rem;
  max-height: 1.5rem;
}

.label-premium {
  border: 2px solid var(--ku-faded);
  color: var(--ku-faded);
  border-radius: 0.25rem;
  max-height: 1.5rem;
}

.form-control {
  box-shadow: inset 0 0 0 1px var(--ku-secondary);
  background: white;
  border-radius: 0.375rem;
  padding: 0.5rem;
  border-width: 1px;
  font-size: 1rem;
  line-height: 1.5rem;
  color: var(--ku-secondary);
}

.form-control::placeholder {
  color: var(--ku-faded);
  font-weight: 500;
}

.form-control:focus-visible {
  outline: none;
  box-shadow: var(--shadow-input-orange);
}

p.notes {
  width: 90%;
  font-weight: 600;
  color: var(--ku-secondary);
  text-align: center;
}

#btnContactUs {
  padding: 0.75rem;
  border-radius: 0.75rem;
  background: var(--ku-orange);
  font-weight: 600;
  color: white;
  font-size: 1rem;
  line-height: 1.5rem;
  border: none;

  &:disabled {
    opacity: 50%;
    cursor: not-allowed;

    &:hover {
      opacity: 50%;
    }
  }

  &:hover {
    opacity: 90%;
  }
}

.summary-heading {
  width: 100%;
  text-align: center;
}

.btn-secondary {
  border: 1px solid var(--ku-secondary);
  border-radius: 0.25rem;
  background: var(--ku-secondary);
  color: white;
  padding: 0.25rem;
  font-weight: 600;
  font-size: 1rem;
  line-height: 1.5rem;

  &:hover {
    color: var(--ku-secondary);
    background: transparent;
  }
}

#submit-group {
  @media (max-width: 992px) {
    flex-flow: column nowrap;
    width: 100%;
  }
}

#modalPrivacyPolicy {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: 2rem;
  padding: 2rem;
  background: var(--main-background);
  text-align: start;
  border-radius: 0.5rem;
  border: none;

  &::backdrop {
    background: rgba(0, 0, 0, 0.75);
  }

  ol {
    list-style: decimal;
  }

  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    button {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.75rem;
      width: 1.25rem;
      height: 1.25rem;
    }
  }

  .modal-footer {
    display: flex;
    justify-content: end;

    button {
      width: 20vw;
    }
  }
}					
							</style>
							
							
<form
      action="https://kids-up.app/create_inquiry"
      method="post"
      accept-charset="UTF-8"
      id="formContactUs"
    >
      <input type="hidden" name="category" id="category" value="I" />
      <div id="school-form-group" class="form-group">
        <label for="school">
          <span class="label-text"
            >お問い合わせ先のスクールをお選びください</span
          >
          <span class="label label-required"> 必須 </span>
        </label>
      </div>

      <div class="form-group">
        <label for="parent_name">
          <span class="label-text">保護者のお名前</span>
          <span class="label label-required"> 必須 </span>
        </label>
        <input
          class="form-control"
          placeholder="保護者のお名前を入力してください"
          required="required"
          name="parent_name"
          type="text"
          id="parent_name"
        />
      </div>

      <div class="form-group">
        <label for="child_name">
          <span class="label-text">お子様のお名前</span>
          <span class="label label-required"> 必須 </span>
        </label>
        <input
          class="form-control"
          placeholder="カタカナでお子様のお名前を入力してください"
          required="required"
          name="child_name"
          type="text"
          id="child_name"
        />
      </div>

      <div class="form-group">
        <label for="phone">
          <span class="label-text">電話番号</span>
          <span class="label label-required"> 必須 </span>
        </label>
        <input
          type="tel"
          id="phone"
          name="phone"
          class="form-control"
          placeholder="例) 08012345678"
          value=""
          required="required"
        />
        <p style="margin-top: -0.5rem">
          ※お電話での回答を希望される方は、以下の「お問い合わせ内容」に通話可能な日時をご記載ください。
        </p>
      </div>

      <div class="form-group">
        <label for="email">
          <span class="label-text">メールアドレス</span>
          <span class="label label-required"> 必須 </span>
        </label>
        <input
          class="form-control"
          id="email"
          placeholder="メールアドレスを入力してください"
          required="required"
          name="email"
          type="email"
        />
      </div>

      <div class="form-group">
        <label for="requests">
          <span class="label-text">お問い合わせ内容</span>
          <span class="label label-required"> 必須 </span>
        </label>
        <textarea
          rows="5"
          cols="25"
          class="form-control"
          id="requests"
          placeholder="例）説明会に参加したいのですが、予定が合いません。個別相談会に行きたいです。"
          name="requests"
          required="required"
        ></textarea>
      </div>

      <p class="text-center notes">
        「<a id="privacyModalButton" href="" class="link_txt"
          >プライバシーポリシー</a
        >」をご確認頂き、ご同意の上で送信を行ってください。
      </p>

      <dialog id="modalPrivacyPolicy">
        <div class="modal">
          <div class="modal-header">
            <h2>プライバシーポリシー</h2>
            <button class="close-modal btn-secondary" type="button">X</button>
          </div>
          <div class="modal-content">
            <h5>株式会社P-UP World（ピーアップワールド）</h5>
            <h5>代表取締役社長　中込 正典</h5>
            <br />

            <p>
              株式会社P-UP
              World及びその子会社各社（以下「当社グループ各社」といい、具体的には下表記載の各社をいいます。）は、お客様または利用者の個人情報（生存する個人に関する情報であって、お名前、電子メールアドレス、電話番号、住所その他の記述等により特定の個人を識別できる情報および個人識別符号が含まれる情報。以下「個人情報」といいます。）を含む当社グループ各社が取得したすべての個人情報を安全に保管し、お客様および利用者の意思を尊重した利用・取扱いを行う環境を築き、お客様および利用者からの信頼を頂くとともに、安全でより良いサービスの提供を行い、法令を遵守するとともに、以下の方針に基づき、当社グループ各社が収集し利用するすべての個人情報の適切な取扱いに取り組んでまいります。
            </p>
            <br />

            <ol>
              <li>個人情報の取得</li>
              <p>
                当社グループ各社は、第２項に定める利用目的のために必要な範囲で、適切かつ公正な手段によって個人情報を取得いたします。
                また、当社グループ各社は、お客様または利用者の個人情報を取得しようとする場合または取得した場合には、その利用目的をお客様または利用者に明示しまたは公表（もしくは通知）いたします。
              </p>
              <br />
              <li>個人情報の利用目的</li>
              <p>
                当社グループ各社は、保有する個人情報を、次の目的で利用いたします。
              </p>
              <ol>
                <li>
                  当社グループ各社が取扱うサービス・商品及びその関連するサービス・商品についての情報の、お客様または利用者及びお取引関係者へのご提供
                </li>
                <li>
                  当社グループ各社のお客様または利用者に対するサービスのご提供
                  キャンペーン・イベントまたはアンケート等のご案内、商品または製品などの発送、料金の計算およびそのご請求
                </li>
                <li>
                  電話、電子メール等を利用してのご連絡、お問い合わせに対するご返答
                </li>
                <li>
                  サービスにおける本人確認、ユーザー登録、サービス向上のための利用状況の調査
                </li>
                <li>
                  当社グループ各社の従業員の個人情報については、雇用及び人事管理
                </li>
                <li>
                  防犯カメラ・録音機の設置及び取得した情報（個人情報を含みます）による防犯・防災
                </li>
                <li>利便性向上及び満足度向上、レイアウトの改善等の店舗運営</li>
              </ol>
              <p></p>
              <br />
              <li>個人情報の共同利用</li>
              <p>
                当社グループ各社は、お客様または利用者からご提供頂いた個人情報（お名前、電子メールアドレス、電話番号、ご住所等の情報及び公開情報等、前項に定める目的の達成に必要な範囲の項目）、ならびに店舗内カメラで取得したお客様または利用者の映像等から得られたデータに基づき統計処理した情報を、前項の目的のため、当社グループ各社と共同利用することがございます。
                個人情報を共同利用する場合、株式会社P-UP
                Worldがその責任において管理します。株式会社P-UP
                Worldの住所および代表者氏名については、こちらをご覧ください。
              </p>
              <br />
              <li>個人情報の第三者への提供</li>
              <p>
                当社グループ各社は、次の各号のいずれかに該当すると認められるときは、個人情報を第三者に提供することがございます。
              </p>
              <ol>
                <li>法令に基づく場合</li>
                <li>
                  人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき
                </li>
                <li>
                  公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき
                </li>
                <li>
                  国の機関若しくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき
                </li>
                <li>
                  学術研究機関等（大学その他の学術研究を目的とする機関若しくは団体又はそれらに属する者）に個人情報を提供する場合であって、当該学術研究機関等が当該個人情報を学術研究目的で取り扱う必要がある場合（当該個人情報を取り扱う目的の一部が学術研究目的である場合を含み、個人の権利利益を不当に侵害するおそれがある場合を除きます。）
                </li>
              </ol>
              <p></p>
              <br />
              <li>個人情報の管理</li>
              <p>
                当社グループ各社は、お客様また利用者の個人情報の安全管理に関する規程を整備し、必要かつ適切な措置を講ずるとともに個人情報への不正アクセス、紛失、破壊、改ざんおよび漏えい等を防止するため、必要な技術的措置を講じます。また、当社グループ各社は、個人情報保護に関する管理体制の継続的改善のため、計画・実施・監視・要因分析・改善施策実施というプロセスを継続的に運用し、適切な管理体制の維持に努めます。
              </p>
              <br />
              <li>個人情報取扱業務の外部委託</li>
              <p>
                当社グループ各社は、個人情報の取扱いの全部または一部を外部に委託することがあります。この場合、委託先において個人情報の安全管理が図られるよう、法の定めに従い必要かつ適切な監督を行います。
              </p>
              <br />
              <li>個人情報の開示・訂正・利用停止・消去等</li>
              <p>
                お客様または利用者ご本人またはその代理人は、当社グループ各社に対し、当該当社グループ各社の保有個人データの開示（第三者提供記録の開示を含みます。）を求めることができます。ただし、次の各号のいずれかに該当する場合には、当社グループ各社として開示しないことができます。
                <br />
              </p>
              <ol>
                <li>
                  お客様または利用者本人または第三者の生命、身体、財産その他利益を害するおそれがある場合
                </li>
                <li>
                  当社グループ各社の業務の適正な実施に著しい支障を及ぼすおそれがある場合
                </li>
                <li>法令に違反することとなる場合</li>
              </ol>
              <br />
              当社グループ各社は、お客様若しくは利用者ご本人またはその代理人から保有個人データの内容の訂正、追加、削除、第三者への提供の停止を求められたときは、法令に従って、利用目的の達成に必要な範囲内において、遅滞なく調査を行います。その結果に基づき、法令に定める範囲で、当該個人情報の内容の訂正、追加、削除、または第三者への提供の停止を行います。
              <p></p>
              <br />
              <li>プライバシーポリシーに関するお問い合わせ先</li>
              <br />
              <p>
                当社グループ各社が保有する個人情報に関するご連絡、ご要望、お問合せ等は、下記までご連絡ください。
              </p>
              <ol>
                <li>プライバシーポリシーに関するお問い合わせ先</li>
                <li>受付窓口　本社カスタマーセンター</li>
                <li>E‐Mail　　ir@p-up.jp</li>
                <li>受付電話番号　　03-3870- 0099</li>
                <li>
                  受付時間　　平日午前10時から午後6時まで。但し、12月31日から1月3日、システムメンテナンス日を除く。
                </li>
              </ol>
              <p></p>
              <br />
            </ol>

            <p>
              P-UPWorld グループ各社
              <br />
              本ポリシーにおける当社グループ各社は、下表記載の株式会社P-UP World
              グループ各社をいいます。
              <br />
              社名
              <br />
              株式会社P-UP World
              <br />
              株式会社ピーアップ
              <br />
              株式会社Kids-UP
              <br />
              株式会社デライトアップ
              <br />
              株式会社Moto-UP
              <br />
              株式会社Mogu-UP
              <br />
              KauUP株式会社
              <br />
              株式会社P-UPneo
              <br />
              株式会社Back-UP
              <br />
              株式会社P-up Challenge
              <br />
              <br />
              改訂履歴
              <br />
              2020年03月03日　作成
              <br />
              2021年01月05日　改訂
              <br />
              2022年04月04日　改訂
              <br />
              2022年06月06日　改訂
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="close-modal btn-secondary">
              閉じる
            </button>
          </div>
        </div>
      </dialog>
	
<div class="form-group privacy" id="submit-group">
        <div class="form-group privacy">
          <input type="checkbox" name="privacy" id="privacy" required />
          <label for="privacy"> 個人情報保護方針に同意する </label>
        </div>

        <button
          type="submit"
          class="btn btn-primary btn-md"
          id="btnContactUs"
          style="text-align: center"
          disabled
        >
          個人情報保護方針に同意の上、次へお進みください
        </button>
      </div>
    </form>
							
	<script>
			const inquiryForm = document.getElementById("formContactUs");

// Fetch the current list of schools from Seasonal Site API

async function getSchools() {
	const response = await fetch("https://kids-up.app/schools");
	const data = await response.json();

	return data.map((school) => {
		return {
			id: school.id,
			name: `Kids UP ${school.name}`,
		};
	});
}

async function createSchoolsDropdown() {
	const schools = await getSchools();

	const formGroup = document.getElementById("school-form-group");
	formGroup.classList.add("form-group");
	const select = document.createElement("select");
	select.id = "school_id";
	select.name = "school_id";
	select.required = "required";

	const defaultOption = document.createElement("option");
	defaultOption.innerText = "選択してください";
	defaultOption.value = "";
	defaultOption.selected = true;
	select.appendChild(defaultOption);

	schools.forEach((school) => {
		const option = document.createElement("option");
		option.value = school.id;
		option.innerText = school.name;
		select.appendChild(option);
	});

	select.classList.add("form-control");
	formGroup.appendChild(select);
}

createSchoolsDropdown();

function addModalListeners() {
	const privacyCheck = document.getElementById("privacy");

	privacyCheck.addEventListener("change", function(e) {
		const submitButton = document.getElementById("btnContactUs");

		if (e.target.checked) {
			submitButton.disabled = false;
			submitButton.innerText = "個人情報保護方針に同意する";
		} else {
			submitButton.disabled = true;
			submitButton.innerText = "個人情報保護方針に同意の上、次へお進みください";
		}
	});

	const privacyModal = document.getElementById("modalPrivacyPolicy");

	const closeModalButtons = document.querySelectorAll(".close-modal");
	closeModalButtons.forEach((button) => {
		button.addEventListener("click", () => {
			privacyModal.close();
		});
	});

	const privacyModalLink = document.getElementById("privacyModalButton");

	privacyModalLink.addEventListener("click", (e) => {
		e.preventDefault();
		privacyModal.showModal();
	});
}

addModalListeners();

const originalForm = inquiryForm.innerHTML;

const LABEL_TRANSLATIONS = {
	school_id: "お問い合わせ先のスクールをお選びください",
	parent_name: " 保護者のお名前",
	phone: "電話番号",
	email: "Eメール",
	child_name: "お子様のお名前",
	child_birthday: "お子様の生年月日",
	kindy: "保育園・幼稚園名と在園状況 ",
	ele_school: "小学校名と在学状況 ",
	requests: "お問い合わせ内容",
};

inquiryForm.addEventListener("submit", function showSummary(e) {
	e.preventDefault();
	inquiryForm.removeEventListener("submit", showSummary);
	getFormData(e);
});

function getFormData(e) {
	const data = new FormData(e.target);
	const inquiryObject = Object.fromEntries(data);
	const schoolSelect = document.getElementById("school_id");
	const selectedSchool =
		schoolSelect.options[schoolSelect.selectedIndex].innerText;

	createSummary(inquiryObject, selectedSchool);
}

function createSummary(inquiry, selectedSchool) {
	inquiryForm.innerHTML = "";
	inquiryForm.append(...createSummaryHeadings());
	Object.entries(inquiry)
		.filter((pair) => pair[0] !== "category" && pair[0] !== "privacy")
		.forEach((pair) => {
			if (pair[0] === "school_id") {
				pair[1] = selectedSchool;
			}
			inquiryForm.appendChild(createSummaryField(pair));
		});
	inquiryForm.appendChild(createButtonContainer(inquiry));
	window.location.replace("#pagetop", "");
}

function createSummaryHeadings() {
	const heading = document.createElement("h2");
	heading.innerText = "お問い合わせ内容の確認";
	heading.classList.add("summary-heading");

	const message = document.createElement("p");
	message.classList.add("kids-sub");
	message.innerText = "お問い合わせ内容をご確認下さい。";
	message.classList.add("summary-heading");

	return [heading, message];
}

function createSummaryField(pair) {
	const fieldContainer = document.createElement("div");

	const label = document.createElement("label");
	label.innerText = LABEL_TRANSLATIONS[pair[0]];

	const value = document.createElement("p");
	value.innerText = pair[1] || "なし";

	fieldContainer.append(label, value);
	fieldContainer.classList.add("form-group");
	return fieldContainer;
}

function createButtonContainer(inquiry) {
	const container = document.createElement("div");
	container.style.display = "flex";
	container.style.flexDirection = "column";
	container.style.alignItems = "center";
	container.style.gap = "0.5rem";
	container.style.width = "100%";
	container.appendChild(createBackButton(inquiry));
	container.appendChild(createSubmitButton(inquiry));
	return container;
}

function createBackButton(inquiry) {
	const button = document.createElement("button");
	button.classList.add("btn-secondary");
	button.type = "submit";
	button.innerText = "戻る";
	button.addEventListener("click", async function showForm(e) {
		e.preventDefault();
		inquiryForm.innerHTML = originalForm;
		await createSchoolsDropdown();
		Object.entries(inquiry).forEach((pair) => {
			const input = document.getElementById(pair[0]);
			if (input.type === "select") {
				const optGroups = input.children;
				[...optGroups].forEach((group) => {
					const selected = group.find((o) => o.value === pair[1]);
					if (selected) selected.selected = pair[1];
				});
			} else {
				input.value = pair[1];
			}
		});
		addModalListeners();
		inquiryForm.addEventListener("submit", function showSummary(e) {
			e.preventDefault();
			inquiryForm.removeEventListener("submit", showSummary);
			getFormData(e);
		});
	});
	return button;
}

function createSubmitButton(inquiry) {
	const button = document.createElement("button");
	button.id = "btnContactUs";
	button.type = "submit";
	button.innerText = "送信する";
	button.classList.add("btn", "btn-primary", "btn-md");
	button.style.textAlign = "center";
	button.addEventListener("click", async (e) => {
		e.preventDefault();
		response = await sendInquiry(inquiry);
		if (response.status === 200) {
			document.location = "https://kids-up.jp/inquiry/complete/";
		} else {
			inquiryForm.innerHTML = "";
			inquiryForm.appendChild(createErrorMessage());
		}
	});
	return button;
}

function createErrorMessage() {
	const message = document.createElement("h1");
	message.innerText = "お問い合わせは送信できませんでした。";
	return message;
}

async function sendInquiry(inquiry) {
	const headers = new Headers({
		"Content-Type": "application/json",
	});

	const response = await fetch("https://kids-up.app/create_inquiry.json", {
		method: "POST",
		headers: headers,
		body: JSON.stringify({ inquiry: inquiry }),
	});
	return response;
}				
							</script>						
							
							
							
							
							
						</div><!-- end page-contents-inner-->
					</section><!-- end #profile-01 .page-contents-section-->
				</section><!-- end .page-contentents-wrapper-->
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>