<!--============ post =================-->
<?php
    // 関連記事
    $termObj = get_the_terms($the_ID, 'post_tag');
    if( $termObj != false ){
        $terms = array();
        foreach($termObj as $_row){
            $terms[] = $_row->name;
        }
        $args = array(
            'post_type' => array('column', 'laboratory', 'special', 'case', 'information'),
            'post__not_in' => array($post->ID),
            'showposts'=>6,
            'orderby' => 'rand'
        );
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => $terms
            ),
        );
        $my_query = new wp_query($args);
        $i = 1;
        if($my_query->have_posts()) {
?>

<h2><span>関連記事はこちら</span></h2>
<section class="postList">
    <?php while ($my_query->have_posts()) { $my_query->the_post(); ?>
        <?php
        // サムネイル
        $img_id = $file_id = get_post_meta($post->ID,'img_thumbnail',true);
        $img_src = "";
        if($img_id){
            $img_src = wp_get_attachment_image_src($img_id, 'archive')[0];
        }
        ?>
        <article class="postNew">
            <div class="photoBox"><a href="<?php echo the_permalink();?>"><img src="<?php echo $img_src ?>"></a></div>
            <div class="postTxtbox">
                <div class="icon-<?php echo get_post_type()?>"><a href="<?php echo the_permalink();?>"><?php echo get_post_type_object(get_post_type())->label;?></a></div>
                <h2 class="postTitle"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
                <time><?php echo get_the_date('Y.m.d')?></time>
            </div>
        </article>
    <?php }; ?>
</section>
<?php
        };
    };
    wp_reset_query();
?>

