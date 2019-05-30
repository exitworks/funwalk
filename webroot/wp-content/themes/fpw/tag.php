<?php get_header(); ?>

<div class="container">
    <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　注目ワード</div>
    <div class="contents">
        <!--============ main =================-->
        <main>
            <!--============ newpost =================-->
            <h2><span>注目ワード：<?php single_tag_title(); ?></span></h2>
            <section class="postList">
            <?php
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();
						$post_type = get_post_type();

						// サムネイル
						$thumb_id = $file_id = get_post_meta($post->ID,'img_thumbnail',true);
						$thumb_src = "";
						if($thumb_id){
							$thumb_src = wp_get_attachment_image_src($thumb_id, 'archive')[0];
						}

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
                <article class="postNew">
                <?php if( $permalink != ''){?>
                    <div class="photoBox"><a href="<?php echo $permalink; ?>" target="<?php echo $blank?>"><?php if($thumb_src != ''){?><img src="<?php echo $thumb_src?>"><?php } ?></a></div>
                    <div class="postTxtbox">
                        <time><?php echo get_the_date('Y.m.d')?></time>
                        <div class="icon-<?php echo get_post_type()?>"><a href="<?php echo $permalink; ?>" target="<?php echo $blank?>"><?php echo esc_html(get_post_type_object(get_post_type())->label);?></a></div>
                        <h2 class="postTitle"><a href="<?php echo $permalink; ?>" target="<?php echo $blank?>"><?php the_title(); ?></a></h2>
                    </div>
                <?php }else{ ?>
                    <div class="photoBox"><?php if($thumb_src != ''){?><img src="<?php echo $thumb_src?>"><?php } ?></div>
                    <div class="postTxtbox">
                        <time><?php echo get_the_date('Y.m.d')?></time>
                        <div class="icon-<?php echo get_post_type()?>"><?php echo esc_html(get_post_type_object(get_post_type())->label);?></div>
                        <h2 class="postTitle"><?php the_title(); ?></a></h2>
                    </div>
				<?php } ?>
                </article>
            <?php
        			}
		    	}
			?>
                <?php pagination(); ?>
            </section>
        </main>
        <!--============ /main =================-->

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
