<?php get_header(); ?>
<main>
  <div class="p-reason">
    <section class="p-reason-mv l-under-mv">
      <div class="l-under-mv__inner c-inner">
        <h1 class="l-under-mv__title">選ばれる理由</h1>
        <!-- ぱんくずリスト -->
        <?php require_once get_theme_file_path('/parts/breadcrumb.php'); ?>
        <!-- ---------- -->
      </div>
    </section>



    <section class="p-reason-intro">
      <div class="p-reason-intro__inner c-inner">
        <div class="p-reason__box">
          <div class="p-reason__box-inner">
            <a href="#flex" class="p-reason__box-item c-reason-button-border">修繕工事の専門性と柔軟性</a>
            <a href="#three" class="p-reason__box-item c-reason-button-border">３つの角度から提案</a>
            <a href="#aimitsu" class="p-reason__box-item c-reason-button-border">あいみつ推奨</a>
            <a href="#service" class="p-reason__box-item c-reason-button-border">品質の高いサービス</a>
          </div>
        </div>
        <div class="p-reason__container c-inner" id="flex">
          <h2 class="p-reason__container-title ">
            修繕工事の専門業者の<br class="u-pc_none">豊富な知識と柔軟な対応
          </h2>
          <div class="p-reason__container-content">
            <figure class="p-reason__container-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/reason/reason-flexible.webp")); ?>" alt="flexible"></figure>
            <div class="p-reason__container-textbox">
              <p class="p-reason__container-text">
                ミツケンは、ビル・アパート・マンション等の修繕工事の専門店です。物件の資産価値を高めるための大規模修繕だけでなく、緊急度の高い雨漏り工事、劣化した部分だけを修繕する個別の修繕工事（チョコリノ）と、あらゆる修繕工事をおこなっています。
              </p>
              <p class="p-reason__container-text">
                大家さんにとって修繕工事は未来の望む姿に向かうための手段のひとつです。大家さんの希望を聞きながら、専門業者として最適な工事を遂行しています。<br>
                ミツケンでは、大家さんが希望する工事を確実におこなうため、一級防水施工技能士や雨漏り診断士などの資格を取得したスタッフを中心に、万全の体制で工事施工をおこなっています。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- three -->
    <section class="p-reason-three" id="three">
      <div class="p-reason-three__inner c-inner">
        <div class="p-reason-three__wrapper">
          <div class="p-reason-three__title-box">
            <h2 class="l-title-sub">３つの角度から<br class="u-pc_none">大家さんが得をする提案</h2>
          </div>
          <div class="p-reason-three__box">
            <div class="p-reason-three__box-content">
              <figure class="p-reason-three__box-contentImg"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/reason/reason-three.webp")); ?>" alt="three"></figure>
            </div>
            <p class="p-reason-three__box-text">
              「大家さん」「建物のプロ」「不動産のプロ」３つの視点で多角的に検討して、<br class="u-md_none">
              大家さんにとって最もメリットのある提案をします。
            </p>
          </div>
          <div class="p-reason-three__content">
            <div class="p-reason-three__content-item">
              <h3 class="p-reason-three__content-title">
                大家さんの目線
              </h3>
              <p class="p-reason-three__content-text">
                ミツケンでは収益物件を保有する大家業も営んでいます。<br>
                そのため、大家さんがどんなことを望み、どんなことで悩み、どんなことで困るのか、自身の経験として知っています。<br>
                また、複数の大家の会にも所属し、たくさんの大家さんの話も聞いてきました。<br>
                収益物件の修繕工事は、大家さんにとって大きな課題です。だからこそ大家さんの目線を大切にしています。
              </p>
            </div>
            <div class="p-reason-three__content-item">
              <h3 class="p-reason-three__content-title">
                建物のプロの視点
              </h3>
              <p class="p-reason-three__content-text">
                ミツケンは修繕工事・防水工事の専門業者として建物の修繕に対する高い知識と経験を持っています。同時に二級建築士や一級建築施工管理技士等の資格を有する建築事務所も経営しています。<br>
                建物の構造や仕組み、部材の性質などにも精通した建物のプロの視点で、大家さんの保有する物件を冷静に診断・分析します。
              </p>
            </div>
            <div class="p-reason-three__content-item">
              <h3 class="p-reason-three__content-title">
                不動産のプロの観点
              </h3>
              <p class="p-reason-three__content-text">
                CPM（米国不動産経営管理士）、宅地建物取引士（宅建士）の資格を有しており、不動産を管理・運営して、資産価値や収益性を最大化させるための知識があります。不動産のプロの観点から、大家さんが保有する物件の収益性を高めるための方策を考えることができます。
              </p>
            </div>
          </div>
        </div>
    </section>



    <!-- aimitsuService -->
    <section class="p-reason-aimitsuService p-reason-intro" id="aimitsu">
      <div class="p-reason-aimitsuService__inner c-inner">
        <div class="p-reason-aimitsuService__title-box">
          <h2 class="l-title-sub">あいみつ（相見積もり）推奨</h2>
        </div>
        <div class="p-reason-aimitsuService__container-content">
          <figure class="p-reason-aimitsuService__container-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/reason/reason-aimitsu.webp")); ?>" alt="flexible"></figure>
          <div class="p-reason-aimitsuService__container-textbox">
            <p class="p-reason-aimitsuService__container-text">
              ミツケンではあいみつを推奨しています。<br>
              工事業者はあいみつを避ける傾向があります。これは自社で仕事を請ける確率を減らすことになるためです。また、他社と比較されることで優位性を失う可能性もあります。<br>
              しかし、大家さんの目線ではあいみつを取った方が有利です。<br>
              費用面では、他社と比較することで適正価格を知ることができ、無駄なコストをかけずに済むためです。<br>
              また、複数の業者の話を聞くことで、ご自身の物件にとって必要な工事を取捨選択するための材料を得ることができます。<br>
              大家さんにより良い選択をしてたいだくために、ミツケンはあいみつをおすすめしています。
            </p>
          </div>
        </div>
      </div>
      <div class="p-reason-aimitsuService__inner c-inner" id="service">
        <div class="p-reason-aimitsuService__title-box">
          <h2 class="l-title-sub">問い合わせから工事完了まで<br class="u-pc_none">品質の高いサービス</h2>
        </div>
        <div class="p-reason-aimitsuService__container-content">
          <figure class="p-reason-aimitsuService__container-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/reason/reason-service.webp")); ?>" alt="flexible"></figure>
          <div class="p-reason-aimitsuService__container-textbox">
            <p class="p-reason-aimitsuService__container-text">
              建築業者や職人に対して、ひと昔前までは「乱暴」「こわい」「頑固」という悪いイメージがありました。<br>
              ミツケンでは、そんなイメージを払拭して、仕事をご依頼いただいた大家さんに感動していただけるサービスの提供を目指しています。<br>
              そのために、問い合わせに対する対応から、施工管理、品質管理などあらゆる面でより良いサービスを提供するためにするべきことを言語化して、スタッフ一同で共有しています。
            </p>
            <p class="p-reason-aimitsuService__container-text">
              たとえば、現場を常にきれいにしておく。工事ではやりにくいことほど丁寧におこなう。相手の立場に立って考える。明るい笑顔、元気なあいさつ。などです。
            </p>
          </div>
        </div>
        <p class="p-reason-aimitsuService__text">
          一つひとつは小さなことですが、それがすべて積み重なることで、<br class="u-md_none">
          対応面でも工事面でも質の高いサービスを提供できると考えています。
        </p>
      </div>
    </section>
    <!-- aimitsuService -->
         <!-- cta -->
    <?php require get_theme_file_path('/parts/cta-02.php'); ?>
    <!-- ---------- -->
</main>
<?php get_footer(); ?>