<?php

// titleタグ --------------------------------------------------------------------------------
function seo_title() {

    $blog_name = get_bloginfo('name');

    if(is_home()) {
		$title = $blog_name . ' | まいにちに「歩く」を足して、ハッピーになろう。';

	}else if (is_search()) {
		$title = '検索結果 | ' . $blog_name;

	}else if (is_tag()) {
		$title = wp_title('｜', false, 'right'). $blog_name;

//	}else if (is_page('app')) {
//	}else if (is_page('committee')) {

	}else if (is_single()) {
		// 投稿タイプ取得
    	$post_type = get_post_type();
		$post_type_name = get_post_type_object($post_type)->label;

		$title = wp_title('｜', false, 'right'). $post_type_name  . ' | ' . $blog_name;

	}else if (is_archive()) {
    	// 投稿タイプ取得
		$post_type = get_post_type();
		$post_type_name = get_post_type_object($post_type)->label;

		// カテゴリ取得
		$term_name = '';
		$category = get_query_var('category');
		if($category != '') {
			$term_name = get_term_by('slug', $category, 'taxonomy_slug_'.$post_type)->name;
		}

		// ページ数取得
		$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;

		if($post_type_name === NULL){
			$title = 'COMING SOON … | ' . $blog_name;
		}else if($term_name != ''){
			$title = $term_name . '（'.$paged.'ページ目） | ' . $post_type_name . ' | ' . $blog_name;
		}else{
			$title = $post_type_name . '（'.$paged.'ページ目） | ' . $blog_name;
		}

	}else{
		$title = wp_title('｜', false, 'right'). $blog_name;
    }
    echo esc_html($title);
}

// og:titleタグ --------------------------------------------------------------------------------
function seo_og_title(){
	seo_title();
}

// meta og:image --------------------------------------------------------------------------------
function seo_image(){
	global $post;
	$og_image = get_bloginfo('template_url') . '/assets/img/ogp.png';

	if(is_home() || is_search() || is_tag() || is_archive()) {
		$image = $og_image;

	}else if (is_single()) {
		$image = $og_image;

		// 画像
		$img_id = $file_id = get_post_meta($post->ID,'img_title',true);
		$img_id_thumb = $file_id_thumb = get_post_meta($post->ID,'img_thumbnail',true);
		if($img_id){
			$img_src = wp_get_attachment_image_src($img_id, 'full')[0];
			if( $img_src != '' ) {
				$image = $img_src;
			}
		} else if ($img_id_thumb) {
			$img_src = wp_get_attachment_image_src($img_id_thumb, 'full')[0];
			if( $img_src != '' ) {
				$image = $img_src;
			}
		}
	}else{
		$image = $og_image;
	}

	echo $image;
}

// meta metakeyword --------------------------------------------------------------------------------
function seo_keywords(){
	global $post;
	$metakeyword = 'スポーツ庁,スポーツ人口,FUN+WALK,歩く,健康,スニーカー通勤,ウォーキング,ビジネスパーソン,官民連携';

	if(is_home() || is_search() || is_tag() || is_archive()) {
		$keyword = $metakeyword;

	}else if (is_single()) {
		$keyword = $metakeyword;

		$_keyword = get_post_meta($post->ID,'txt_metakeyword',true);
		if( $_keyword ){
			$keyword .= ','.$_keyword;
		}
	}else{
		$keyword = $metakeyword;
	}

	echo esc_html($keyword);
}

// meta descriptionタグ --------------------------------------------------------------------------------
function seo_description() {
	global $post;
	$description = '歩くことをもっと楽しく、楽しいことをもっと健康的なものに変えていく『FUN+WALK PROJECT』のポータルサイト。歩く楽しさを伝える「FUN+WALKコラム」や、歩くことの効果をわかりやすく解説する「あるく研究所」など、続々更新中。';

	if(is_home() || is_search() || is_tag() || is_archive()) {
		$desc = $description;

	}else if (is_single()) {
		$desc = $description;

		$meta = get_post_meta($post->ID,'txt_metadescription',true);
		if( $meta ){
			$desc = $meta;
		}else{
			$lead = substr_content(get_post_meta($post->ID,'wys_lead',true));
			if( $lead ) {
				$desc = $lead;
			}
		}
	}

	echo esc_html($desc);
}

/*
 * Descriptionの切り出し
 */
function substr_content($base_str, $len = 120){
    $base_str = preg_replace('!<style.*?>.*?</style.*?>!is', '', $base_str);
    $base_str = preg_replace('!<script.*?>.*?</script.*?>!is', '', $base_str);
    $base_str = preg_replace('/\[.+\]/','', $base_str);
    $base_str = strip_tags($base_str);
    $trim_content = mb_substr($base_str, 0, 120 ,"utf-8");
    $trim_content = str_replace(']]>', ']]&gt;', $trim_content);
    $trim_content = str_replace(array("\r\n", "\r", "\n"), "", $trim_content);
    $trim_content = htmlspecialchars($trim_content);

    if(preg_match("/。/", $trim_content)) { //指定した文字数内にある、最後の「。」以降をカットして表示
        mb_regex_encoding("UTF-8");
        $trim_content = mb_ereg_replace('。[^。]*$', '。', $trim_content);
        $ret_str = $trim_content;
    }else{ //指定した文字数内に「。」が無い場合は、指定した文字数の文章を表示し、末尾に「…」を表示
        $ret_str = $trim_content . '...';
    }
    return $ret_str;
}

/*
 * FB admins/appid
 */
function fb_admins(){
	global $fb_admins;
//	echo $fb_admins;
}
function fb_appid(){
	global $fb_appid;
//	echo $fb_appid;
}