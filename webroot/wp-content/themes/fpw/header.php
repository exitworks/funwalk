<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?php seo_description(); ?>">
    <meta name="keywords" content="<?php seo_keywords(); ?>">
    <meta property="og:description" content="<?php seo_description(); ?>">
    <meta property="og:title" content="<?php seo_og_title(); ?>">
    <meta property="og:image" content="<?php seo_image()?>">
    <meta property="og:url" content="https://funpulswalk.jp/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php seo_og_title(); ?>">
    <meta property="fb:admins" content="<?php fb_admins(); ?>">
    <meta property="fb:app_id" content="<?php fb_appid(); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="<?php seo_og_title(); ?>">
    <meta name="twitter:description" content="<?php seo_description(); ?>">
    <meta name="twitter:image:src" content="<?php seo_image()?>">
    <title><?php seo_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/img/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/smoothScroll.js"></script>

	<?php //tracking_tag_head_suffix(); ?>

	<?php wp_head(); ?>
</head>
<body id="pageTop">
    <!-- pc header-->
    <div class="pcBox">
        <header>
            <h1 class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" width="231" height="37" alt="FUN+WALK PROJECT"></a></h1>
            <ul class="snsBox">
                <li>
                <a href="http://twitter.com/share?url=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>&text=<?php echo bloginfo( 'name' ); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_twitter.png">
                </a></li>
                <li>
                <a title="facebookでシェアする" href="http://www.facebook.com/sharer.php?u=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_facebook.png">
                </a></li>
                <li>
                <a href="https://plus.google.com/share?url=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_googleplus.png">
                </a></li>
            </ul>
            <!-- <div class="kyougi"><a href="http://funpluswalk.go.jp/" target="_blank">FUN+WALK PROJECT推進協議会 <i class="fa fa-external-link" aria-hidden="true"></i></a></div> -->
            <div class="btn-download"><a  href="http://funpluswalk.go.jp/entry.html" target="_blank">ロゴマークダウンロードはこちら <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            <div class="searchBox">
                <form name="searchform" id="searchform" method="get" action="/">
                    <input id="search" type="text" name="s">
                    <input id="submit" type="submit"  value="&#xf002;" onfocus="this.blur();" >
                </form>
            </div>
        </header>
        <nav id="globalNav">
            <ul>
                <li><a href="/about/">FUN+WALK PROJECTとは</a></li>
                <li><a href="/information/">お知らせ</a></li>
                <li><a href="/column/">FUN+WALKコラム</a></li>
                <li><a href="/laboratory/">あるく研究所</a></li>
                <li><a href="/special/">SPECIAL</a></li>
                <li><a href="/case/">取組事例</a></li>
                <li><a href="/special/app/">FUN+WALKアプリ</a></li>
                <!-- <li><a href="/committee">FUN+WALK PROJECT普及実行委員会</a></li> -->
            </ul>
        </nav>
    </div>

    <!-- sp header-->
    <div class="spBox">
        <header>
            <h1 class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo02.png" width="231" height="37" alt="FUN+WALK PROJECT"></a></h1>
            <a id="menuButton"><span></span> <span></span> <span></span></a> </header>
        <nav id="globalNav">
            <ul>
                <li><a href="/about/">FUN+WALK PROJECTとは</a></li>
                <li><a href="/information/">お知らせ</a></li>
                <li><a href="/column/">FUN+WALKコラム</a></li>
                <li><a href="/laboratory/">あるく研究所</a></li>
                <li><a href="/special/">SPECIAL</a></li>
                <li><a href="/case/">取組事例</a></li>
                <li><a href="/special/app/">FUN+WALKアプリ</a></li>
                <!-- <li><a href="/committee/">FUN+WALK PROJECT普及実行委員会</a></li> -->
            </ul>
            <!-- <div class="kyougi"><a href="http://funpluswalk.go.jp/" target="_blank">FUN+WALK PROJECT推進協議会 <i class="fa fa-external-link" aria-hidden="true"></i></a></div> -->
            <div class="btn-download"><a href="http://funpluswalk.go.jp/entry.html" target="_blank">ロゴマークダウンロードはこちら <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            <ul class="snsBox">
                <li>
                <a href="http://twitter.com/share?url=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>&text=<?php echo bloginfo( 'name' ); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_twitter_sp.png">
                </a></li>
                <li>
                <a title="facebookでシェアする" href="http://www.facebook.com/sharer.php?u=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_facebook_sp.png">
                </a></li>
                <li>
                <a href="https://plus.google.com/share?url=<?php echo("https://" . $_SERVER["HTTP_HOST"]); ?>" target="_blank" rel="nofollow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_googleplus_sp.png">
                </a></li>
            </ul>
        </nav>
        <div class="searchBox">
            <form name="searchform" id="searchform" method="get" action="/">
                <input id="search" type="text" name="s">
                <input id="submit" type="submit"  value="&#xf002;" >
            </form>
        </div>
    </div>
    <!--============ /header =================-->
