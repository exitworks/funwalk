<?php
//// 記事詳細繰り返しエリア
while(the_repeater_field('loop_article')){
    // 見出し表示
    if( get_sub_field('txt_heading') != "" ){
        echo '<h3>'.esc_html(get_sub_field('txt_heading')).'</h3>';
    }
    // 画像
    $image = get_sub_field('img_photo');
    if( $image["id"] != "" ){
        $img_src = wp_get_attachment_image_src($image['id'], 'full')[0];
        echo '<img src="'.$img_src.'" alt="'.esc_html(get_sub_field('txt_caption')).'">';
        if (get_sub_field('txt_caption')){
	        echo '<p class="caption">'.esc_html(get_sub_field('txt_caption')).'</p>';
        }
   }
    echo '<p>'.get_sub_field('wys_body').'</p>';
};
// 記事詳細 0～10件 ↑↑
?>
