<?php

/**
 * メインクエリ管理
 *
 */
function my_pre_get_posts($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_home()) {
    $query->set('posts_per_page', 3);
  }
}
add_action('pre_get_posts', 'my_pre_get_posts');
/**
 * wp_is_mobileをスマホだけに設定
 *
 */
function is_mobile()
{
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/' . implode('|', $useragents) . '/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/**
 * pタグとbrタグの自動挿入を解除
 *
 */
remove_filter('the_content', 'wpautop');

/**
 * post制限
 *
 */
add_action('init', 'remove_block_editor_options');
function remove_block_editor_options()
{
  remove_post_type_support('post', 'author');
  remove_post_type_support('post', 'post-formats');
  remove_post_type_support('post', 'revisions');
  // remove_post_type_support('post', 'thumbnail');
  remove_post_type_support('post', 'excerpt');
  remove_post_type_support('post', 'comments');
  remove_post_type_support('post', 'trackbacks');
  remove_post_type_support('post', 'custom-fields');
  // unregister_taxonomy_for_object_type('category', 'post');
  unregister_taxonomy_for_object_type('post_tag', 'post');
}

//カスタム投稿タイプのスラッグを「{カスタム投稿タイプ}-ID」で採番
function custom_auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if ($post_type == 'post') {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'custom_auto_post_slug', 10, 4);

/* no_img */
function get_the_image()
{
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]+\>/i', $post->post_content, $matches);

  // ここで$matches[1]が存在し、かつ$matches[1][0]も存在するかを確認
  if (isset($matches[1]) && isset($matches[1][0])) {
    $first_img = $matches[1][0];
  } else {
    // 記事内で画像がなかったときのためのデフォルト画像を指定
    $first_img = DIRE . '/assets/img/common/no_img.png';
  }
  return $first_img;
}


// ブロックエディタ制限
add_filter('allowed_block_types', 'custom_allowed_block_types');
function custom_allowed_block_types($allowed_block_types)
{
  $allowed_block_types = array(
    // 一般ブロック
    'core/paragraph', // 段落
    'core/heading', // 見出し
    'core/image', // 画像
    // 'core/quote', // 引用
    'core/gallery', // ギャラリー
    'core/list', // リスト
    // 'core/audio', // 音声
    // 'core/cover', // カバー
    // 'core/file', // ファイル
    // 'core/video', // 動画

    // フォーマット
    // 'core/code', // ソースコード
    // 'core/freeform', // クラシック
    'core/html', // カスタムHTML
    // 'core/preformatted', // 整形済み
    // 'core/pullquote', // プルクオート
    // 'core/table', // テーブル
    // 'core/verse', // 詩

    // レイアウト要素
    // 'core/buttons', // ボタン
    // 'core/button', // ボタン
    'core/columns', // カラム
    // 'core/media-text', // メディアと文章
    // 'core/more', // 続きを読む
    // 'core/nextpage', // 改ページ
    // 'core/separator', // 区切り
    'core/spacer', // スペーサー

    // ウィジェット
    // 'core/shortcode', // ショートコード
    // 'core/archives', // アーカイブ
    // 'core/categories', // カテゴリー
    // 'core/latest-comments', // 最新のコメント
    // 'core/latest-posts', // 最新の記事

    //埋め込み
    // 'core/embed', // 埋め込み
    // 'core-embed/youtube', // YouTube
  );
  return $allowed_block_types;
}
