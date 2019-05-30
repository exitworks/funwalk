<?php
// リクエストパラメータにカテゴリの指定がある場合、
// 不正な値ではないかのチェック
$category = get_query_var( 'category' );
if($category != '') {
	$term_id = get_term_by('slug', $category, 'taxonomy_slug_case')->term_id;
	if (!$term_id) {
		header('HTTP/1.0 404 Not Found');
		header('location:/404.php');
		exit();
	}
}?>
<?php get_header(); ?>
<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　取組事例</div>
    <div class="contents">

        <!--============ main =================-->
        <main role="main">

            <!--============ newpost =================-->
            <h2><span>取組事例</span><span class="small">FUN+WALK PROJECTに賛同している企業・団体や<br class="spBox">個人の取組をご紹介します。</span></h2>
            <div class="mainImg2nd"><img src="<?php bloginfo('template_url'); ?>/assets/img/main_case.png" width="913" height="210"></div>

            <?php get_template_part('templates/content', 'terms_navi'); ?>

            <h3 class="ttl-b">記事一覧</h3>
            <section class="postList">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                $args = array(
                    'post_type' => 'case',
                    'posts_per_page' => 12,
                    'paged' => $paged,
                    'post_status' => array('publish'),
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                );

                // カテゴリを検索条件に追加
                if($category != '' && $term_id){
                    $args['meta_key'] = 'rdo_taxonomy_case';
                    $args['meta_value'] = $term_id;
                }

                query_posts( $args );
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();

                        // カテゴリ名取得
                        $category = get_term( get_field('rdo_taxonomy_case'), 'taxonomy_slug_case' );

                        // サムネイル
                        $thumb_id = $file_id = get_post_meta($post->ID,'img_thumbnail',true);
                        $thumb_src = "";
                        if($thumb_id){
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'archive')[0];
                        } else {
                            $thumb_src = get_stylesheet_directory_uri()."/assets/img/noimg.png";
                        }
            ?>
                <article class="postNew">
                    <div class="photoBox">
                        <a href="<?php the_permalink(); ?>"><?php if($thumb_src != ''){?><img src="<?php echo $thumb_src?>"><?php } ?></a>
                    </div>
                    <div class="postTxtbox">
                        <?php if($category->name != ""){?>
                            <div class="icon-case"><a href="/case/category/<?php echo esc_html($category->slug)?>/"><?php echo esc_html($category->name) ?></a></div>
                        <?php } ?>
                        <h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <time><?php echo get_the_date('Y.m.d')?></time>
                    </div>
                </article>
            <?php
                    }
                } else {
                    ?>
                    <p class="comingsoon">COMING SOON …</p>
                    <?php 
                }

                pagination();
            ?>
        </section>
    </main>
    <!--============ /main =================-->

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>
