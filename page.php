
	<?php
if(is_page('company')){
	remove_filter('the_content','wpautop');
}
?>



<?php get_header(); ?>
<?php if( have_posts()) : ?>
	<?php while( have_posts() ) : the_post(); ?>
<div id="contents">

<section>


	
	<?php get_template_part('template-parts/breadcrumb'); ?>
	
	<?php the_content(); ?>
	












</section>

<section>

<h2>当テンプレートの使い方</h2>

<h3>初心者向けマニュアル公開中</h3>
<p>画像加工やテンプレートの編集方法、無料サーバーを使ってサイトを公開するなど動画をまじえてわかりやすく解説しています。<br>
<a href="https://template-party.com/file/" target="_blank">初心者向けマニュアルはこちら。</a></p>

<h3>注意：当テンプレートにはメインメニューが「２箇所」入っています</h3>
<p>パソコンなどの大きな端末「menubar（幅901px以上）」向けと、タブレットやスマホなどの小さな端末「menubar-s（幅900px以下）」向けがそれぞれ入っています。大きな端末向けは編集ソフトで見れると思いますが、小さな端末向けは見えないと思いますのでhtml側で編集して下さい。</p>

<h3>titleタグ、copyright、metaタグ、他の設定</h3>
<p><strong class="color1">titleタグの設定はとても重要です。念入りにワードを選んで適切に入力しましょう。</strong><br>
まず、htmlソースが見れる状態にして、<br>
<span class="look">&lt;title&gt;ビジネスサイト・企業向け 無料ホームページテンプレート tp_biz54&lt;/title&gt;</span><br>
を編集しましょう。<br>
あなたのホームページ名が「SAMPLE COMPANY」だとすれば、<br>
<span class="look">&lt;title&gt;SAMPLE COMPANY&lt;/title&gt;</span><br>
とすればＯＫです。SEO対策もするなら冒頭に重要なワードを入れておきましょう。</p>
<p><strong class="color1">copyrightを変更しましょう。</strong><br>
続いてhtmlの下の方にある、<br>
<span class="look">Copyright&copy; SAMPLE COMPANY All Rights Reserved.</span><br>
の部分もあなたのサイト名に変更します。</p>
<p><strong class="color1">metaタグを変更しましょう。</strong><br>
htmlソースが見える状態にしてmetaタグを変更しましょう。</p>
<p>ソースの上の方に、<br>
<span class="look">content=&quot;ここにサイト説明を入れます&quot;</span><br>
という部分がありますので、テキストをサイトの説明文に入れ替えます。検索結果の文面に使われる場合もありますので、見た人が来訪したくなるような説明文を簡潔に書きましょう。</p>
<p>続いて、その下の行の<br>
<span class="look">content=&quot;キーワード１,キーワード２,～～～&quot;</span><br>
も設定します。ここはサイトに関係のあるキーワードを入れる箇所です。10個前後ぐらいあれば充分です。キーワード間はカンマ「,」で区切ります。</p>
<p><strong class="color1">h1ロゴのaltタグも変更しましょう。</strong><br>
  html側に、<br>
<span class="look">alt=&quot;SAMPLE COMPANY&quot;</span><br>
となっている箇所があるので、この部分もあなたのサイト名に変更しましょう。</p>

<h3>上部のロゴ画像について</h3>
<p>文字なしの土台画像がbaseフォルダに入っていますのでそれにサイト名をのせてimagesフォルダに上書きして下さい。</p>

<h3>上部メニュー「▼Service」のドロップダウンメニューについて（※901px以上の端末の場合）</h3>
<p>親となるリストタグ&lt;li&gt;〜&lt;/li&gt;の中にドロップダウン用のメニューを加えて下さい。<br>class=&quot;ddmenu&quot;の指定でドロップダウンメニューとして認識されます。親のリスト(li)タグの「中」にある必要があるので間違えないように注意して下さい。</p>
<p class="look mb30">&lt;li class=&quot;ddmenu-title&quot;&gt;Service<br>
<span class="color1">&lt;ul class=&quot;ddmenu&quot;&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;/ul&gt;</span><br>
&lt;/li&gt;</p>

