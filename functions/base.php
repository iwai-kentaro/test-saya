<?php

/**
 * CSSとJavaScriptの読み込み
 *
 */
define("DIRE", get_template_directory_uri());
function add_files()
{
	if (!is_admin()) {
		//css
		wp_enqueue_style('style_style', DIRE . '/assets/css/style.css?' . date("ymdHis", filemtime(get_template_directory() . '/assets/css/style.css')));

		//javascript
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery-main', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
		wp_enqueue_script('bundle', DIRE . '/assets/js/script.js?' . date("ymdHis", filemtime(get_template_directory() . '/assets/js/script.js')), false, '1.0', true);

		// if (is_page('machi')) {
		// 	//css
		// 	wp_enqueue_style('scrollbar-style', DIRE . '/assets/css/perfect-scrollbar.css');

		// 	//javascript
		// 	wp_enqueue_script('scrollbar', DIRE . '/assets/js/perfect-scrollbar.js', false, '1.0', true);
		// }
	}
}
add_action('wp_enqueue_scripts', 'add_files');

// styles
function gutenberg_support_setup()
{
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('editor-styles');
	add_editor_style('admin/editor-style.css');
}
add_action('after_setup_theme', 'gutenberg_support_setup');

/**
 * Allow Webp
 */
function custom_mime_types($mimes)
{
	$mimes['webp'] = 'image/webp';
	return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');

/**
 * 大きな画像に_scaledという名前をつけない
 */
add_filter("big_image_size_threshold", "__return_false");

/**
 * WordPress標準機能
 *
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ
	add_theme_support('automatic-feed-links'); // RSSフィード
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

/* タイトルタグ区切り変更 */
function change_separator()
{
	return "|";
}
add_filter('document_title_separator', 'change_separator');

function remove_tagline($title)
{
	if (isset($title['tagline'])) {
		unset($title['tagline']);
	}
	return $title;
}
add_filter('document_title_parts', 'remove_tagline');


/**
 * セキュリティ
 *
 */

/*不要なタグの出力停止*/
remove_action('wp_head', 'wp_generator'); // WordPressのバージョン
remove_action('wp_head', 'wp_shortlink_wp_head'); // 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link'); // ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link'); // 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2); // フィードへのリンク

/* 絵文字スクリプトの削除 */
function disable_emoji()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');

// dns-prefetchを非表示にする
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);
function remove_dns_prefetch($hints, $relation_type)
{
	if ('dns-prefetch' === $relation_type) {
		return array_diff(wp_dependencies_unique_hosts(), $hints);
	}
	return $hints;
}


/* All-in-One WP Migration使用時に指定したフォルダを移行対象から外す
------------------------------------------------------------------- */

add_filter(
	'ai1wm_exclude_themes_from_export',
	function ($exclude_filters) {
		$my_theme = get_template(); //テーマ名を取得
		$exclude_filters[] = $my_theme . 'gulp/node_modules';
		return $exclude_filters;
	}
);
