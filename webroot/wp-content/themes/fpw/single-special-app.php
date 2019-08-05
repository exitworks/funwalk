<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	// カテゴリ名取得
	$category = get_term( get_field('rdo_taxonomy_special'), 'taxonomy_slug_special' );

	// 画像
	$img_id = $file_id = get_post_meta($post->ID,'img_title',true);
	$img_src = "";
	if($img_id){
		$img_src = wp_get_attachment_image_src($img_id, 'full')[0];
	}
endwhile; endif; ?>

<div class="container">
  <div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　<a href="/<?php echo esc_html($post_type);?>/">SPECIAL</a>　&gt;　
    <?php the_title(); ?>
  </div>
  <div class="contents"> 
    
    <!--============ main =================-->
    <main>
      <div id="app"> 
        <!--============ post =================-->
        <h2><span>FUN+WALKアプリ</span></h2>
        <div class="appBox">
          <div class="app-left">
            <div class="pcBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img01.png" width="262" height="554"></div>
            <div class="spBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img01_sp.png" width="262" height="554"></div>
          </div>
          <div class="app-right">
            <h4>好きなご当地キャラを変身させたり、おトクなクーポンをGETしたり。「歩く」がもっと楽しくなるアプリです。</h4>
            <p>歩くことをもっと楽しく、楽しいことをもっと健康的なものに変えていくスポーツ庁の『FUN＋WALK PROJECT』をサポートするアプリが誕生！
              1日の歩数にあわせて、ご当地キャラがどんどん変身したり。1000歩ごとにたまるポイントを、割引クーポンと交換できたり。
              もっと歩きたくなる仕掛けが、たくさん詰まったアプリです。 </p>
            <p class="app-attention">スマートフォンの画面を見つめながらの移動は大変危険です。また自分自身だけでなく、周囲の方も巻き込む事故につながる可能性があります。<br />
              歩行中はもちろん、車や自転車の運転中は、本アプリのご利用をお控えください。</p>
            <div class="qrBox">
              <div class="qrInner">
                <div class="qr-ttl">早速インストールしよう</div>
                <div class="qr-left">
                  <div class="qr-ttl02">Androidの方</div>
                  <img src="/wp-content/themes/fpw/assets/img/app/app_qr01.png" width="139" height="139">
                  <div class="qr-btn"><a href="https://funpluswalk.jp/qr/Android.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_google.png"></a></div>
                </div>
                <div class="qr-right">
                  <div class="qr-ttl02">iPhoneの方</div>
                  <img src="/wp-content/themes/fpw/assets/img/app/app_qr02.png" width="139" height="139">
                  <div class="qr-btn"><a href="https://funpluswalk.jp/qr/iOS.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_apple.png"></a></div>
                </div>
              </div>
            </div>
            
            <p class="app-contact"><a href="https://krs.bz/walkjp/m?f=9">本アプリに関するお問い合わせはこちら</a></p>
            
            
          </div>
        </div>
        <h3><span>FUN+WALKはこんなアプリ</span></h3>
        <ul class="app-aboutList">
          <li>
            <div class="app-aboutTitle">どんどん歩いて<br>
              好きなご当地キャラを</div>
            <div class="app-aboutTitleB">変身させよう!</div>
            <div class="app-aboutBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img02.png"></div>
            <div class="app-aboutTxt">好きなご当地キャラを選んで歩くと、歩数にあわせてキャラが変身！毎日たくさん歩いて、まだ見たことのないご当地キャラの姿に出会ってください。</div>
          </li>
          <li>
            <div class="app-aboutTitle">歩いてためたポイントで<br>
              街のお店で使える</div>
            <div class="app-aboutTitleB">クーポンGET!</div>
            <div class="app-aboutBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img03.png"></div>
            <div class="app-aboutTxt">1000歩ごとに1ポイントたまって、８ポイントでおトクなクーポン１枚と交換できる仕組みです。月末にポイントがリセットされるので、お早めに！ </div>
          </li>
          <li>
            <div class="app-aboutTitle">「歩く」がもっと楽しくなる<br>
              コンテンツも</div>
            <div class="app-aboutTitleB">もりだくさん!</div>
            <div class="app-aboutBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img04.png"></div>
            <div class="app-aboutTxt">美容/グルメ/健康など、さまざまなジャンルで、「歩く」をテーマにしたコラムや取り組み事例、イベント情報などを配信していきます。お楽しみに！ </div>
          </li>
        </ul>
        <h3><span>キャラ図鑑が楽しい</span></h3>
        <div class="appBox">
          <div class="app-left">
            <div class="pcBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img05.png" width="262" height="554"></div>
            <div class="spBox"><img src="/wp-content/themes/fpw/assets/img/app/app_img05_sp.png" width="262" height="554"></div>
          </div>
          <div class="app-right">
            <h4>いろんなキャラクターを変身させて、<br class="pcBox" />
              200種類以上のキャラ図鑑をコンプリートしよう！</h4>
            <p>キャラクターは、歩いた歩数にあわせて変身します。
              好きなキャラクターを選んでどんどん歩いてください。
              おなじみのご当地キャラが、その姿をどのように変えていくのか、お楽しみに！
              どこまでコンプリートできたかは、キャラ図鑑でチェックできます。
              レアな姿を見つけたら、ぜひSNSでシェアしてみましょう。 </p>
            <div class="qrBox">
              <div class="qrInner">
                <div class="qr-ttl">早速インストールしよう</div>
                <div class="qr-left">
                  <div class="qr-ttl02">Androidの方</div>
                  <img src="/wp-content/themes/fpw/assets/img/app/app_qr01.png" width="139" height="139">
                  <div class="qr-btn"><a href="https://funpluswalk.jp/qr/Android.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_google.png"></a></div>
                </div>
                <div class="qr-right">
                  <div class="qr-ttl02">iPhoneの方</div>
                  <img src="/wp-content/themes/fpw/assets/img/app/app_qr02.png" width="139" height="139">
                  <div class="qr-btn"><a href="https://funpluswalk.jp/qr/iOS.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_apple.png"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3><span>登場するさまざまなご当地キャラ</span></h3>
        <ul class="app-charalist">
			<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara41.png"></div>
            <div class="txtBox">
              <h4>ラッキーウサ</h4>
              <p>EXILE ÜSAの分身で大分県宇佐市文化観光大使。宇佐市から世界中に幸せを運ぶため活動中。</p>
              <p class="credit">(C)LDH JAPAN</p>
            </div>
          </li>
			
			<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara42.png"></div>
            <div class="txtBox">
              <h4>パフォ犬</h4>
              <p>TETSUYAが所長のEXILEパフォーマンス研究所で専門用語をわかりやすく伝える研究員。</p>
              <p class="credit">(C)LDH JAPAN</p>
            </div>
          </li>
			<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara44.png"></div>
            <div class="txtBox">
              <h4>東横ハチ公</h4>
              <p>東横のれん街の看板犬として、みんなに育てられた東横ハチ公。のれん街のどら焼きが大好物。</p>
              <p class="credit">(C)東横ハチ公</p>
            </div>
          </li>
		
		<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara43.png"></div>
            <div class="txtBox">
              <h4>メロン熊</h4>
              <p>夕張のおいしいメロンを食い荒らし姿を変貌させた熊。なぜこのような姿になったか、未だ不明…</p>
              <p class="credit">(C)Ohsai</p>
            </div>
          </li>		
			
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara01.png"></div>
            <div class="txtBox">
              <h4>ジンギスカンのジンくん</h4>
              <p>北海道のソウルフード、ジンギスカンをPRするラム。​ちなみにベジタリアン。</p>
              <p class="credit">(C)はしあさこ</p>
            </div>
          </li>
		
		
			
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara02.png"></div>
            <div class="txtBox">
              <h4>つゆヤキソバン</h4>
              <p>青森県黒石市の良いとこを代表する「ふるさと☆戦隊　ＫＵＲＯＳＩＸ」のイケ麺リーダー。</p>
              <p class="credit">(C)blast</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara03.png"></div>
            <div class="txtBox">
              <h4>わんこきょうだい</h4>
              <p>岩手名物「わんこそば」と国内生産量日本一の漆を使った「漆器」から生まれた岩手県PRキャラ。</p>
              <p class="credit">(R)わんこきょうだい</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara04.png"></div>
            <div class="txtBox">
              <h4>ニャジロウ</h4>
              <p>秋田市在住のちょっぴり気弱なおかっぱ猫。お尻をフリフリすると、ニャッパゲに変身する。</p>
              <p class="credit">(C)nekoyanagi</p>
            </div>
          </li>
			 <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara40.png"></div>
            <div class="txtBox">
              <h4>ベガッ太</h4>
              <p>ベガルタ仙台のクラブマスコット。ギリシャ神話で「勝利をもたらす」といわれる鷲をイメージ</p>
              <p class="credit">(C)1999 VEGALTA</p>
            </div>
          </li>
			
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara05.png"></div>
            <div class="txtBox">
              <h4>しらかわん</h4>
              <p>福島県白河市生まれの男の子。大好物は地元白河の「南湖だんご」「白河ラーメン」「白河そば」</p>
              <p class="credit">(C)福島県白河市</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara06.png"></div>
            <div class="txtBox">
              <h4>ハッスル黄門</h4>
              <p>優しいけれど悪人には厳しい男。茨城県の筑波山で修業したら、スーパーハッスル黄門に変身！？</p>
              <p class="credit">茨城県マスコット ハッスル黄門</p>
            </div>
          </li>
			<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara37.png"></div>
            <div class="txtBox">
              <h4>もおかぴょん</h4>
              <p>栃木県真岡市生まれで、なんと頭に真岡鐵道のＳＬを乗せ、いちご柄のパンツを履く元気な男の子。</p>
              <p class="credit">(C) 栃木県真岡市</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara07.png"></div>
            <div class="txtBox">
              <h4>ぐんまちゃん</h4>
              <p>群馬県公式マスコットのポニー。特技は変身。群馬県宣伝部長として頑張っている。</p>
              <p class="credit">群馬県のマスコット「ぐんまちゃん」協力：群馬県</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara34.png"></div>
            <div class="txtBox">
              <h4>はにぽん</h4>
              <p>埼玉県本庄市の古墳から発掘された「笑う埴輪」の男の子。特技はみんなを笑顔にすること。</p>
              <p class="credit">本庄市マスコット「はにぽん」</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara08.png"></div>
            <div class="txtBox">
              <h4>ふっかちゃん</h4>
              <p>ウサギのようでシカのような「ふっか」という生きもの。 角は埼玉県深谷市名産の「深谷ねぎ」。</p>
              <p class="credit">深谷市ｲﾒｰｼﾞｷｬﾗｸﾀｰふっかちゃん</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara36.png"></div>
            <div class="txtBox">
              <h4>ハッピイちゃん</h4>
              <p>おまつりが盛んな東京都江戸川区生まれ！特技はバチ打ち。握手するとHAPPYになるかも!?</p>
 <p class="credit">&nbsp;</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara09.png"></div>
            <div class="txtBox">
              <h4>にしこくん</h4>
              <p>東京都武蔵国分寺跡から発掘されたあぶみ瓦の妖精。 ​カラー写真にモノクロで写ることが悩み。</p>
              <p class="credit">(C)nishikokun</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara10.png"></div>
            <div class="txtBox">
              <h4>えぼし麻呂</h4>
              <p>神奈川県茅ヶ崎市に住むちがさ貴族の男の子。​波の精霊ミーナと一緒に茅ヶ崎を探索しているよ！</p>
              <p class="credit">ちがさ貴族　えぼし麻呂</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara11.png"></div>
            <div class="txtBox">
              <h4>レルヒさん</h4>
              <p>新潟の地で日本にスキーを伝えた偉人がモデルの「日本元祖スキー漢」。犬嫌いを今は克服中？</p>
              <p class="credit">レルヒさん（R)</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara12.png"></div>
            <div class="txtBox">
              <h4>メルギューくん・<br class="pcBox" />
                メルモモちゃん</h4>
              <p>源平倶利伽羅合戦で活躍した「火牛」をご先祖に持つ。カップルで富山県小矢部市をPR中。</p>
              <p class="credit">小矢部市</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara32.png"></div>
            <div class="txtBox">
              <h4>和倉温泉わくたまくん</h4>
              <p>石川県の和倉温泉を発見したとされるシラサギが産んだ「タマゴ」 。十月十日生まれの男の子。</p>
              <p class="credit">(C)和倉温泉観光協会</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara13.png"></div>
            <div class="txtBox">
              <h4>へしこちゃん</h4>
              <p>福井県美浜町の観光キャンペーンガール。​特産品の「へしこ」がモチーフとなっている。</p>
              <p class="credit">(C)若狭美浜観光協会</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara14.png"></div>
            <div class="txtBox">
              <h4>かさまるくん・かさまるちゃん</h4>
              <p>岐阜県笠松町をＰＲする双子のマスコットキャラクター。いろんなことに挑戦中で、目標は乗馬。</p>
              <p class="credit">(C)笠松町</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara15.png"></div>
            <div class="txtBox">
              <h4>出世大名家康くん・<br class="pcBox" />
                出世法師直虎ちゃん</h4>
              <p>徳川家康と井伊直虎の生まれ変わりと言われている、 静岡県浜松市のマスコットキャラクター。</p>
              <p class="credit">(C)浜松市</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara16.png"></div>
            <div class="txtBox">
              <h4>オカザえもん</h4>
              <p>愛知県岡崎市のキャラクター「のようなもの」。​顔が「岡」胸に「崎」の文字で全身で岡崎PR。</p>
              <p class="credit">(C)OKAZAEMON</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara17.png"></div>
            <div class="txtBox">
              <h4>いが☆グリオ</h4>
              <p>伊賀流忍者のふるさと三重県伊賀市でうまれた小学校3年生の忍者のおとこの子。</p>
              <p class="credit">(C)いが☆グリオ実行委員会</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara18.png"></div>
            <div class="txtBox">
              <h4>やちにゃん</h4>
              <p>滋賀県彦根市ＰＲのため四番町スクエアで誕生。 ​彦根藩主・井伊直弼の娘・弥千代姫がモデル。</p>
              <p class="credit">(C)ひこらぼ</p>
            </div>
          </li>
			<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara38.png"></div>
            <div class="txtBox">
              <h4>京都府広報監　まゆまろ</h4>
              <p>絹の原料である繭をモチーフにした男の子♪推定年齢は二千歳！京都府の公務員として働いています。</p>
              <p class="credit">(C)京都府　まゆまろ　18030</p>
            </div>
          </li>
			
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara19.png"></div>
            <div class="txtBox">
              <h4>和み柴っこ</h4>
              <p>京都生まれの京育ち。​嵐山の和んこ堂で丁稚をしている。特技はお絵かきとお習字。</p>
              <p class="credit">(C)2018 WANKODO</p>
            </div>
          </li>
		<li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara45.png"></div>
            <div class="txtBox">
              <h4>えがおん</h4>
              <p>笑顔を届け大阪を元気にするために様々な事に挑戦中。天界から落ちてきて大阪の弁天町で修行中。</p>
              <p class="credit">えがおん(R)</p>
            </div>
          </li>	
			
			
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara33.png"></div>
            <div class="txtBox">
              <h4>みっけちゃん</h4>
              <p>大阪府枚方市の交野天神社で拾ってもらった恩返しに巫女としてお手伝いしている。特技はバレエ。</p>
              <p class="credit">(C)樟葉宮表参道商店会</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara20.png"></div>
            <div class="txtBox">
              <h4>ちっちゃいおっさん</h4>
              <p>酒田しんいち、４５歳で兵庫県在住。​チビッコ達の明るい未来のために、ほろ酔い笑顔で奮闘中♪</p>
              <p class="credit">(C)UPRIGHT</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara21.png"></div>
            <div class="txtBox">
              <h4>みくちゃん</h4>
              <p>「未来へはばたき大使」として奈良県大和高田市の魅力や情報を発信中。特産野菜5品目が大好き。</p>
              <p class="credit">(C)Copyright 2013 Yamato Takada City All Right Reserved.</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara22.png"></div>
            <div class="txtBox">
              <h4>島根県観光キャラクター<br class="pcBox" />
                しまねっこ</h4>
              <p>島根県のどこかから、島根をＰＲするためにやってきた。明るい性格で誰とでも仲良くなれる。</p>
              <p class="credit">島根県観光キャラクター「しまねっこ」島観連許諾第4910号</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara23.png"></div>
            <div class="txtBox">
              <h4>でんちゅうくん</h4>
              <p>岡山県井原市出身の巨匠・平櫛田中の「鏡獅子」がモデル。流れ星を見つけたら必ず願い事をする。</p>
              <p class="credit">井原市</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara24.png"></div>
            <div class="txtBox">
              <h4>ゆずがっぱ</h4>
              <p>徳島県木頭で生まれたかっぱとゆずのキャラクター。夢は木頭にコンビニが出来ること…</p>
              <p class="credit">(C)chico</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara25.png"></div>
            <div class="txtBox">
              <h4>うどん脳</h4>
              <p>香川県で大好きなうどんばかり食べていたら、ある朝「うどん脳」になっていた元人間の妖怪。</p>
              <p class="credit">(C)OKPDESIGN</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara26.png"></div>
            <div class="txtBox">
              <h4>いまばり　バリィさん</h4>
              <p>焼き鳥のまち、愛媛県今治生まれ今治育ちのトリ。趣味は食べ歩きとハラマキコレクション。</p>
              <p class="credit">(C)Daiichi Printing</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara27.png"></div>
            <div class="txtBox">
              <h4>しんじょう君</h4>
              <p>高知県須崎市で最後に目撃されたニホンカワウソ。帽子が鍋焼きラーメン。ダンスと水泳が得意。</p>
              <p class="credit">(C)須崎市2013承認番号1060</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara28.png"></div>
            <div class="txtBox">
              <h4>あ！官兵衛</h4>
              <p>大分県中津市で生まれた「如水の赤合子」と呼ばれる兜の妖精。 ​まっすぐないい奴で腰が低い。</p>
              <p class="credit">(C)akanbeepapa</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara29.png"></div>
            <div class="txtBox">
              <h4>みやざき犬</h4>
              <p>宮崎の特産品やゆかりのものを被り、宮崎県の​ＰＲを頑張っているダンスが得意な３匹のわんこ。</p>
              <p class="credit">みやざき犬使用許可第290117号</p>
            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara30.png"></div>
            <div class="txtBox">
              <h4>イーサキング</h4>
              <p>鹿児島県伊佐市のご当地キャラ初のYoutuber。​チャンネル登録よろしく</p>
              <p class="credit">&nbsp;</p><br /><br />

            </div>
          </li>
          <li>
            <div class="charaBox"><img src="/wp-content/themes/fpw/assets/img/app/app_chara31.png"></div>
            <div class="txtBox">
              <h4>うるうらら</h4>
              <p>沖縄県のうるまの海で生まれた珊瑚の種の妖精。趣味は歌にダンスで、歌手活動もしている。</p>
              <p class="credit">うるうらら(R)</p>
            </div>
          </li>
          
          
          
          
        </ul>
      </div>
    </main>
    <!--============ /main =================-->
    
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
