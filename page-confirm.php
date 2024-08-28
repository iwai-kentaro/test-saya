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
		<section class="p-contact-primary">
			<?php the_content(); ?>
		</section>
	</div>
</main>
<?php get_footer();
