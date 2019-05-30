<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?php seo_description(); ?>">
    <meta name="keywords" content="<?php seo_keywords(); ?>">
    <title><?php seo_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/fpw/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/webview-overwrite.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.autopager-1.0.0.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/webview.js"></script>

    <script>
    jQuery(function() {
        var maxpage = <?php echo $wp_query->max_num_pages; ?>;
        $.autopager({
            autoLoad: false,
            content: '.postNew',
            link: '.ajaxLoad a',
            load: function(current, next){
                if( current.page >= maxpage ){ $('.ajaxLoad').hide(); }
            }
        });
        $('.ajaxLoad a').click(function() {
            $.autopager('load');
            return false;
        });
    });
    </script>
    
    <?php wp_head(); ?>
</head>
<body id="pageTop" class="webview">

    <nav id="webviewMenu">
        <div class="click">カテゴリ選択</div>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/column/">FUN+WALKコラム</a></li>
            <li><a href="/laboratory/">あるく研究所</a></li>
            <!-- <li><a href="/special/">SPECIAL</a></li> -->
            <li><a href="/case/">取組事例</a></li>
        </ul>
    </nav>
