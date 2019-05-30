<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	// カテゴリ名取得
	$category = get_term( get_field('rdo_taxonomy_laboratory'), 'taxonomy_slug_laboratory' );

	// 画像
	$img_id = $file_id = get_post_meta($post->ID,'img_title',true);
	$img_src = "";
	if($img_id){
		$img_src = wp_get_attachment_image_src($img_id, 'full')[0];
	}
endwhile; endif; ?>

<!--============ /header =================-->
<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　<a href="/<?php echo esc_html($post_type);?>/">あるく研究所</a>　&gt;　<?php the_title(); ?></div>
    <div class="contents">

        <!--============ main =================-->
        <main>

            <!--============ post =================-->
            <h2><span>あるく研究所</span><span class="small">「歩く」ことの効果をわかりやすく解説します。</span></h2>
            <div class="post">
                <div class="postHeader">
					<?php if($category->name != ""){?>
                        <div class="postCategory"><span class="icon-column"><?php echo esc_html($category->name) ?></span><span class="time"><?php echo get_the_date('Y.m.d')?></span></div>
					<?php }else{?>
                        <div class="postTime"><span class="time"><?php echo get_the_date('Y.m.d')?></span></div>
					<?php }?>

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
                    <div class="buttonA"><a href="/<?php echo esc_html($post_type);?>/">あるく研究所一覧に戻る</a></div>
                </div>
            </div>

			<?php get_template_part('templates/content', 'recommend'); ?>

    </main>
    <!--============ /main =================-->

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>
