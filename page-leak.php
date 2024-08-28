<?php get_header(); ?>
<main>
  <div class="p-leak">
    <section class="p-leak-mv l-under-mv">
      <div class="l-under-mv__inner c-inner">
        <h1 class="l-under-mv__title">雨漏り・水濡れ修繕</h1>
        <!-- ぱんくずリスト -->
        <?php require_once get_theme_file_path('/parts/breadcrumb.php'); ?>
        <!-- ---------- -->
      </div>
    </section>
      
    <section class="p-leak-intro">
      <div class="p-leak-intro__inner c-inner">
        <figure class="p-leak-intro__aimitsu"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/aimitsu.webp")); ?>" alt=""></figure>
        <h2 class="p-leak-intro__title">雨漏り診断士が原因を徹底解決！</h2>
        <div class="p-leak-intro__box l-service-box">
          <div class="l-service-box__content">
            <figure class="l-service-box__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/amamori-case01.webp")); ?>" alt=""></figure>
            <div class="l-service-box__text">
              <p class="l-service-box__text-title">緊急性の高い雨漏りは、今すぐお問い合わせください。</p>
              <ul class="l-service-box__list">
                <li class="l-service-box__item">現在雨漏りをしている</li>
                <li class="l-service-box__item">雨漏り・水漏れで入居者からクレームが来ている</li>
                <li class="l-service-box__item">何度も修理しているのに雨漏りが止まらない</li>
                <li class="l-service-box__item">壁のタイルが剥がれているなど、周囲に危険を及ぼす可能性がある。</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="p-leak-intro__box l-service-box">
          <div class="l-service-box__content">
            <figure class="l-service-box__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/amamori-case02.webp")); ?>" alt=""></figure>
            <div class="l-service-box__text">
              <p class="l-service-box__text-title">以下のような場合は雨漏り・水漏れが悪化して<br class="u-md_none">建物を傷める可能性があります。</p>
              <ul class="l-service-box__list">
                <li class="l-service-box__item">天井や壁にシミができている</li>
                <li class="l-service-box__item">繰り返し雨漏りが起きている</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- cta -->
    <?php require_once get_theme_file_path('/parts/cta.php'); ?>
    <!-- ---------- -->

    <section class="p-leak-feature">
      <div class="p-leak-feature__inner c-inner">
        <h2 class="l-title-sub">ミツケンの雨漏り・水濡れ修繕の<br class="u-pc_none">３つの特長</h2>
        <p class="p-leak-feature__caption">雨漏り・水漏れ修繕は、専門性と技術・知識が必要な修繕です。</p>
        <div class="p-leak-feature__boxes l-feature">
          <div class="l-feature__box">
            <div class="l-feature__content">
              <figure class="l-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/leak-feature01.webp")); ?>" alt=""></figure>
              <div class="l-feature__text">
                <p class="l-feature__text-title"><span>01</span>雨漏り・水漏れ修繕の専門性が高い</p>
                <p class="l-feature__desc">ミツケンは防水工事からスタートした会社であるため、防水工事を特に得意としています。<br>社長の谷村は、国家資格である一級防水技能士の検定員（先生）をしています。若い職人の見本となる立場であるため、自社の雨漏り・水漏れの修繕や防水工事にはひときわ厳しい目を向けています。</p>
              </div>
            </div>
          </div>
          <div class="l-feature__box">
            <div class="l-feature__content">
              <figure class="l-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/leak-feature02.webp")); ?>" alt=""></figure>
              <div class="l-feature__text">
                <p class="l-feature__text-title"><span>02</span>10000件以上の豊富な工事実績！（24年07月時点）</p>
                <p class="l-feature__desc">ミツケンの雨漏り・水漏れ修繕の実績数が1000件以上に上ります。<br>あらゆるパターンの雨漏り・水漏れ事案を経験しているため、原因の究明や対処力に自信があります。</p>
              </div>
            </div>
          </div>
          <div class="l-feature__box">
            <div class="l-feature__content">
              <figure class="l-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/leak-feature03.webp")); ?>" alt=""></figure>
              <div class="l-feature__text">
                <p class="l-feature__text-title"><span>03</span>雨漏り診断士のスタッフ6名</p>
                <p class="l-feature__desc">『雨漏り診断士』とは、NPO法人雨漏り診断士協会が実施している認定試験です。<br>雨漏り診断士は、建物の基礎知識から防水の知識や雨漏りの診断知識などの正しい知識を身に付けている職人です。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-aimitsu l-caution">
      <div class="p-aimitsu__inner l-caution__inner c-inner">
        <h3 class="l-caution__title">雨漏り・水漏れ修繕をご依頼の<br class="u-pc_none">大家さんへのお願い</h3>
        <div class="l-caution__content">
          <p class="l-caution__text">ミツケンでは、大規模修繕工事において、『あいみつ（相見積もり）』を取ることを推奨しています。<br>工事業者は他の業者に仕事を取られてしまう可能性があるため、あいみつを避けたいと考えることが多いものです。<br>しかし大家さんにとっては、あいみつを取った方がメリットを得られます。</p>
          <p class="l-caution__text">ただし、台風の後や梅雨時期などは、雨漏り・水漏れのご依頼が多いため、<br class="u-md_none">少しお待ちいただく場合もございますのでご了承ください。</p>
          <p class="l-caution__text">お問い合わせいただきましたら、まずは雨漏り・水漏れの状態を調査いたします。<br>基本的にはご連絡をいただいた順に修繕いたしますが、雨漏り・水漏れの状況によっては、<br class="u-md_none">より緊急度の高い案件を優先する場合があります。</p>
          <p class="l-caution__text">お待ちいただく場合は、応急処置や対応についてしっかりとご説明させていただきます。</p>
          <div class="l-caution__content-box">
            <p class="l-caution__content-title">雨漏り・水漏れ修繕の費用例</p>
            <p class="l-caution__text">●雨漏り調査　0円（無料）<br>●雨漏り修理　30000円～<br>●防水工事　50000円～</p>
          </div>
        </div>
      </div>
    </section>

    <section class="p-leak-service">
      <div class="p-leak-service__inner c-inner">
        <div class="p-leak-service__block">
          <h2 class="l-title-sub">保険修繕にも対応しています。</h2>
          <div class="p-leak-service__content">
            <figure class="p-leak-service__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/leak-suggest01.webp")); ?>" alt=""></figure>
            <div class="p-leak-service__text">
              <p class="p-leak-service__text-caption">台風などの自然災害が原因となった雨漏り・水漏れの修繕は火災保険が適用できます。<br>ミツケンでは、保険適用可能か否かを現地調査で判断します。<br>保険適用の場合は、ミツケンで必要書類作成等の保険手続きをおこないます。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-leak-flow">
      <div class="p-leak-flow__inner c-inner">
        <h2 class="l-title-sub">雨漏り・水漏れ修繕の流れ</h2>
        <div class="p-leak-flow__content">
          <ul class="p-leak-flow__items">
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow01.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>01</span>お問い合わせ</p>
                <p class="p-leak-flow__desc">ヒアリングにより雨漏り・水漏れの状態を確認いたします。</p>
                <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/arrow.svg")); ?>" alt="">
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow02.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>02</span>現地調査</p>
                <p class="p-leak-flow__desc">雨漏り診断士のスタッフが、1～2時間ほどかけて雨漏り・水漏れの状態を調査します。</p>
                <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/arrow.svg")); ?>" alt="">
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow03.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>03</span>診断書・お見積り提出</p>
                <p class="p-leak-flow__desc">現地調査の結果を踏まえて修繕にかかる費用のお見積りを提出いたします。</p>
                <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/arrow.svg")); ?>" alt="">
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow04.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>04</span>ご成約</p>
                <p class="p-leak-flow__desc">見積りの内容にご納得いただきましたら、ご成約のお手続きに入ります。</p>
                <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/arrow.svg")); ?>" alt="">
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow05.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>05</span>着工</p>
                <p class="p-leak-flow__desc">緊急度の高い雨漏り・水漏れの場合は、最短当日に着工いたします。</p>
                <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/arrow.svg")); ?>" alt="">
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow06.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>06</span>工事費用お支払い</p>
                <p class="p-leak-flow__desc">引き渡し時に請求書をお渡しいたしますのでお支払いをお願いいたします。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <div class="service-wrap">
      <section class="p-leak-case">
        <div class="p-leak-case__inner c-inner">
          <h2 class="l-title-sub">雨漏り・水漏れ修繕で<br class="u-pc_none">起こりやすい失敗例</h2>
          <p class="p-leak-case__caption">雨漏り・水漏れの修繕は、緊急度が高い傾向があります。<br>そのため失敗をしてしまうケースがございますのでご注意ください。</p>
          <ul class="p-leak-case__items">
            <li class="p-leak-case__item">
              <h3 class="l-case-title">失敗例1 相場よりも高額な修繕費用がかかってしまった</h3>
              <p class="p-leak-case__item-text">急を要するため、修繕業者を選ぶことができず、相場よりも高い費用がかかってしまうケースがあります。<br>択肢がない場合、費用が高くても依頼せざる負えないこともあります。<br>事前に雨漏り・水漏れ修繕の対応ができる業者を見つけておくことをおすすめします。</p>
            </li>
            <li class="p-leak-case__item">
              <h3 class="l-case-title">失敗例2 雨漏り・水漏れが直らなかった</h3>
              <p class="p-leak-case__item-text">修繕工事をおこなったにもかかわらず、雨漏り・水漏れが直らないこともあります。<br>これは、手抜き工事をおこなっていた場合と、雨漏り・水漏れに対する知識が不足していたケースが考えられます。<br>雨漏り・水漏れは原因の発見や修繕に専門的な知識や技術が必要です。<br>そのため、正しい対処法がわからないまま修繕をおこなっても雨漏り・水漏れは直りません。</p>
            </li>
            <li class="p-leak-case__item">
              <h3 class="l-case-title">失敗例3 一旦は直ったがすぐに再発した</h3>
              <p class="p-leak-case__item-text">修繕によって直ったように感じていても、後日再び雨漏り・水漏れが発生してしまうケースです。<br>これは目で見てわかりやすい原因とは別に根本原因が別にある場合におこります。<br>建物の構造上、根本原因が発見しづらいこともあるため、繰り返し雨漏り・水漏れが起きる場合には、しっかりと根本原因を突き止めて修繕する必要があります。</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="p-leak-summary">
        <div class="p-leak-summary__inner c-inner">
          <h2 class="l-title-sub">雨漏り・水濡れが起きる前に</h2>
          <p class="p-leak-summary__caption">雨漏り・水漏れが起きてから慌てて業者を調べても失敗してしまうことが多くあります。<br>台風などの自然災害後は、残念なことに悪徳業者が横行します。<br>万一、雨漏り・水漏れが起きたとき、慌てずに適切な修繕ができるよう、事前に雨漏りにいての知識を持っておくようにしましょう。</p>
          <p class="p-leak-summary__caption">ミツケンではセミナーイベントやで、雨漏りや修繕に関する情報を提供しています。<br>失敗しない雨漏り修繕のために、ぜひご参加くださいませ。</p>
          <a href="<?php echo esc_url(home_url("/")) ?>" class="p-leak-summary__link c-btn">セミナーイベント情報はこちら</a>
        </div>
      </section>
    </div>

    <!-- cta -->
    <?php require get_theme_file_path('/parts/cta.php'); ?>
    <!-- ---------- -->

  </div>
</main>
<?php get_footer(); ?>