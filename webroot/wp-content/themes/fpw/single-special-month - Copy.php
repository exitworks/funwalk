<?php get_header(); ?>

<div class="container" style="">
	<div class="breadcrumb"><a href="/">FUN+WALK PROJECTトップ</a>　&gt;　<a href="/<?php echo esc_html($post_type);?>/">SPECIAL</a>　&gt;
		<?php the_title(); ?>
	</div>
	<div class="contents">
		<!--============ main =================-->
		<main id="col1">
			<style>
				.contents {
					max-width: 100% !important;
					overflow: auto !important;
				}
			</style>
			<div id="week">
				<div class="week-main"> <img src="/wp-content/themes/fpw/assets/img/week/week_main.jpg" alt=""/> </div>
				<div class="weekBox02">

					<div class="banner_ambassador"><a href="/special/ambassador/"><img src="/wp-content/themes/fpw/assets/img/week/banner_ambassador.png" alt=""/></a>
					</div>

					<ul class="weekList">
						<li><a href="#fair"><img src="/wp-content/themes/fpw/assets/img/week/week_btn_fair.png" width="329" height="284" alt=""/></a>
						</li>
						<li><a href="#after5"><img src="/wp-content/themes/fpw/assets/img/week/week_btn_after5.png" width="329" height="284" alt=""/></a>
						</li>
						<li><a href="#pf"><img src="/wp-content/themes/fpw/assets/img/week/week_btn_pf.png" width="329" height="284" alt=""/></a>
						</li>
					</ul>
				</div>
				<div id="fair" class="weekBox">

					<h2 class="week-ttl">FUN+WALK フェア</h2>
					<p class="week-txt01">全国のお店や百貨店で、<br> 歩きやすいファッション提案中！
					</p>
					<h3>実施中のFUN+WALKフェア<br class="spBox">
            百貨店一覧</h3>
					<ul class="weekListB">
						<li>

							<div class="photoBox"><a href="https://www.takashimaya.co.jp/shinjuku/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/fair_thumbs01.png" width="327" height="217" alt="新宿タカシマヤ"/></a>
							</div>
							<div class="txtBox">
								<h4>新宿タカシマヤ</h4>
							</div>
						</li>
						<li>

							<div class="photoBox"><a href="https://dmdepart.jp/funpluswalk/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/fair_thumbs02.png" width="327" height="217" alt="大丸・松坂屋"/></a>
							</div>
							<div class="txtBox">
								<h4>大丸・松坂屋</h4>
							</div>
						</li>
						<li>

							<div class="photoBox"><a href="https://www.jr-takashimaya.co.jp/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/fair_thumbs03.png" width="327" height="217" alt="ジェイアール名古屋タカシマヤ"/></a>
							</div>
							<div class="txtBox">
								<h4>ジェイアール名古屋タカシマヤ</h4>
							</div>
						</li>
						<li>

							<div class="photoBox"><a href="https://www.mitsukoshi.mistore.jp/ginza.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/fair_thumbs04.png" width="327" height="217" alt="銀座三越"/></a>
							</div>
							<div class="txtBox">
								<h4>銀座三越</h4>
							</div>
						</li>

					</ul>
				</div>
				<div id="after5" class="weekBox">

					<h2 class="week-ttl">アフター５+WALK</h2>
					<p class="week-txt01">歩いた分だけ、平日の夜がおトクに。<br> 今だけの特別クーポン配信中！
					</p>
					<h3>アフター５+WALK実施中の企業</h3>
					<ul class="weekListC">
						<li>
							<div class="fukidashi"> <span class="icon-weeek02">オンラインストアで５％OFF</span>
							</div>
							<div class="photoBox"><a href="http://www.asics.com/jp/ja-jp/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs01.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<div class="ttl_after">アシックスジャパン株式会社</div>

								<h4><span>アシックス公式オンラインストアで使える</span><br>
オンラインストア５％OFFクーポン</h4>
								<p>さまざまなライフスタイルの靴やスニーカー、ウェアを取り揃えております。</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="fukidashi"> <span class="icon-weeek02">フィットネス体験500円</span>
							</div>
							<div class="photoBox"><a href="https://www.s-re.jp/club/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs02.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<div class="ttl_after">株式会社 ルネサンス</div>

								<h4><span>全国のルネサンスで使える</span><br>
フィットネス体験500円クーポン</h4>
								<p>全国のスポーツクラブ ルネサンスを体験ご利用いただけます （一部対象外店舗があります）。
								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="fukidashi"> <span class="icon-weeek02">お好きなドリンク一杯無料！
