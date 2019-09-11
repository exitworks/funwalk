<?php get_header(); ?>

<!--============ maiSlider =================-->

<?php 
//複数キービジ表示にともなうカールセル機能on
$is_carousel = true;

?>

<div class="mainImg">
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
      		<!-- Slides -->
            <?php
                $args = array(
                    'post_type' => 'carousel',
                    'posts_per_page' => 1,
                    'post_status' => array('publish'),
                    'orderby'    => 'date',
                    'order'      => 'DESC',
                );
                query_posts( $args );
                $carousels = array();
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();

                        while(the_repeater_field('loop_carousel'))
                        {
                        	
							$h =  '<div class="swiper-slide">'."\n";

                            if (get_sub_field('loop_carousel_url') != "") {
                                $blank = '_self';
                                if( get_sub_field('loop_carousel_target') ){
                                    $blank = '_blank';
                                }
                                $h .=  '<a href="'. get_sub_field('loop_carousel_url').'" target="'.$blank.'"">'."\n";
                            }

							// 画像
							$img_src_pc = '';
							$img_alt_pc = '';
                            $image = get_sub_field('loop_carousel_pc_img');
                            if( $image["id"] != "" ){
								$img_src_pc = wp_get_attachment_image_src($image['id'], 'full')[0];
								$img_alt_pc = $image["title"];
                            }

							// 画像
							$img_src_sp = '';
							$img_alt_sp = '';
							$image = get_sub_field('loop_carousel_sp_img');
							if( $image["id"] != "" ){
								$img_src_sp = wp_get_attachment_image_src($image['id'], 'full')[0];
								$img_alt_sp = $image['title'];
							}

							if($img_src_pc != '' && $img_src_sp != ''){
								$h .=   '<img src="'.$img_src_pc.'" alt="'.esc_html($img_alt_pc).'" width="100%" class="pcBox">'."\n";
								$h .=   '<img src="'.$img_src_sp.'" alt="'.esc_html($img_alt_sp).'" width="100%" class="spBox">'."\n";
                            }else if($img_src_pc != '' ){
								$h .=   '<img src="'.$img_src_pc.'" alt="'.esc_html($img_alt_pc).'" width="100%">'."\n";
                            }

							if (get_sub_field('loop_carousel_url') != "") {
								$h .=   '</a>'."\n";
							}

							$h .=   '</div>'."\n";
							$carousels[] = $h;
                        };

                    }
                }
                wp_reset_query();
            ?>

			<?php
				echo join("\n", $carousels);
			?>

        </div>

        <?php if (count($carousels)>1): ?>
	        <!-- If we need pagination -->
	        <div class="swiper-pagination"></div>

	        <!-- If we need navigation buttons -->
	        <div class="swiper-button-prev"></div>
	        <div class="swiper-button-next"></div>
        <?php endif ?>

    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {

        <?php if (count($carousels)>1): ?>
            slidesPerView:1,
            loop: true,
			autoplay: true,
            speed: 700,
        <?php else: ?>
            slidesPerView:1,
            loop: false,
			autoplay: true,
            speed: 700,
        <?php endif ?>

            spaceBetween:0,
            centeredSlides : true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });
    </script>
</div>
<!--============ /maiSlider =================-->

