<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	// 基本URLを直たたきされた場合
	// ＊　１）リード文があれば、記事詳細ページへリンク
	// ＊　２）外部リンクがあれば、外部リンクへ遷移
    // ＊　３）リード文と外部リンクが無ければ、リンクせず
    // ＊　※　（２）（３）の場合、詳細ページへ直アクセスされたら、４０４表示　または　トップでリダイレクト
	if( get_field('txt_link_url') != "" || (get_field('wys_lead') == "" && get_field('txt_link_url') == "")){
		header("location:/");
		wp_exit();
	}

	// カテゴリ名取得
//	$category = get_term( get_field('rdo_taxonomy_special'), 'taxonomy_slug_special' );

	// 画像
	$img_id = $file_id = get_post_meta($post->ID,'img_title',true);
	$img_src = "";
	if($img_id){
		$img_src = wp_get_attachment_image_src($img_id, 'full')[0];
	}
endwhile; endif; ?>
<?php get_header(); ?>

<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　<a href="/<?php echo esc_html($post_type);?>/">お知らせ</a>　&gt;　<?php the_title(); ?></div>
	<div class="contents">

		<!--============ main =================-->
		<main>

			<!--============ post =================-->
            <h2><span>NEWS</span><span class="small">お知らせ</span></h2>
			<div class="post">
				<div class="postHeader">
                    <div class="postTime"><span class="time"><?php echo get_the_date('Y.m.d')?></span></div>

					<?php get_template_part('templates/content', 'postsns'); ?>

                </div>
				<h1><?php the_title(); ?></h1>
				<?php if ($img_src != ""){?>
					<div class="eyecatch"><img src="<?php echo $img_src ?>" alt="<?php the_title(); ?>"></div>
				<?php } ?>
				<div class="postInner">
					<p><?php echo get_field('wys_lead')?></p>

					<?php get_template_part('templates/content', 'articles'); ?>

					<?php get_template_part('templates/content', 'writer'); ?>

					<?php get_template_part('templates/content', 'tags'); ?>
				</div>
				<div class="btnArea">
					<div class="buttonA"><a href="/<?php echo esc_html($post_type);?>/">お知らせ一覧に戻る</a></div>
				</div>
			</div>

			<?php get_template_part('templates/content', 'recommend'); ?>

		</main>
		<!--============ /main =================-->

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>