</span>
							</div>
							<div class="photoBox"><a href="https://kushi-tanaka.com/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs03.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<div class="ttl_after">株式会社 串カツ田中</div>
								<h4><span>全国の店舗で使える</span><br>
ワンドリンククーポン</h4>
								<p>歩いた後は串カツ田中で乾杯！歩いた分だけ美味しくお得にお召し上がりいただけます（一部対象外店舗があります）。
								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>



						<li>
							<div class="fukidashi"> <span class="icon-weeek02">カラオケ30％OFF</span>
							</div>
							<div class="photoBox"><a href="https://big-echo.jp/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs04.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">
								<div class="ttl_after">株式会社第一興商</div>
								<h4><span>ビッグエコー全店舗で使える</span><br>
室料30%OFF（一般料金から）クーポン
</h4>
								<p>歩いて、歌って、お得に楽しく健康になろう！<br> カラオケを歌うこと、それ自体が身近な健康法として注目されています！（一部対象外店舗があります）


								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="fukidashi"> <span class="icon-weeek02">メガネ10％OFF
</span>
							</div>
							<div class="photoBox"><a href="https://www.meganedrug.com/shop/index.html" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs05.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">
								<div class="ttl_after">株式会社メガネドラッグ</div>
								<h4><span>メガネドラッグ全店で利用できる</span><br>メガネ10％OFF／コンタクトレンズ・補聴器5％OFFクーポン
</h4>
								<p>アプリご提示でもれなく「モモちゃんフィギュア（非売品）」プレゼント！
								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="fukidashi"> <span class="icon-weeek02">アイスコーヒー＆お菓子無料</span>
							</div>
							<div class="photoBox"><a href="https://fukui.291ma.jp/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs06.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">
								<div class="ttl_after">ふくい南青山２９１</div>
								<h4><span>ふくい南青山２９１限定</span><br>
ドリップ・アイスコーヒーとお菓子を無料サービスクーポン</h4>
								<p>お弁当・コーヒー・スィーツなどを、座ってお召し上がりいただくことができます
								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>クーポンをGETしよう！</a>
								</div>
							</div>
						</li>

						<li>
							<div class="fukidashi"> <span class="icon-weeek02">ドリンク1杯をプレゼント！</span>
							</div>
							<div class="photoBox"><img src="/wp-content/themes/fpw/assets/img/week/after5_thumbs07.png" width="327" height="217" alt=""/>
							</div>
							<div class="txtBox">
								<div class="ttl_after">淡路島Kitchenハッピーハンバーグ</div>
								<h4><span>淡路牛のハンバーグ＆ステーキ専門店</span><br>
ドリンク1杯をプレゼント！クーポン</h4>
								<p>当店の名物は淡路牛と淡路島産玉ねぎを贅沢に使用し職人が1つ1つ丁寧に作り上げた『淡路牛手ごねハンバーグ』。</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>

					</ul>
					<h3>アプリをインストール＆<br class="spBox">
            たくさん歩いてクーポンGET！</h3>
					<p class="week-txt02">1日の歩数にあわせて、ご当地キャラがどんどん変身したり。<br class="pcBox"> 1000歩ごとにたまるポイントを、割引クーポンと交換できたり。
						<br class="pcBox"> もっと歩きたくなる仕掛けが、たくさん詰まったアプリです。
					</p>
					<div class="week-appBox">
						<div class="week-app-left"><img src="/wp-content/themes/fpw/assets/img/app/app_img01.png" width="162">
						</div>
						<div class="week-app-right">
							<div class="qrBox">
								<div class="qrInner">
									<div class="qr-ttl">早速インストールしよう</div>
									<div class="qr-left">
										<div class="qr-ttl02">Androidの方</div>
										<img src="/wp-content/themes/fpw/assets/img/app/app_qr01.png" width="139" height="139">
										<div class="qr-btn"><a href="#"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_google.png"></a>
										</div>
									</div>
									<div class="qr-right">
										<div class="qr-ttl02">iPhoneの方</div>
										<img src="/wp-content/themes/fpw/assets/img/app/app_qr02.png" width="139" height="139">
										<div class="qr-btn"><a href="#"><img src="/wp-content/themes/fpw/assets/img/app/app_btn_apple.png"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="pf" class="weekBox">

					<h2 class="week-ttl">プレミアム<br class="spBox">
            FUN+WALKフライデー</h2>
					<p class="week-txt01">プレミアムフライデーに8,000歩あるいて、<br> いつもより少し豊かな時間を過ごそう！
					</p>
					<h3>プレミアムフライデー × FUN+WALK協賛企業</h3>
					<ul class="weekListD">




						<li>
							<div class="photoBox"><a href="https://kushi-tanaka.com/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/pf_thumbs04.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<h4>
