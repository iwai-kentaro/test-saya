<?php get_header(); ?>
<main class="l-main p-contact">
	<section class="c-pv js-movePoint">
		<div class="c-pv__img--short c-pv__img--short-noimg"></div>
	</section>
	<div class="l-main__inner u-con--sm">
		<div class="p-contact__ttl c-ttl c-ttl--center">
			<h2 class="c-ttl__en">Contact</h2>
			<p class="c-ttl__jp u-b-green">お問い合わせ</p>
		</div>
		<section class="p-contact-thanks">
			<p class="p-contact-thanks__msg">
				お問合せありがとうございます。<br>後程、担当者よりご連絡差し上げますので今しばらくお待ちくださいませ。
			</p>

			<div class="p-contact-form__bottom">
				<div class="p-contact-form__btn">
					<a href="<?php echo esc_url(home_url('')); ?>" class="p-contact-form__btn-link">ホーム</a>
				</div>
			</div>
		</section>
	</div>
</main>
<?php get_footer();