<div class="container">
    <div class="contents">

        <!--============ main =================-->
        <main role="main">

            <!--============ news =================-->
            <h2><span>NEWS</span><span class="small">お知らせ</span></h2>
            <div class="news">
                <dl>
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'post_type' => 'information',
                        'posts_per_page' => 3,
                        'paged' => $paged,
                        'post_status' => array('publish'),
                        'orderby'    => 'date',
                        'order'      => 'DESC',
                    );
                    query_posts( $args );
                    if(have_posts()) {
                        while (have_posts()) {
                            the_post();

							$date = get_the_date('Y年m月d日');
							$week = week(get_the_date('w'));
							echo '<dt>'.$date.'（'.$week.'）</dt>';
							echo '<dd>';

							if (get_field('wys_lead') == "" && get_field('txt_link_url') == "") {
								echo get_the_title();
							}else if (get_field('txt_link_url') != "") {
								$blank = '_self';
								if( get_field('chk_link_blank_flag') == 'blank' ){
									$blank = '_blank';
								}
								echo '<a href="'. get_field('txt_link_url').'" target="'.$blank.'"">'.esc_html(get_the_title()).'</a></dd>';
							} else {
								echo '<a href="'.get_permalink().'">'.esc_html(get_the_title()).'</a>';
							}
							echo '</dd>';
                        }
                    }
                    wp_reset_query();
                ?>
                </dl>
                <div class="btnArea">
                    <div class="buttonA"><a href="/information/">一覧を見る</a></div>
                </div>
            </div>

            <!--============ newpost =================-->
            <h2><span>NEW POST</span><span class="small">新着記事一覧</span></h2>
            <section class="postList">
<article class="postNew">
                    <div class="photoBox">
                        <a href="/special/month/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_morning.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-special"><a href="/special/month/">SPECIAL</a></div>
                        <h2 class="postTitle"><a href="/special/month/">FUN+WALK PROJECT MORNING</a></h2>
                        <time>2019.9.12</time>
                    </div>
                </article>
	
				
				
				 <article class="postNew">
                    <div class="photoBox">
                        <a href="/special/app/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_app01.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-special"><a href="/special/app/">SPECIAL</a></div>
                        <h2 class="postTitle"><a href="/special/app/">FUN+WALK アプリ</a></h2>
                        <time>2018.03.01</time>
                    </div>
                </article>
                
                
                <article class="postNew">
                     <div class="photoBox">
                        <a href="/case/"><img src="<?php bloginfo('template_url'); ?>/assets/img/thumb_case.png"></a>
                    </div>
                    <div class="postTxtbox">
                        <div class="icon-case"><a href="/case/">取組事例</a></div>
                        <h2 class="postTitle"><a href="/case/">様々な取組事例をご紹介します</a></h2>
                        <time><?php $lasted_case_id = get_posts("post_type=case&posts_per_page=1")[0]->ID; ?><?php echo get_the_time("Y.m.d",$lasted_case_id) ?></time>
                    </div>
                </article>

				
				
				
				
				

            <?php
                //NEWPOSTから除外する投稿
                $post__not_in   = array();
				$post__not_in[] = get_posts("name=premium_friday&post_type=special")[0]->ID;
				$post__not_in[] = get_posts("name=specialposter&post_type=special")[0]->ID;
				$post__not_in[] = get_posts("name=month&post_type=special")[0]->ID;
                $post__not_in[] = get_posts("name=shima&post_type=special")[0]->ID;
                $post__not_in[] = get_posts("name=app&post_type=special")[0]->ID;
                $args = array(
                    'post_type' => array('column', 'laboratory', 'special'),
                    'posts_per_page' => 9,
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
                <article class="postNew">
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
                wp_reset_query();
            ?>


            </section>

            <!--============ pickup =================-->
<!--             <section class="pickupList">
                <article class="pickup">
                    <a href="/app/">
                        <div class="pickupBox">
                            <div class="pickupImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_app.png"></div>
                            <div class="pickupTxt">
                                <div class="pickupTitle">FUN+WALKアプリ</div>
                                <p>毎日たくさんあるいてオトクなクーポンをGETしよう！<br class="pcBox">
                                    いろんなお店がどしどし参戦中！</p>
                            </div>
                        </div>
                    </a>
                </article> -->
<!--                 <article class="pickup">
                    <a href="/special/fpwstyle">
                        <div class="pickupBox">
                            <div class="pickupImg"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_stylebook.png"></div>
                            <div class="pickupTxt">
                                <div class="pickupTitle">FUN+WALK STYLE</div>
                                <p>どんな格好で歩けばいい？<br class="pcBox">
                                    FUN+WALKオススメコーディネートを徹底解説！</p>
                            </div>
                        </div>
                    </a>
                </article> -->
            </section>
        </main>
        <!--============ /main =================-->

		<?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>

