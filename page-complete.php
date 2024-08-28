<?php get_header(); ?>
<main class="l-main p-contact">
	<div class="p-complete">
		<section class="l-under-mv p-complete-mv">
			<div class="c-inner l-under-mv__inner">
				<h1 class="l-under-mv__title">
					送信完了
				</h1>
				<!-- ぱんくずリスト -->
				<?php require_once get_theme_file_path('/parts/breadcrumb.php'); ?>
				<!-- ---------- -->
			</div>
		</section>
		<section class="p-complete-intro">
			<div class="p-complete-intro__inner c-inner">
				<h2 class="p-complete-intro__title l-title-sub">お問い合わせ<br class="u-pc_none">ありがとうございました</h2>
				<p class="p-complete-intro__text">
					ご登録いただいたメールアドレスに<br class="u-pc_none">申し込み完了メールを送りました。<br>
					メールが届いているかをご確認ください。
				</p>
			</div>
			<div class="p-complete-none">
				<div class="p-complete-none__inner c-inner">
					<h2 class="p-complete-none__title">
						メールが受信できない場合
					</h2>
					<ul class="p-complete-none__list">
						<li class="p-complete-none__item">※「迷惑フォルダー」をご確認ください。</li>
						<li class="p-complete-none__item">※それでも申し込み完了メールがない場合は、何らか理由でメールの受信を拒否していると思われます。</li>
						<li class="p-complete-none__item">その場合、大変お手数ではございますが、以下までご連絡ください。</li>
					</ul>
					<h3 class="p-complete-none__sub">
						問い合わせ先
					</h3>
					<p class="p-complete-none__sub-text">株式会社ミツケン</p>
					<a href="tel:0120-585-545">
						<figure class="l-complete-none__telbox-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/tel-blue.svg")); ?>" alt="電話"></figure>
					</a>
				</div>
			</div>
		</section>

	</div>
</main>
<?php get_footer();
