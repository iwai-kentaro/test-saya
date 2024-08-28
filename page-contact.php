<?php /* Template Name: お問い合わせ */ get_header(); ?>
<main class="l-main p-contact">
	<div class="c-pv">
		<div class="c-pv__head">
			<h1 class="c-pv__ttl">
				お問い合わせ
			</h1>
		</div>
		<picture class="c-pv__img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/pv_img.jpg" alt="">
		</picture>
	</div>

	<div class="l-main__inner u-con--md">
		<?php the_content(); ?>
	</div>
</main>
<?php get_footer(); ?>
