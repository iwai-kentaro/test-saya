<?php get_header(); ?>
<main>
  <div class="p-service">
    <section class="p-service-mv l-under-mv">
      <div class="l-under-mv__inner c-inner">
        <h1 class="l-under-mv__title">サービスの流れ</h1>
        <!-- ぱんくずリスト -->
        <?php require_once get_theme_file_path('/parts/breadcrumb.php'); ?>
        <!-- ---------- -->
      </div>
    </section>


    <section class="p-leak-flow p-service-intro">
      <div class="p-leak-flow__inner c-inner">
        <div class="p-leak-flow__content">
          <ul class="p-leak-flow__items">
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow01.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 01</span>お問い合わせ/ヒアリング</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">劣化、破損など不具合に関する修繕のお問い合わせ、大規模修繕の相談、無料診断のお申し込みなどお気軽にお問い合わせください。</p>
                  <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow02.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 02</span>無料現地調査/無料建物診断</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">無料の現地調査・建物診断を実施します。<br>
                    無料調査・診断は、目視によっておこないます。</p>
                    <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow03.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 03</span>お見積り/診断書提出</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">現地調査・診断の結果を診断書にしてお渡しいたします。<br>
                    また、診断結果からわかりやすいお見積書を提出、施工内容の提案をいたします。</p>
                    <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow04.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 04</span>ご契約</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">お見積り内容、提案内容にご納得いただきましたら本契約をいたします。<br>
                    工事日程等を詳細に説明いたします。</p>
                    <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-step05.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 05</span>工事着工</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">工事を開始します。工事前に、ご近所様へ工事のご挨拶訪問を実施いたします。<br>
                    雨漏り修繕：最短即日着工、大規模修繕：最短２週間着工、<br>
                    工事期間は工事内容により異なります。</p>
                    <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-step06.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 06</span>検収</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">工事完了前に必ずお客様の最終確認をして頂きます。<br>
                    お客様の確認後、工事完了となります。基本的に引き渡し時点でのお支払いになります。</p>
                    <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/flow06.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 07</span>工事費用お支払い</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">工事完了前に、最終検査を実施します。<br>
                  各種厳しい検査を行い、全てクリアした後、お渡しいたします。</p>
                  <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
            <li class="p-leak-flow__item">
              <figure class="p-leak-flow__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-step08.webp")); ?>" alt=""></figure>
              <div class="p-leak-flow__detail">
                <p class="p-leak-flow__item-title"><span>STEP 08</span>アフターフォロー</p>
                <div class="p-leak-flow__descBox">
                  <p class="p-leak-flow__desc">完工後も何かお困りごとがございましたら、お気軽にお申し付けくださいませ。</p>
                  <img class="p-leak-flow__arrow" src="<?php echo esc_url(get_theme_file_uri("assets/images/service/service-arrow.svg")); ?>" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- cta -->
    <?php require get_theme_file_path('/parts/cta-02.php'); ?>
    <!-- ---------- -->
  </div>
</main>
<?php get_footer(); ?>