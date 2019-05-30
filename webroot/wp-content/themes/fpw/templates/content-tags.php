<?php
$termObj = get_the_terms($the_ID, 'post_tag');
if( $termObj != false ) {
?>
<!-- tag -->
<div class="postTag">
    <span>関連するワード : </span>
    <?php
    // 関連するワード
    foreach ($termObj as $_row) {
        echo '<a href="'.get_tag_link($_row->term_id).'">' . esc_html($_row->name) . '</a>';
    }
    ?>
</div>
<?php
}
?>
