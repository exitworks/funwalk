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
    <div class="contents">

        <!--============ main =================-->
        <main role="main">

            <!--============ newpost =================-->
            <?php if (( get_post_type() == 'case')): ?>
                <h2><span>取組事例</span><span class="small">FUN+WALK PROJECTに賛同している企業・団体や<br class="spBox">個人の取組をご紹介します。</span></h2>
                <div class="mainImg2nd"><img src="<?php echo home_url(); ?>/wp-content/themes/fpw/assets/img/main_case.png"></div>

            <?php elseif (( get_post_type() == 'column')): ?>
                <h2><span>FUN+WALKコラム</span><span class="small">歩く楽しさを伝えるコラム、続々更新中</span></h2>
                <div class="mainImg2nd"><img src="<?php echo home_url(); ?>/wp-content/themes/fpw/assets/img/main_column.png"></div>

            <?php elseif (( get_post_type() == 'laboratory')): ?>
                <h2><span>あるく研究所</span><span class="small">「歩く」ことの効果をわかりやすく解説します。</span></h2>
                <div class="mainImg2nd"><img src="<?php echo home_url(); ?>/wp-content/themes/fpw/assets/img/main_laboratory.png"></div>

            <?php elseif (( get_post_type() == 'special')): ?>
                <h2><span>SPECIAL</span><span class="small">「FUN+WALK」がお届けするスペシャル企画です。</span></h2>
                <div class="mainImg2nd"><img src="<?php echo home_url(); ?>/wp-content/themes/fpw/assets/img/main_special.png"></div>
            <?php endif; ?>


            <h3 class="ttl-b">記事一覧</h3>
            <section class="postList">
            <?php
              if(have_posts()) {

                global $wp_query;
                if ($wp_query->query["post_type"] == "special") {
                  $post_id = get_posts("name=fpwstyle&post_type=special");
                  $args = array_merge( $wp_query->query, array('post__not_in' => array($post_id[0]->ID)) );
                  query_posts( $args );
                }

                while (have_posts()) {
                  the_post();

                  // カテゴリ名取得
                  $category = get_term( get_field('rdo_taxonomy_case'), 'taxonomy_slug_case' );

                  // サムネイル
                  $thumb_id = $file_id = get_post_meta($post->ID,'img_thumbnail',true);
                  $thumb_src = "";
                  if($thumb_id){
                      $thumb_src = wp_get_attachment_image_src($thumb_id, 'archive')[0];
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
            <?php } ?>
            
              <div class="ajaxLoad textLink"><?php next_posts_link('次の記事を表示', 0); ?></div>
            <?php } else { ?>
              <p class="comingsoon">COMING SOON …</p>
            <?php } ?>

        </section>
    </main>
    <!--============ /main =================-->


  </div>
</div>

<?php get_footer(); ?>