<h3>小さな端末向け「＞Service」の開閉メニューについて（※900px以下の端末の場合）</h3>
<p>ドロップダウンに似た動作をしますが、こちらはメニューの開閉ブロックを入れ子にしています。<br>
「menubar_hdr2」が親メニューの指定で、「menubar-s2」が子メニューへの指定です。これらはidでしか使えない為、開閉ブロック単位で「違う名前」をつけて下さい。<br>
例えば開閉ブロックをもう１つ追加するなら「menubar_hdr3」「menubar-s3」など、新しいid値(名前)をつけてあげる必要があります。</p>
<p class="look mb15">&lt;li id=&quot;menubar_hdr2&quot; class=&quot;close&quot;&gt;Service<br>
<span class="color1">&lt;ul id=&quot;menubar-s2&quot;&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;li&gt;&lt;a href=&quot;service.html&quot;&gt;サービスメニュー&lt;/a&gt;&lt;/li&gt;<br>
&lt;/ul&gt;</span><br>
&lt;/li&gt;</p>
<p>あとは実際に開閉させるjavascriptのタグをhtml下部に記載します。<br>
新しい開閉ブロックを追加する場合は、コピペしてここの指定も忘れず行って下さい。</p>
<p class="look mb15">&lt;!--子メニュー--&gt;<br>
&lt;script&gt;<br>
if (OCwindowWidth() &lt;= 900) {<br>
open_close(&quot;menubar_hdr2&quot;, &quot;menubar-s2&quot;);<br>
}<br>
&lt;/script&gt;</p>

<h3>トップページのスライドショーについて</h3>
<p>cssフォルダのslide.cssとkeyframes.cssにて設定されています。</p>
<p><strong class="color1">css3に対応した環境(IEなら10以上)でしか動作しません。</strong><br>
IE9では最後の１枚が固定表示されます。<br>
IE8以下は考慮していません。</p>

<p><strong class="color1">tp_biz54_〜01タイプのスライドショーは、同じサイズで色違いのpng画像の「表示方法」を切り替えて使っています。<br>
tp_biz54_〜02タイプのスライドショーは、通常の写真を読み込んだサンプルです。</strong><br>
ご要望に近い方をDLしてご利用下さい。<br>
cssフォルダのslide.cssに解説が書いてあります。</p>

<p><strong class="color1">画像を入れ替えたい場合</strong><br>
「1.jpg（又はpng）」、「2.jpg（又はpng）」、「3.jpg（又はpng）」の3枚の画像を用意してimagesフォルダに上書きして下さい。<br>
拡張子が少し違った場合にうまく表示できない可能性があるので同じ文字で統一して下さい。html側の拡張子指定を変更しても構いません。<br>
画像の容量はできるだけしぼって下さい。重いと初動がガタつきます。</p>
<p><strong class="color1">固定画像にしたい場合</strong><br>
cssフォルダのkeyframes.cssの<br>
<span class="look">/*スライドショーのフレーム設定</span><br>
のブロックを全て削除。<br>
あとはhtml側から残したい画像の行以外を削除。html下部の方にある、<br>
<span class="look">&lt;!--背景スライドショー--&gt;<br>
・・・</span><br>
部分です。</p>
<p><strong class="color1">速度や枚数などの調整</strong><br>
cssフォルダのslide.cssで行って下さい。解説も入っています。<br>
<a href="https://template-party.com/tips/slide_css.html">スライドショーに関する詳しい使い方はこちら。</a></p>

<h3>リストタグを使いたい場合の注意点</h3>
<p>そのままではリストマークが出ませんので、リストタグを使う場合は以下のようなスタイルを追加して下さい。</p>
<p>&lt;ul <span class="color1">class=&quot;disc&quot;</span>&gt;<br>
&lt;li&gt;リストタグ&lt;/li&gt;<br>
&lt;li&gt;リストタグ&lt;/li&gt;<br>
&lt;li&gt;リストタグ&lt;/li&gt;<br>
&lt;/ul&gt;
</p>
<p>↓出力例</p>
<ul class="disc">
<li>リストタグ</li>
<li>リストタグ</li>
<li>リストタグ</li>
</ul>
<ol>
<li>olタグはそのままででます。</li>
<li>olタグはそのままででます。</li>
<li>olタグはそのままででます。</li>
<li>olタグはそのままででます。</li>
</ol>

<h3>スクロール中に出る「↑」アイコンについて</h3>
<p>fixmenu_pagetop.jsで動作の制御を、cssフォルダのstyle.css内の<br>
<span class="look">/*PAGE TOP（↑）設定</span><br>
でボタンデザインを設定しています。<br>
ボタンの出現ポイントは、現在350pxの場所になっています。変更したい場合はfixmenu_pagetop.jsの34行目あたりにある、<br>
<span class="look">offsettop = 350;</span><br>
の350を変更して下さい。</p>

</section>

</div>
<!--/#contents-->

<footer>

<div id="footermenu">
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
<ul>
<li class="title">タイトル</li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
<li><a href="#">メニューサンプルメニューサンプル</a></li>
</ul>
</div>
<!--/#footermenu-->

<div id="copyright">
<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>
<!--/#copyright-->

</footer>

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　900px以下-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--子メニュー-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr2", "menubar-s2");
}
</script>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
</body>
</html>
