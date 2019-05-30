<?php get_header(); ?>
<?php get_template_part('templates/nav-webview'); ?>

<div class="container">
    <div class="contents">

        <!--============ main =================-->
        <main role="main">

            <!--============ newpost =================-->
            <section id="article-list" class="postList">
				<article class="postNew">
                    <div class="photoBox">
                        <a href="/special/month/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_week.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-special"><a href="/special/month/">SPECIAL</a></div>
                        <h2 class="postTitle"><a href="/special/month/">まいにちに「歩く」を足して、ハッピーになろう。FUN+WALK月間（10/01-10/31）</a></h2>
                        <time>2018.10.01</time>
                    </div>
                </article>

			<article class="postNew">
                    <div class="photoBox">
                        <a href="/special/ambassador/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_ambassador.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-special"><a href="/special/ambassador/">SPECIAL</a></div>
                        <h2 class="postTitle"><a href="/special/ambassador/">「FUN+WALK PROJECT」アンバサダーのご紹介</a></h2>
                        <time>2018.10.01</time>
                    </div>
                </article>

				<article class="postNew">
                    <div class="photoBox">
                        <a href="/special/specialposter/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_download.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-special"><a href="/special/specialposter/">SPECIAL</a></div>
                        <h2 class="postTitle"><a href="/special/specialposter/">FUN+WALK月間のスペシャルポスターを公開中！</a></h2>
                        <time>2018.10.01</time>
                    </div>
                </article>
	
				
				
            <?php
                //NEWPOSTから除外する投稿
                $post__not_in   = array();
				$post__not_in[] = get_posts("name=premium_friday&post_type=special")[0]->ID;
				$post__not_in[] = get_posts("name=specialposter&post_type=special")[0]->ID;
				$post__not_in[] = get_posts("name=ambassador&post_type=special")[0]->ID;
				$post__not_in[] = get_posts("name=month&post_type=special")[0]->ID;
                $post__not_in[] = get_posts("name=app&post_type=special")[0]->ID; //アプリの中でアプリ紹介は不要なので除外
                $post__not_in[] = get_posts("name=shima&post_type=special")[0]->ID; //PCは個別テーマ、Webview用テーマは無いため除外
                $post__not_in[] = get_posts("name=fpwstyle&post_type=special")[0]->ID; //PCは個別テーマ、Webview用テーマは無いため除外
                $args = array(
                    'post_type' => array('column', 'laboratory', 'case', 'special'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'post__not_in' => $post__not_in,
                    'post_status' => array('publish'),
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                );

                query_posts( $args );
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();

                        // サムネイル
                        $thumb_id = $file_id = get_post_meta($post->ID,'img_thumbnail',true);
                        $thumb_src = "";
                        if($thumb_id){
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'archive')[0];
                        }
            ?>
                <article class="postNew <?php echo get_post_type_object(get_post_type())->name;?>">
                    <div class="photoBox">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_src; ?>"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-<?php echo get_post_type()?>"><a href="<?php the_permalink(); ?>"><?php echo get_post_type_object(get_post_type())->label;?></a></div>
                        <h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <time><?php echo get_the_date('Y.m.d')?></time>
                    </div>
                </article>
            <?php
                    }
                }
            ?>
            </section>

    </div>
</div>


<?php get_footer(); ?>

