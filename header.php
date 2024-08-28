<!DOCTYPE html>
<html lang="ja">
<?php include locate_template("inc/meta.php"); ?>

<body>
	<?php wp_body_open(); ?>
	<header class="l-header js-header">
      <div class="l-header__inner">
          <p class="l-header__logo">
            <a href="<?php echo esc_url(home_url("/")) ?>">
							<picture class="l-header__logo">
								<img class="img-before" src="<?php echo esc_url(get_theme_file_uri("assets/images/common/logo.webp")); ?>" alt="株式会社">
								<img class="img-after" src="<?php echo esc_url(get_theme_file_uri("assets/images/common/logo-change.webp")); ?>" alt="株式会社">
							</picture>
            </a>
          </p>
          <nav class="l-header__menu">
            <ul class="l-header__items">
              <!-------------------------------------- サービス紹介 -->
              <li class="l-header__item">
                <p class="l-header__link l-js-submenu">サービス紹介</p>
                <!-- <div class="l-header__sub-content l-header__about">
                  <div class="l-header__sub-close"><span></span></div>
                  <div class="l-header__sub-content-inner c-inner">
                    <p class="l-header__submenu-title l-header__about-title">サービス紹介</p>
                    <div class="l-header__submenu l-header__about-submenu">
                      <div class="l-header__about-subitem l-header__about-subitem--recommend">
                          <a href="<?php echo esc_url(home_url("/about/about-dx")) ?>" class="l-header__subitem_link l-header__about-link">
                            <figure class="l-header__about-img">
                              <img src="<?php echo esc_url(get_theme_file_uri("assets/img/common/header-about01.png")); ?>" alt="">
                            </figure>
                            <div class="l-header__about-text">
                              <p class="l-header__about-item-title">すすめ！DX部</p>
                              <p class="l-header__about-item-title_sub">DX導入、専門家が全面サポート。デジタルで未来の経営を実現</p>
                              <p class="l-header__about-desc">「すすめ！DX部」が、わかりやすいアドバイスであなたの会社をデジタル変革へ導きます。<br>業務を効率化し、もっと楽しく、もっと簡単に。未来の経営を今日からスタートさせましょう！</p>
                            </div>
                          </a>
                      </div>
                      <div class="l-header__about-subitem_wrap">
                        <div class="l-header__about-subitem l-header__about-subitem02">
                          <a href="<?php echo esc_url(home_url("/about/about-reason")) ?>" class="l-header__subitem_link l-header__about-link">
                            <figure class="l-header__about-img">
                              <img src="<?php echo esc_url(get_theme_file_uri("assets/img/common/header-about02.png")); ?>" alt="">
                            </figure>
                            <div class="l-header__about-text">
                              <p class="l-header__about-item-title">ビジネスセンター岡山がサービス紹介</p>
                              <p class="l-header__about-desc">「お客様視点のサービス」「豊富な経験と実績」「創造性と能動性」主にこの3点が。私たちの強みです。</p>
                            </div>
                          </a>
                        </div>
                        <div class="l-header__about-subitem l-header__about-subitem03">
                          <a href="<?php echo esc_url(home_url("/about/about-license")) ?>" class="l-header__subitem_link l-header__about-link">
                            <figure class="l-header__about-img">
                              <img src="<?php echo esc_url(get_theme_file_uri("assets/img/common/header-about03.png")); ?>" alt="">
                            </figure>
                            <div class="l-header__about-text">
                              <p class="l-header__about-item-title">品質を担保する資格</p>
                              <p class="l-header__about-desc">弊社が品質を保てる秘訣である、専門的な資格と資格を保有する人数を掲載しています。</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </li>
              <!-------------------------------------- 修繕事例 -->
              <li class="l-header__item">
                <a href="<?php echo esc_url(home_url("/")) ?>" class="l-header__link l-js-submenu">修繕事例</a>
              </li>
              <!-------------------------------------- イベントレポート -->
              <li class="l-header__item l-header__item-solution">
                <p class="l-header__link l-js-submenu">イベントレポート</p>
              </li>
							<!-------------------------------------- 対談 -->
							<li class="l-header__item l-header__item-recruit">
                <a href="https://recruit.bco.co.jp/" class="l-header__link l-js-submenu">対談</a>
              </li>
							<!-------------------------------------- ミツケンが選ばれる理由 -->
							<li class="l-header__item l-header__item-recruit">
                <a href="https://recruit.bco.co.jp/" class="l-header__link l-js-submenu">ミツケンが選ばれる理由</a>
              </li>
							<!-------------------------------------- サービスの流れ -->
							<li class="l-header__item l-header__item-recruit">
                <a href="https://recruit.bco.co.jp/" class="l-header__link l-js-submenu">サービスの流れ</a>
              </li>
							<!-------------------------------------- 採用情報 -->
							<li class="l-header__item l-header__item-recruit">
                <a href="https://recruit.bco.co.jp/" class="l-header__link l-js-submenu">採用情報</a>
              </li>
							<!-------------------------------------- 会社情報 -->
							<li class="l-header__item l-header__item-recruit">
                <a href="https://recruit.bco.co.jp/" class="l-header__link l-js-submenu">会社情報</a>
              </li>
							<li class="l-header__item l-header__contact">
								<a href="tel:0120-585-545" class="">
									<img class="img-before" src="<?php echo esc_url(get_theme_file_uri("assets/images/common/tel.svg")); ?>" alt="0120-585-545">
									<img class="img-after" src="<?php echo esc_url(get_theme_file_uri("assets/images/common/tel-change.svg")); ?>" alt="0120-585-545">
								</a>
              </li>
              <li class="l-header__item l-drawer__hamburger l-hamburger js-hamburger u-pc_none">
								<span class="l-hamburger-span01"></span>
								<span class="l-hamburger-span02"></span>
								<span class="l-hamburger-span03"></span>
              </li>
            </ul>
          </nav>
      </div>
      <div class="l-drawer__menu drawer js-drawer">
				<div class="l-drawer__inner">
					<h2 class="l-drawer__logo">
						<a href="<?php echo esc_url(home_url("/")) ?>">
							<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/logo.webp")); ?>" alt="株式会社ミツケン">
						</a>
					</h2>
          <nav class="l-drawer__nav">
            <ul class="l-drawer__items">
              <li class="l-drawer__item">
                <p href="<?php echo esc_url(home_url("/about")) ?>" class="l-drawer__link">サービス紹介</p>
                <div class="l-drawer__toggle">
                  <span></span>
                </div>
                <!-- <ul class="l-drawer__content">
                  <li class="l-drawer__content-item"><a class="l-drawer__content-link" href="<?php echo esc_url(home_url("/about/about-reason")) ?>" class="l-drawer__link">-&nbsp;BCOがサービス紹介</a></li>
                  <li class="l-drawer__content-item"><a class="l-drawer__content-link" href="<?php echo esc_url(home_url("/about/about-dx")) ?>" class="l-drawer__link">-&nbsp;すすめ！DX部</a></li>
                  <li class="l-drawer__content-item"><a class="l-drawer__content-link" href="<?php echo esc_url(home_url("/about/about-license")) ?>" class="l-drawer__link">-&nbsp;品質を担保する資格</a></li>
                </ul> -->
              </li>
              <li class="l-drawer__item">
                <a href="<?php echo esc_url(home_url("/case")) ?>" class="l-drawer__link">修繕事例</a>
              </li>
              <li class="l-drawer__item l-drawer__item-solution">
                <a href="<?php echo esc_url(home_url("/report")) ?>" class="l-drawer__link">イベントレポート</a>
              </li>
							<li class="l-drawer__item l-drawer__item-recruit">
                <a href="<?php echo esc_url(home_url("/interview")) ?>" class="l-drawer__link">対談</a>
              </li>
              <li class="l-drawer__item">
                <a href="<?php echo esc_url(home_url("/reason")) ?>" class="l-drawer__link">ミツケンが選ばれる理由</a>
              </li>
              <li class="l-drawer__item">
                <a href="<?php echo esc_url(home_url("/flow")) ?>" class="l-drawer__link">サービスの流れ</a>
              </li>
              <li class="l-drawer__item">
                <a href="<?php echo esc_url(home_url("/recruit")) ?>" class="l-drawer__link">採用情報</a>
              </li>
              <li class="l-drawer__item">
                <a href="<?php echo esc_url(home_url("/company")) ?>" class="l-drawer__link">会社情報</a>
              </li>
              <li class="l-drawer__item l-drawer__contact">
								<a class="l-drawer__tel l-drawer__link" href="<?php echo esc_url(home_url("/contact")) ?>"><figure class="l-drawer__tel-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/tel.svg")); ?>" alt="0120-585-545"></figure></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>