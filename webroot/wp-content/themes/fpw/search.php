<?php get_header(); ?>

<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　検索</div>
    <div class="contents">
        <!--============ main =================-->
        <main role="main">

            <!--============ news =================-->
            <h2><span>検索結果：<?php the_search_query() ?></span></h2>
            <div class="searchResult">
                <dl>
                <?php
                    if(have_posts()) {
                        while (have_posts()) {
                            the_post();
                            $post_type = get_post_type();

							$permalink = '';
							$blank = '';
                            if($post_type=='information'){
								if (get_field('wys_lead') == "" && get_field('txt_link_url') == "") {
									$permalink = '';
								}else if (get_field('txt_link_url') != "") {
									$blank = '_self';
									if( get_field('chk_link_blank_flag') == 'blank' ){
										$blank = '_blank';
									}
									$permalink = get_field('txt_link_url');
								} else {
									$permalink = get_permalink();
								}
                            }else{
								$permalink = get_permalink();
                            }
                ?>
                <?php if( $post_type == 'page'){?>
                    <dt>
                        <div class="icon-<?php echo esc_html($post_type=='information'?'news': $post_type);?>">&nbsp;</div>
                    </dt>
                    <dd><a href="<?php echo $permalink; ?>" target="<?php echo $blank?>"><?php the_title(); ?></a></dd>
                <?php }else if( $permalink != ''){?>
                    <dt>
                        <div class="icon-<?php echo esc_html($post_type=='information'?'news': $post_type);?>">
                            <a href="/<?php echo $post_type; ?>/" target="<?php echo $blank?>"><?php echo esc_html(get_post_type_object($post_type)->label);?></a>
                        </div>
                    </dt>
                    <dd><a href="<?php echo $permalink; ?>" target="<?php echo $blank?>"><?php the_title(); ?></a></dd>
                <?php }else{ ?>
                    <dt>
                        <div class="icon-<?php echo esc_html($post_type=='information'?'news': $post_type);?>">
                            <a href="/<?php echo $post_type; ?>/" target="<?php echo $blank?>"><?php echo esc_html(get_post_type_object($post_type)->label);?></a>
                        </div>
                    </dt>
                    <dd><?php the_title(); ?></dd>
                <?php } ?>
                <?php
                        }
                    }
                ?>
                </dl>
            </div>
            <?php pagination(); ?>
        </main>
        <!--============ /main =================-->

	  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
