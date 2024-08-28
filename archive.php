<?php get_header(); ?>
<main class="l-main p-archive">
	<div class="c-pv">
		<div class="c-pv__head">
			<h1 class="c-pv__ttl">
				コラム
			</h1>
		</div>
		<picture class="c-pv__img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/pv_img.jpg" alt="">
		</picture>
	</div>

	<div class="l-main__inner u-con--md">
		<?php include locate_template("inc/bread.php"); ?>
		<section class="p-archive-topics">
			<!-- <ul class="p-archive-topics__cat">
				<?php
				$uri = rtrim($_SERVER["REQUEST_URI"], '/');
				$uri = substr($uri, strrpos($uri, '/') + 1);
				$args = array(
					'hide_empty' => '0',
					'orderby' => 'id'
				);
				$categories = get_categories($args);
				foreach ($categories as $category) :
				?>
					<li class="p-archive-topics__cat-item">
						<a href="<?php echo get_category_link($category->term_id); ?>" class="p-archive-topics__cat-link<?php if ($uri == $category->slug) : ?> is-current<?php endif; ?>"><?php echo $category->name; ?></a>
					</li>
				<?php endforeach; ?>
			</ul> -->
			<ul class="p-archive-topics__cards">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
						<li class="c-card">
							<a href="<?php the_permalink(); ?>" class="c-card__link">
								<figure class="c-card__img c-card__img--border">
									<?php
									if (has_post_thumbnail()) {
										echo get_the_post_thumbnail(get_the_ID(), 'large');
									} else {
										echo '<img src="' . get_the_image() . '" alt="' . get_the_title() . '" loading="lazy">';
									}
									?>
								</figure>
								<div class="c-card__body">
									<time class="c-card__time"><?php echo get_the_time('Y.m.d'); ?></time>
									<p class="c-card__ttl">
										<?php the_title(); ?>
									</p>
								</div>
							</a>
						</li>
					<?php endwhile;
				else : ?>
					<li></li>
					<p class="c-news__txt" style="padding:1em 0 1.2em;">
						記事が投稿されていません。
					</p>
					<li></li>
				<?php endif; ?>
			</ul>
			<?php if (function_exists('pagination')) {
				pagination($class = "p-archive-topics__pager");
			} ?>
		</section>
	</div>
</main>
<?php get_footer(); ?>
