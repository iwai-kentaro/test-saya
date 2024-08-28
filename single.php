<?php
get_header();
if (have_posts()) :
	while (have_posts()) : the_post();
?>
		<main class="l-main p-single">
			<div class="l-main__inner">
				<div class="u-con--md">
					<?php include locate_template("inc/bread.php"); ?>
				</div>
				<section class="p-single-article u-con--md">
					<figure class="p-single-article__thumb">
						<?php
						if (has_post_thumbnail()) {
							echo get_the_post_thumbnail(get_the_ID(), 'large');
						} else {
							echo '<img src="' . get_the_image() . '" alt="' . get_the_title() . '" loading="lazy">';
						}
						?>
					</figure>
					<div class="p-single-article__inner">
						<div class="p-single-article__heading">
							<time class="p-single-article__time"><?php echo get_the_time('Y.m.d'); ?></time>
							<?php
							$categories = get_the_category();
							echo '<ul class="p-single-article__cat">';
							foreach ($categories as $category) {
								echo '<li class="p-single-article__cat-item"><a href="' . get_category_link($category->term_id) . '" class="p-single-article__cat-link">' . $category->name . '</a></li>';
							}
							echo '</ul>';
							?>
							<h1 class="p-single-article__title"><?php the_title(); ?></h1>
						</div>
						<div class="p-single-article__body">
							<?php the_content(); ?>
							<?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
						</div>
					</div>
				</section>

				<section class="p-single-aside u-con--md">
					<div class="p-single-aside__heading c-heading">
						<h2 class="c-heading__ttl c-heading__ttl--lg">
							最新のコラム
						</h2>
						<div class="p-single-aside__btn c-heading__btn">
							<a href="<?php echo esc_url(home_url('/column/')); ?>" class="c-heading__btn-link">
								もっと見る
							</a>
						</div>
					</div>
					<div class="p-single-aside__body">
						<ul class="p-single-aside__cards">
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'posts_per_page' => 3,
								'post_type' => 'post',
							);
							$sub_posts = new WP_Query($args);
							if ($sub_posts->have_posts()) :
								while ($sub_posts->have_posts()) : $sub_posts->the_post();
							?>
									<li class="c-card">
										<a href="<?php the_permalink(); ?>" class="c-card__link">
											<figure class="c-card__img">
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
								wp_reset_postdata();
							else : ?>
								<li class="c-news__list">
									<p class="c-news__txt" style="padding:1em 0 1.2em;">
										記事が投稿されていません。
									</p>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</section>
			</div>
		</main>
<?php
	endwhile;
endif;
get_footer();
?>
