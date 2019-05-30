<?php
// カテゴリー一覧の取得
$custom_terms_argv = array(
	'orderby'     =>  'term_order',
	'hide_empty'  =>  false
);
$custom_terms = get_terms('taxonomy_slug_'.get_post_type(), $custom_terms_argv);
if(count($custom_terms) > 0 && !isset($custom_terms->errors)){
?>
    <div class="subNav">
        <ul>
            <?php
            foreach($custom_terms as $custom_term){
                echo '<li><a href="/'.get_post_type().'/category/'.esc_html($custom_term->slug).'/">'.esc_html($custom_term->name).'</a></li>';
            }
            ?>
        </ul>
    </div>
<?php
}
?>
