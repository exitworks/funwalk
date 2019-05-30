<div class="postSns">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <ul>
        <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
        <li>
            <div class="fb-share-button" data-href="<?php echo("https://" . $_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']); ?>" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffunpluswalk.go.jp&amp;src=sdkpreparse">シェア</a></div>
        </li>
        <li>
            <div class="g-plusone" data-annotation="inline" data-width="300"></div>
        </li>
    </ul>

</div>
