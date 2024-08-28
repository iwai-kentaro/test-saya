<?php get_header(); ?>
<main class="l-main page">
	<div class="l-main__inner">
		<section class="p-<?php echo $slug; ?>">
			<div class="p-<?php echo $slug; ?>__heading c-heading">
				<h2 class="p-<?php echo $slug; ?>__title c-heading__title">
					<?php the_title(); ?>
				</h2>
			</div>
			<div class="p-<?php echo $slug; ?>__body">
				<?php the_content(); ?>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>
