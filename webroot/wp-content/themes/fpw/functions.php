<?php
require_once ( dirname(__FILE__) . '/functions/seo.php' );
require_once ( dirname(__FILE__) . '/functions/search_freeword.php' );

/*
不要な出力を止める
*/
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra',3,0);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//WordPress4.4以降からhead内に挿入されるようになった「Embed」系タグを削除
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('template_redirect', 'rest_output_link_header', 11);

//----------------------------
//ログインしてたら非公開記事、レビュー記事もフロントへ表示
//----------------------------
function parse_query_ex() {
    if (is_user_logged_in()) {
        set_query_var('post_status', 'publish,private,pending');
    }
}
if (!is_admin()){
	add_action('parse_query', 'parse_query_ex');
}

function customTitle($title){
	global $post;
	if ($post->post_status == 'pending'){
		$title = 'レビュー待ち：'.$title;
	}
	return $title;
}
if (!is_admin() && is_user_logged_in()){
	add_filter('the_title','customTitle');
}

/*
 * マイナー アップグレードの自動更新を無効化
 */
add_filter('allow_minor_auto_core_updates', '__return_false');

//----------------------------
//authorページの出力を停止
//----------------------------
function disable_author_archive() {
	if(is_user_logged_in() === false){
		if($_GET['author'] || preg_match('#^/author/.+#', $_SERVER['REQUEST_URI'])){
			wp_redirect(home_url());
			exit;
		}
	}
}
add_action('init', 'disable_author_archive');

//----------------------------
//投稿画面から不要な機能を削除
//管理側：コラム投稿者の場合は、コラムカテゴリ以外のカスタムタクソノミーを使用できなくする
//----------------------------
function remove_post_supports() {
	// デフォルトのカテゴリー選択
	$target_post_type =  array('column', 'laboratory', 'special', 'case', 'information');
	foreach($target_post_type as $_post_type){
		unregister_taxonomy_for_object_type( 'taxonomy_slug_'.$_post_type, $_post_type );
	}

	//管理側：コラム投稿者の場合は、コラムカテゴリ以外のカスタムタクソノミーを使用できなくする
	if ( current_user_can( 'column_user' ) ) {
		if($_SERVER["PHP_SELF"] == "/wp-admin/edit-tags.php"){
			if($_REQUEST["taxonomy"] != "taxonomy_slug_column"){
				wp_die('アクセス権限がありません');
			}
		}
	}

	// Taxonomy Order の制限
	// 設定では、全員に権限をつけているので、ここで管理者・コラム投稿者以外から権限を除外する
	if($_SERVER["PHP_SELF"] == "/wp-admin/edit.php" && $_REQUEST["page"] == "to-interface-post") {
		// 現在のユーザーの権限グループを取得
		global $current_user;
		if( !in_array('administrator', $current_user->roles) && !in_array('column_user', $current_user->roles) ){
			wp_die('アクセス権限がありません');
		}else {
			if ( current_user_can( 'column_user' ) && $_REQUEST["taxonomy"] != "taxonomy_slug_column") {
				wp_die('アクセス権限がありません');
			}
		}
	}
}
add_action( 'admin_init', 'remove_post_supports' );

//----------------------------
// 権限によるメニューの非表示のコントロール
//（基本は、UserRoleEditorで行われるが追加で非表示が必要な分を補足する）
// また、コラム投稿者以外の場合は、接続もとのIPのチェックを行う
//----------------------------
function remove_menus () {
	if ( current_user_can( 'column_user' ) ) {
		global $menu;
		foreach($menu as $_key => $_row){
			if($_row[1] == 'edit_posts'){
				unset($menu[$_key]);
			}
		}
	}

	if ( current_user_can( 'subscriber' ) ) {
		global $menu;
		foreach($menu as $_key => $_row){
				unset($menu[$_key]);
		}
	}

	// コラム投稿者以外の場合は、接続もとのIPのチェックを行う
	// if ( !current_user_can( 'column_user' ) ) {
	// 	switch( $_SERVER['REMOTE_ADDR']){
	// 		case '192.168.14.1':	// vagrant
	// 		case '210.172.0.33':	// xtone
	// 		case '39.110.212.244':	// FQ(tokyo)
	// 		case '203.143.120.222':	// FQ(okinawa)
	// 		case '157.14.255.198':	// ifmore
	// 		case '116.58.177.111':	// EXITWORKS
	// 			break;
	// 		default:
	// 			wp_die('アクセス権限がありません');
	// 	}
	// }
	// 管理者のみIPのチェックを行う
	if ( current_user_can( 'administrator' ) ) {
		switch( $_SERVER['REMOTE_ADDR']){
			case '::1':	    		// localhost
			case '127.0.0.1':	    // localhost
			case '192.168.0.1':	    // localhost
			case '192.168.14.1':	// vagrant
			case '210.172.0.33':	// xtone
			case '39.110.212.244':	// FQ(tokyo)
			case '203.143.120.222':	// FQ(okinawa)
			case '157.14.255.198':	// ifmore
			case '116.58.177.111':	// EXITWORKS
				break;
			default:
				wp_die('アクセス権限がありません');
		}
	}
}
add_action('admin_menu', 'remove_menus');

