<?php
// ライター画像
$writer_img_id = get_post_meta($post->ID,'img_writer',true);
$writer_img_src = "";
if($writer_img_id){
	$writer_img_src = wp_get_attachment_image_src($writer_img_id, 'full')[0];
}
?>
<?php if( get_field('txt_writer_name') != '' ):?>
<!-- writer -->
<div class="writerBox">
    <div class="writerTitle">WRITER</div>
    <div class="writerInner">
        <div class="writerLeft"><img src="<?php echo $writer_img_src ?>" width="122" height="122"></div>
        <div class="writerRight">
            <div class="writerName"> <?php echo esc_html(get_field('txt_writer_name'))?><span><?php echo esc_html(get_field('txt_writer_title'))?></span> </div>
            <p><?php echo get_field('txt_writer_profile')?></p>
        </div>
    </div>
</div>
<?php endif;?>