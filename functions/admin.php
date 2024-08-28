<?php

/**
 * ログイン画面のロゴ変更
 *
 */
// function login_logo()
// {
// 	echo '<style type="text/css">.login h1 a {background-image: url(' . get_template_directory_uri() . '/assets/img/common/site_logo.svg);width:293px;height:93px;background-size:contain;}</style>';
// }
// add_action('login_head', 'login_logo');

/**
 * アーカイブタイトル書き換え
 *
 */

add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');
function Change_menulabel()
{
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name . '一覧';
	$submenu['edit.php'][10][0] = /*'新しい'.*/ $name . 'の追加';
}
function Change_objectlabel()
{
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name . 'の追加';
	$labels->edit_item = $name . 'の編集';
	$labels->new_item = '新規' . $name;
	$labels->view_item = $name . 'を表示';
	$labels->search_items = $name . 'を検索';
	$labels->not_found = $name . 'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}

//投稿にアーカイブを持たせる
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; // ページ名
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * 不要機能非表示
 *
 */
/* 管理メニュー */
add_action("admin_menu", "unset_menu");
function unset_menu()
{
	global $menu;
	// unset($menu[5]); //投稿メニュー
	unset($menu[25]); //コメント
	if (current_user_can('author')) {
		unset($menu[2]);	// ダッシュボード
		remove_menu_page('wpcf7');
		unset($menu[70]); //プロフィール
		unset($menu[75]); //ツール
	}
	global $submenu;
	// unset($submenu['edit.php'][15]); // カテゴリー
	unset($submenu['edit.php'][16]); // タグ
}

add_action('admin_bar_menu', 'my_remove_adminbar_menu', 201);

function my_remove_adminbar_menu($wp_admin_bar)
{
	$wp_admin_bar->remove_menu('comments');     // コメント
	$wp_admin_bar->remove_menu('new-content');  // 新規
	$wp_admin_bar->remove_node('edit-profile'); // プロフィール編集
}

/* クイック編集の先頭に固定表示を非表示 */
function custom_hidden_quick_page_sticky()
{
?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".inline-edit-col-right .inline-edit-group:eq(1) label:eq(1)").css("display", "none");
		});
	</script>
<?php
}
add_action('admin_head-edit.php', 'custom_hidden_quick_page_sticky');

/* ブログのトップに固定を非表示 */
function custom_hidden_post_page_sticky()
{
?>
	<style type="text/css">
		.edit-post-post-status .components-panel__row:nth-of-type(3) {
			display: none !important;
		}
	</style>
<?php
}
add_action('admin_print_styles-post.php', 'custom_hidden_post_page_sticky');

//「新規投稿の追加」で表示される「ブログのトップに固定」「レビュー待ち」を非表示
function custom_hidden_postnew_page_sticky()
{
?>
	<style type="text/css">
		.edit-post-post-status .components-panel__row:nth-of-type(n+3) {
			display: none !important;
		}
	</style>
<?php
}
add_action('admin_print_styles-post-new.php', 'custom_hidden_postnew_page_sticky');