//----------------------------
//カスタムリライトルール
//----------------------------
function custom_rewrite_rule(){
	add_rewrite_rule('([^/]+)/category/([^/]+)/page/([\d]+)/?$' ,'index.php?post_type=$matches[1]&category=$matches[2]&paged=$matches[3]', 'top');
	add_rewrite_rule('([^/]+)/category/([^/]+)/?$' ,'index.php?post_type=$matches[1]&category=$matches[2]', 'top');
}
add_action( 'init', 'custom_rewrite_rule' );

//----------------------------
//カスタムクエリー値
//----------------------------
function custom_query_vars( $vars ) {
	$array = array( 'category' );
	return array_merge( $array, $vars );
}
add_filter( 'query_vars', 'custom_query_vars');


//----------------------------
//サイト内検索/タグ一覧拡張
//----------------------------
function filter_search( $query ) {
	if ( $query->is_search() && $query->is_main_query() && !is_admin() ) {
		$query->set( 'post_type', array('column', 'laboratory', 'special', 'case', 'information', 'page') );
		$query->set( 'posts_per_page', 10 );
	}else if ( $query->is_tag() && $query->is_main_query() && !is_admin() ) {
		$query->set( 'post_type', array('column', 'laboratory', 'special', 'case', 'information') );
		$query->set( 'posts_per_page', 6 );
	}
}
add_filter( 'pre_get_posts', 'filter_search' );


//----------------------------
//管理側：タグ一覧表示 カラムの定義
//----------------------------
function manage_custom_post_tag($columns) {
	$columns = array(
		'cb'=>'<input type="checkbox" />',
		'name'=>'名前',
		'slug'=>'スラッグ',
		'txt_tab_sort' => 'サイド表示',
		'posts'=>'カウント',
	);
	return $columns;
}
add_filter('manage_edit-post_tag_columns', 'manage_custom_post_tag');

//----------------------------
//管理側：タグ一覧表示 メタ情報の取得
//----------------------------
function add_custom_post_tag_columns($value, $column_name, $term_id){
	switch($column_name){
		case 'txt_tab_sort':
			$value = get_field($column_name, 'post_tag_'.$term_id)?'表示':'非表示';
			break;
	}
	return $value;
}
add_action('manage_post_tag_custom_column', 'add_custom_post_tag_columns', 10, 3);


//----------------------------
//管理側：CPT コラム一覧表示 メタ情報の取得
//管理側：CPT あるく研究所一覧表示 メタ情報の取得
//管理側：CPT SPECIAL一覧表示 メタ情報の取得
//管理側：CPT 取組事例一覧表示 メタ情報の取得
//管理側：CPT お知らせ一覧表示 メタ情報の取得
//----------------------------
function manage_asdcustom_columns($columns) {
	global $post_type;
	if( $post_type == 'information') {
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'タイトル',
			'txt_link_url' => '外部リンクURL',
			'tags' => 'タグ',
			'date' => '日付',
		);
	}else if( $post_type == 'carousel'){
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => 'タイトル',
			'date' => '公開日付',
		);
		return $columns;
	}else{
		$columns = array(
			'cb'=>'<input type="checkbox" />',
			'title' => 'タイトル',
			'img_thumbnail' => 'サムネイル画像',
			'rdo_taxonomy' => 'カテゴリー',
			'tags' => 'タグ',
			'txt_writer_name' => 'ライター名前',
			'author' => '投稿者名',
			'date' => '日付',
		);
	}
	return $columns;
}
add_filter('manage_posts_columns', 'manage_asdcustom_columns');

//----------------------------
//管理側：CPT 一覧表示 メタ情報の取得
//----------------------------
function add_custom_columns($column_name, $post_id) {
	global $post_type;
	switch($column_name){
		case 'img_thumbnail':
			$_id = get_post_meta($post_id,'img_thumbnail',true);
			if($_id){
				$_img_src = wp_get_attachment_image_src($_id, 'thumbnail')[0];
				echo '<img src="'.$_img_src.'" />';
			}
			break;

		case 'rdo_taxonomy':
			$category = get_term( get_field('rdo_taxonomy_'.$post_type), 'taxonomy_slug_'.$post_type );
			if($category){
				echo esc_html($category->name);
			}
			break;

		default:
			echo get_post_meta($post_id, $column_name, true);
			break;
	}
}
add_filter('manage_posts_custom_column', 'add_custom_columns', 10, 2);
add_filter('manage_column_posts_custom_column', 'add_custom_columns', 10, 2);


//----------------------------
//曜日変換
//----------------------------
function week($w){
	$week = ['日','月','火','水','木','金','土'];
	return $week[$w];
}

//----------------------------
//ページネーション定義
//----------------------------
function pagination($pages = '', $class_name='', $range = 4){
	global $paged;
	if(empty($paged)){ $paged = 1;}

	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;//ページ総数
		if(!$pages){ $pages = 1; }
	}

	global $wp_rewrite;
	$paginate_base = get_pagenum_link(1);
	if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
		$paginate_format = '';
		$paginate_base = add_query_arg('paged', '%#%');
	} else {
		$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/').user_trailingslashit('page/%#%/', 'paged');
		$paginate_base .= '%_%';
	}
	echo '<div class="pageNavi">';
	echo paginate_links( array(
		'base' => $paginate_base,
		'format' => $paginate_format,
		'total' => $pages,
		'mid_size' => 5,
		'current' => ($paged ? $paged : 1),
		'type' => 'span',
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
	));
	echo "\n</div>\n";
}