株式会社串カツ田中
</h4>
							

								<h5>＜10月26日のプレ金限定＞FUN＋WALKご褒美セットクーポン

</h5>
								<p>歩いた分だけ自分へご褒美を！<br> FUN+WALK月間中のプレミアムフライデー10月26日(金)限定で、『FUN+WALKご褒美セット』を500円(税抜)で提供いたします！

								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="photoBox"><a href="https://fukui.291ma.jp/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/pf_thumbs03.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<h4>
ふくい南青山２９１
</h4>
							

								<h5>＜10月26日のプレ金限定＞食品・飲料（お酒含む）１０％OFFクーポン
</h5>
								<p>「一福コーナー」では、店内で購入していただいた、お弁当・コーヒー・スィーツなどを、座ってお召し上がりいただくことができます。２階には観光案内コーナーもございますので、お気軽にぜひお立ち寄りください。
								</p>
								<div class="week-btnA"><a href="/special/app/">FUN+WALKアプリで<br>
クーポンをGETしよう！</a>
								</div>
							</div>
						</li>
						<li>
							<div class="photoBox"><a href="https://www.meganedrug.com/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/pf_thumbs02.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<h4>
株式会社メガネドラッグ</h4>
							

								<h5>メガネドラッグ全店で実施</h5>
								<p>「メガネで出来る健康生活」をテーマに、ウォーキング時にはまぶしさ対策として、紫外線で色の変わる調光レンズやサングラスをおすすめしています。またFUN+WALKに賛同し、アプリなどの8000歩画面ご提示で、非売品“モモちゃんミニフィギュア”をプレゼントいたします（11/4まで）。</p>
								<div class="week-btnA"><a href="https://www.meganedrug.com/" target="_blank">詳しくはこちら <i class="fa fa-external-link" aria-hidden="true"></i></a>
								</div>
							</div>
						</li>





						<li>
							<div class="photoBox"><a href="http://i-impression11894.wixsite.com/yu-ra-shi-seitai" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/pf_thumbs01.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<h4>
ボディメンテナンスサロン「ユーラシィー」</h4>
							

								<h5>ウォーキングのウォームアップorクールダウンに！骨格メンテナンスキャンペーン</h5>
								<p>滋賀県東近江市のボディメンテナンスサロン「ユーラシィー」です。 骨格メンテナンスの六十分と百分コースが、半額でお得に受けられます。 ウォーキングの前後にも整体でボディメンテナンス！
								</p>
								<div class="week-btnA"><a href="http://i-impression11894.wixsite.com/yu-ra-shi-seitai" target="_blank">詳しくはこちら <i class="fa fa-external-link" aria-hidden="true"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="photoBox"><a href="http://www.alpsshoes.com/" target="_blank"><img src="/wp-content/themes/fpw/assets/img/week/pf_thumbs05.png" width="327" height="217" alt=""/></a>
							</div>
							<div class="txtBox">

								<h4>
株式会社アルプスシューズ</h4>
							

								<h5>「歩いて健康」8000歩いて5％OFF</h5>
								<p>掲載日より10月31日までアプリの歩数表示で 店内商品5％OFF でお買い物。<br> 当店は「歩いて健康」をテーマとして歩きやすい靴を取り揃え。 靴合わせのプロ、シューフィッターがアドバイス。
									<br> 東京都豊島区巣鴨のとげぬき地蔵通り内の高岩寺前に立地。
								</p>
								<div class="week-btnA"><a href="http://www.alpsshoes.com/" target="_blank">詳しくはこちら <i class="fa fa-external-link" aria-hidden="true"></i></a>
								</div>
							</div>
						</li>







					</ul>
					<h3>プレミアムFUN+WALKフライデーの取組を募集しています！</h3>
					<div class="week-pfBox">
						<p><strong>プレミアムフライデーに、「歩く」をくみあわせてFUN+WALKな取組を実施している企業・団体から取組情報を募集しています！<br>
              フォームから取組情報をご連絡いただいた企業・団体は、このサイトでご紹介いたします。</strong> </p>
						<div class="week-btnB"><a href="/special/premium_friday/">プレミアムFUN+WALKフライデーのご案内
</a>
						</div>

					</div>
				</div>
			</div>
		</main>
		<!--============ /main =================-->



	</div>
</div>

<?php get_footer(); ?>