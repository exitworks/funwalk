
<!--============ sidebar =================-->
<div id="sidebar">

    <!--============ bannerArea =================-->
    <div class="bannerArea">
        <ul>
        

        
        <li><a href="/special/app/">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_apli_pc.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_apli.png" width="214" height="100"></div>
            </a></li>
            
            <li><a href="/posterdl/">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_poster_pc.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_poster.png" width="214" height="100"></div>
            </a></li>
            
            <li><a href="/special/fpwstyle">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_fwstyle_pc.png" width="214" height="100"></div>
            <div class="spBox">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/banner_fwstyle.png" width="214" height="100"></div>
            </a></li>
			
            <li><a href="https://krs.bz/walkjp/m?f=10">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_torikumi_pc.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_torikumi.png" width="214" height="100"></div>
            </a></li>
          
            
        </ul>
    </div>

    <!--============ tag =================-->
    <h3 class="ttl-a"><i class="fa fa-tags" aria-hidden="true"></i> 注目ワード</h3>
    <div class="tagcloud">
    <?php
        $posttags = get_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
    			$value = get_field('txt_tab_sort', 'post_tag_'.$tag->term_id);
    			if($value != ''){
					echo '<a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> ';
                }
            }
        }
    ?>
    </div>

    <!--============ bannerArea =================-->
    <div class="bannerArea" style="margin-top: 30px">
        <ul>
        <li><a href="http://www.asahiinryo.co.jp/kenkochallenge/" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/Kenko_Challenge.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/Kenko_Challenge.png" width="214" height="100"></div>
            </a></li>
        
          <li><a href="https://member.kao.com/jp/plaza/genki/?cidk=fw_180928" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_kaou.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_kaou.png" width="214" height="100"></div>
            </a></li>
            
            <!--<li><a href="https://www.marunouchi-event.com/ekiden2018/pc/" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_ekiden.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_ekiden.png" width="214" height="100"></div>
            </a></li>-->
            
            
            <li><a href="http://www.mext.go.jp/sports/" target="_blank">
            <div class="pcBox"><img src="https://funpluswalk.jp/wp-content/uploads/2018/02/sportsagency_logo_jpsite.png" width="214" height="100"></div>
            <div class="spBox"><img src="https://funpluswalk.jp/wp-content/uploads/2018/02/sportsagency_logo_jpsite.png" width="214" height="100"></div>
            </a></li>
			
			
			 <li><a href="http://www.mext.go.jp/sports/b_menu/sports/mcatetop08/list/1410259.htm?fbclid=IwAR3jJOXBR0rGz7EDaME3MA8AqrKj2amNvvxH90_cbQcdMhycNf4e0kAN0Os" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_sdgs.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_sdgs.png" width="214" height="100"></div>
            </a></li>
			
            
             <li><a href="http://www.smartlife.go.jp/" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_smartlife_pc.jpg" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_smartlife.jpg" width="214" height="100"></div>
            </a></li>
			
			
			<li><a href="https://www.walking.or.jp/" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_walking.png" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_walking.png" width="214" height="100"></div>
            </a></li>
            
            <li><a href="https://michi100sen.jp/" target="_blank">
            <div class="pcBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_sinarukumichi_pc.jpg" width="214" height="100"></div>
            <div class="spBox"><img src="<?php bloginfo('template_url'); ?>/assets/img/banner_sinarukumichi.jpg" width="214" height="100"></div>
            </a></li>
            
            
           
            
        </ul>
    </div>


<?php /**************** ?>
    <!--============ facebook =================-->
    <h3 class="ttl-a"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</h3>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.11&appId=307500682626118';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-page" data-href="https://www.facebook.com/funpluswalk/" data-tabs="timeline" data-width="500" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/japansportsagency/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/japansportsagency/">スポーツ庁</a></blockquote>
    </div>


	<!--============ twitter =================-->
	<h3 class="ttl-a"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</h3>
  <a class="twitter-timeline" height="300px" href="https://twitter.com/funpluswalk?ref_src=twsrc%5Etfw" data-chrome="noheader">Tweets by funpluswalk</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8" ></script>

	<!--============ instagram =================-->
	<div class="instaBox">
	<a href="https://www.instagram.com/funpluswalk/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> <span>instagram</span></a>
	</div>
<?php ********************/ ?>

 </div>
<!--============ /sidebar =================-->

