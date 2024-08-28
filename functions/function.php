<?php

/**
 * ページネーション
 *
 */
function pagination($class, $pages = '', $range = 1)
{
	$showitems = ($range * 2) + 1;

	global $paged; //現在のページの値
	if (empty($paged)) $paged = 1; //デフォルトのページ
	if ($paged == 1) $range = 2;
	if ($paged == 2) $range = 1;

	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages; //全ページ数を取得
		if (!$pages) { //全ページ数が空の場合は、1にする
			$pages = 1;
		}
	}
?>
	<?php if (1 != $pages) : ?>
		<div class='c-pager <?php echo $class ?>'>
			<a href="<?php echo get_pagenum_link($paged - 1) ?>" class="c-pager__button c-pager__button--prev<?php if ($paged == 1) { ?> c-pager__button--none<?php } ?>"></a>
			<ul class='c-pager__list'>
				<?php
				for ($i = 1; $i <= $pages; $i++) {
					if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				?>
						<li class='c-pager__list-item<?php if ($paged == $i) { ?> is-current<?php } ?>'>
							<a href="<?php echo get_pagenum_link($i) ?>" class='c-pager__list-link'><?php echo $i ?></a>
						</li>
				<?php
					}
				} ?>
			</ul>
			<a href="<?php echo get_pagenum_link($paged + 1) ?>" class="c-pager__button c-pager__button--next<?php if ($paged > $pages - 1) { ?> c-pager__button--none<?php } ?>"></a>
		</div>
<?php
	endif;
}


// コンタクトフォームバリデーション
// ふりがな
function custom_wpcf7_validate_kana($result,$tag){

	$tag = new WPCF7_Shortcode($tag);
	$name = $tag->name;
	$value = isset($_POST[$name])?trim(wp_unslash(strtr((string)$_POST[$name],"\n", " "))): "";

	if($name === "your-ruby00"){
		if(!preg_match("/^[ぁ-ん]+$/u", $value)){
			$result->invalidate( $tag,"平仮名で入力してください。");
		}
	}
	if($name === "your-ruby01"){
		if(!preg_match("/^[ぁ-ん]+$/u", $value)){
			$result->invalidate( $tag,"平仮名で入力してください。");
		}
	}
    return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);



//functions.phpに以下を追記。
add_action('wp_footer', 'redirect_to_thanks_page');
 
function redirect_to_thanks_page() {
 
  //トップページのurlを取得
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
 
          //"/contact"以下は送信完了ページのurlに書き換える
          location = '{$homeUrl}/contact/complete';
      }, false );
    </script>
  EOD;
}