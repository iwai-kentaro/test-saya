<nav class="c-bread" itemscope itemtype="http://schema.org/BreadcrumbList">
	<ul class="c-bread__list">
		<li class="c-bread__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="<?php echo esc_url(home_url('')); ?>" class="c-bread__link" itemprop="item"><span itemprop="name">トップページ</span></a>
			<meta itemprop="position" content="1" />
		</li>
		<?php if (is_archive() || is_singular() && !is_page()) : ?>
			<li class="c-bread__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="../" class="c-bread__link" itemprop="item"><span itemprop="name">コラム一覧</span></a>
				<meta itemprop="position" content="2" />
			</li>
			<?php if (is_singular()) : ?>
				<li class="c-bread__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href="/" class="c-bread__link" itemprop="item"><span itemprop="name"><?php the_title(); ?></span></a>
					<meta itemprop="position" content="3" />
				</li>
			<?php elseif (is_category()) : ?>
				<li class="c-bread__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href="/" class="c-bread__link" itemprop="item"><span itemprop="name"><?php single_tag_title(); ?></span></a>
					<meta itemprop="position" content="3" />
				</li>
			<?php endif; ?>
		<?php else : ?>
			<li class="c-bread__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>" class="c-bread__link" itemprop="item"><span itemprop="name"><?php echo $viewMeta['title'] ?></span></a>
				<meta itemprop="position" content="2" />
			</li>
		<?php endif; ?>
	</ul>
</nav>
