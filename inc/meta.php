<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
	<?php if (is_user_logged_in()) {
		echo "<style type='text/css'>html[lang='ja'] {margin: 0 0 32px !important;} #wpadminbar {	top: unset!important; bottom: 0; } @media screen and (max-width: 600px) { #wpadminbar { position: fixed; }} </style>";
	} ?>
	<?php if (is_page("complete")): ?>
		<meta name=”robots” content=”noindex, nofollow”>
	<?php else: endif; ?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/admin/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/admin/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/admin/android-chrome-192x192.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@500;700&family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>