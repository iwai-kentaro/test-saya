<?php /* Template Name: トップページ */ get_header(); ?>
<main class="l-main p-top">
	<a class="top-contact-button u-md_none">
		<img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-contact-circle.webp")); ?>" alt="">
	</a>
	<div class="top-contact-button-sp">
		<a class="top-contact-button-sp__link">
			<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/sp-tel.webp")); ?>" alt="お問い合わせはこちら">
		</a>
		<a class="top-contact-button-sp__link">
			<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/sp-contact.webp")); ?>" alt="0120-585-545">
		</a>
	</div>
	<section class="p-top-mv u-md_none">
		<div class="p-top-mv__swiper swiper u-md_none">
			<div class="swiper-wrapper">
				<div class="p-top-mv__slide swiper-slide">
					<div class="swiper-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/mv-01.webp")); ?>" alt=""></div>
				</div>
				<div class="p-top-mv__slide swiper-slide">
					<div class="swiper-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/mv-02.webp")); ?>" alt=""></div>
				</div>
				<div class="p-top-mv__slide swiper-slide">
					<div class="swiper-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/mv-03.webp")); ?>" alt=""></div>
				</div>
			</div>
		</div>
		
		<figure class="p-top-mv__slide u-pc_none">
			<picture>
				<source srcset="<?php echo esc_url(get_theme_file_uri("assets/images/top/mv-01.webp")); ?>" media="(min-width: 666px)">
				<img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/mv-01.webp")); ?>" alt="">
			</picture>
		</figure>
		<div class="p-top-mv__heading">
			<h1 class="p-top-mv__ttl">
			大家が営む<br>大規模修繕専門店
			</h1>
			<figure class="p-top-mv__theme"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-mv-text.png")); ?>" alt=""></figure>
			<p class="p-top-mv__text">「大規模修繕を単なる出費で終わらせたくない」<br class="u-pc_none">マンションオーナー様向け</p>
		</div>
		<a href="<?php echo esc_url(home_url("/news")) ?>" class="p-top-mv__news">
			<p class="p-top-mv__news-heading">NEWS</p>
			<time class="p-top-mv__news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.08.01</time>
			<p class="p-top-mv__news-title">夏期の営業に関するお知らせ</p>
		</a>
		<div class="p-top-mv__scroll"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/scroll.svg")); ?>" alt="scroll"></div>
	</section>

	<section class="p-top-feature">
		<div class="p-top-feature__inner c-inner">
			<h2 class="p-top-feature__title">現役大家の修繕会社<br class="u-pc_none" />だからできる！</h2>
			<ul class="p-top-feature__items">
				<li class="p-top-feature__item">
					<figure class="p-top-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-feature01.webp")); ?>" alt=""></figure>
					<p class="p-top-feature__text">CPM・CCIMの観点から<br>損しない工事</p>
				</li>
				<li class="p-top-feature__item">
					<figure class="p-top-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-feature02.webp")); ?>" alt=""></figure>
					<p class="p-top-feature__text">無駄な工事を行わない<br>ミニマムの工事</p>
				</li>
				<li class="p-top-feature__item">
					<figure class="p-top-feature__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-feature03.webp")); ?>" alt=""></figure>
					<p class="p-top-feature__text">大家目線・資産運用視点での<br>コスパのいい工事</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="p-top-suggest">
		<div class="p-top-suggest__inner c-inner">
			<div class="p-top-suggest__heading-wrap">
				<p class="p-top-suggest__heading">相見積もり推奨</p>
				<p class="p-top-suggest__heading-copy">修繕コスト3割減、<br class="u-pc_none">雨漏り修繕成功率99.9%の実績！</p>
			</div>
			<p class="p-top-suggest__text">コストをかけずに<br class="u-pc_none">収益に繋がる修繕を<br class="u-md_none">大家目線で<br class="u-pc_none">一緒に考え、プロとしてご提案。</p>
			<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-suggest__reason c-btn">ミツケンが選ばれる理由</a>
		</div>
	</section>
	<div class="p-top-suggest__area-wrap">
		<div class="p-top-suggest__area">
			<p class="p-top-suggest__area-title">対応エリア</p>
			<div class="p-top-suggest__content">
				<div class="p-top-suggest__left">
					<p>関西エリア</p>
					<figure class="p-top-suggest__area-img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-kansai.webp")); ?>" media="(min-width: 1000px)">
							<img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-kansai-sp.webp")); ?>" alt="">
						</picture>
					</figure>
				</div>
				<div class="p-top-suggest__right">
					<p>関東エリア</p>
					<figure class="p-top-suggest__area-img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-kanto.webp")); ?>" media="(min-width: 1000px)">
							<img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/top-kanto-sp.webp")); ?>" alt="">
						</picture>
					</figure>
				</div>
			</div>
	</div>
	</div>

	<section class="p-top-service">
		<div class="p-top-service__inner c-inner">
			<div class="l-top-title">
				<p class="l-top-title__en">service</p>
				<p class="l-top-title__jp">サービス紹介</p>
			</div>
			<ul class="p-top-service__items">
				<li class="p-top-service__item">
					<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-service__link --01">
						<div class="p-top-service__bg --01"></div>
						<p>大規模修繕</p>
					</a>
				</li>
				<li class="p-top-service__item">
					<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-service__link --02">
						<div class="p-top-service__bg --02"></div>
						<p>雨漏り・水漏れ修繕</p>
					</a>
				</li>
				<li class="p-top-service__item">
					<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-service__link --03">
						<div class="p-top-service__bg --03"></div>
						<p>チョコリノ</p>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="p-top-case">
		<div class="p-top-case__inner c-inner">
			<div class="l-top-title">
				<p class="l-top-title__en">case</p>
				<p class="l-top-title__jp">修繕事例</p>
			</div>
			<ul class="p-top-case__items">
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
				<li class="p-top-case__item">
					<a href="<?php the_permalink(); ?>" class="p-top-case__link">
						<figure class="p-top-case__img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-case.webp")); ?>" alt=""></figure>
						<span class="p-top-case__cate">大規模修繕</span>
						<p class="p-top-case__item-title">**市マンション大規模修繕</p>
					</a>
				</li>
			</ul>
			<a href="<?php echo esc_url(home_url("/case")) ?>" class="p-top-case__more c-btn">more</a>
		</div>
	</section>

	<section class="p-top-report">
		<div class="p-top__inner c-inner">
			<div class="l-top-title">
				<p class="l-top-title__en">report</p>
				<p class="l-top-title__jp">イベントレポート</p>
			</div>
			<ul class="p-top-report__list">
				<li class="p-top-report__item">
					<a href="<?php the_permalink(); ?>" class="p-top-report__item-link">
						<time class="p-top-report__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.08.14</time>
						<div class="p-top-report__item-title-wrap">
							<p class="p-top-report__item-title">元気の出る家主の会に、講師として参加しました！</p>
						</div>
					</a>
				</li>
				<li class="p-top-report__item">
					<a href="<?php the_permalink(); ?>" class="p-top-report__item-link">
						<time class="p-top-report__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.08.14</time>
						<div class="p-top-report__item-title-wrap">
							<p class="p-top-report__item-title">元気の出る家主の会に、講師として参加しました！</p>
						</div>
					</a>
				</li>
			</ul>
			<a href="<?php echo esc_url(home_url("/report")) ?>" class="p-top-report__more c-btn">more</a>
		</div>
	</section>

	<section class="p-top-interview">
		<div class="p-top-interview__inner c-inner">
			<div class="l-top-title">
				<p class="l-top-title__en">interview</p>
				<p class="l-top-title__jp">オーナー対談</p>
				<div class="p-top-interview__content">
					<div class="p-top-interview__swiper-container">
						<div class="p-top-interview__swiper swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
									<div class="swiper-slide">
										<img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/test-interview.webp")); ?>" alt="">
										<time class="p-top-interview__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">2024.01.01</time>
										<p class="p-top-interview__item-title">元気の出る大家の会会長×建築社長</p>
									</div>
								</div>
						</div>
						<!-- ページネーション -->
						<div class="swiper-pagination"></div>
						<!-- 前後の矢印 -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			<a href="<?php echo esc_url(home_url("/interview")) ?>" class="p-top-interview__more c-btn">more</a>
		</div>
	</section>

	<section class="p-top-company">
		<div class="p-top-company__inner c-inner">
			<div class="l-top-title">
				<p class="l-top-title__en">company</p>
				<p class="l-top-title__jp">会社情報</p>
			</div>
			<div class="p-top-company__content">
				<div class="p-top-company__left">
					<p class="p-top-company__name">株式会社ミツケン</p>
					<dl class="p-top-company__data">
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">所在地</dt>
							<dd class="p-top-company__data-desc">〒584-0044<br>大阪府富田林市別井3-1-5</dd>
						</div>
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">事務所</dt>
							<dd class="p-top-company__data-desc">〒531-0073<br>大阪府大阪市北区本庄西1-6-16　明和ビル203号室</dd>
						</div>
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">TEL</dt>
							<dd class="p-top-company__data-desc">0120-585-545</dd>
						</div>
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">FAX</dt>
							<dd class="p-top-company__data-desc">0721-23-5071</dd>
						</div>
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">受付時間</dt>
							<dd class="p-top-company__data-desc">AM9:00～PM5：00</dd>
						</div>
						<div class="p-top-company__data-wrap">
							<dt class="p-top-company__data-title">定休日</dt>
							<dd class="p-top-company__data-desc">土曜日・日曜日・祝日</dd>
						</div>
					</dl>
					<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-company__more c-btn u-pc_none">more</a>
				</div>
				<div class="p-top-company__right">
					<div class="p-top-company__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.3458723555755!2d135.62341297596043!3d34.494114794269116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000d63d5fe0ea3b%3A0x5bd4567b7a68a56c!2z5qCq5byP5Lya56S-44Of44OE44Kx44Oz!5e0!3m2!1sja!2sjp!4v1723608305047!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<a href="<?php echo esc_url(home_url("/")) ?>" class="p-top-company__more c-btn u-md_none">more</a>
				</div>
			</div>
		</div>
	</section>

</main>
<?php get_footer();
