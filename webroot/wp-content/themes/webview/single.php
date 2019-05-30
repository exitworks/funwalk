<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    // カテゴリ名取得
    $category = get_term( get_field('rdo_taxonomy_column'), 'taxonomy_slug_column' );

    // 画像
    $img_id = $file_id = get_post_meta($post->ID,'img_title',true);
    $img_src = "";
    if($img_id){
        $img_src = wp_get_attachment_image_src($img_id, 'full')[0];
    }
endwhile; endif; ?>

<!--============ /header =================-->
<div class="container">

    <div class="contents">

        <!--============ main =================-->
        <main>

            <!--============ post =================-->
            <div class="post">
                <div class="postHeader">
                    <div class="postCategory">
                        <span class="icon-<?php echo get_post_type( $label ); ?>"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span>
                        <span class="time"><?php echo get_the_date('Y.m.d')?></span>
                    </div>

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

                </div>
                <div class="btnArea">
                    <div class="buttonA"><a href="http://funpluswalk.go.jp/" target="_blank">FUN+WALK PROJECT<br>ポータルサイトへGO!</a></div>
                    <div class="textLink"><a href="/">一覧へ戻る</a></div>
                </div>
            </div>


    </main>
    <!--============ /main =================-->


  </div>
</div>

<?php get_footer(); ?>
