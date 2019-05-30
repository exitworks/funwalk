<?php get_header(); ?>
<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　お知らせ</div>
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
                'posts_per_page' => 10,
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
            ?>
                </dl>
            </div>
            <?php
                pagination();
            ?>

        </main>
        <!--============ /main =================-->

        <?php get_sidebar(); ?>

    </div>
</div>

<!--============ footer =================-->
<?php get_footer(); ?>
<!--============ /sidebar =================-->
