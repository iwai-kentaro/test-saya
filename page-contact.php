<?php /* Template Name: お問い合わせ */ get_header(); ?>
<main>
	<div class="p-contact">
		<section class="l-under-mv p-contact-mv">
			<div class="c-inner l-under-mv__inner">
				<h1 class="l-under-mv__title">
					お問い合わせ
				</h1>
				<!-- ぱんくずリスト -->
				<?php require_once get_theme_file_path('/parts/breadcrumb.php'); ?>
				<!-- ---------- -->
			</div>
		</section>
		<section class="p-contact-intro">
			<div class="p-contact-intro__inner c-inner">
				<h2 class="p-contact-intro__title">ご質問・ご相談などお気軽にお問い合わせください。</h2>
				<div class="p-contact-intro__telbox">
					<h3 class="p-contact-intro__telbox-title">
						お電話でのお問い合わせ
					</h3>
					<a href="tel:0120-585-545">
						<figure class="l-contact-intro__telbox-img"><img src="<?php echo esc_url(get_theme_file_uri("assets/images/common/tel-blue.svg")); ?>" alt="電話"></figure>
					</a>
				</div>

				<?php echo do_shortcode('[contact-form-7 id="73036b8" title="お問い合わせ"]'); ?>

			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>