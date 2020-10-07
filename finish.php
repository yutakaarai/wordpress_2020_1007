<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ビジネスサイト・企業向け 無料ホームページテンプレート tp_biz54</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script src="js/openclose.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/ddmenu_min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE COMPANY"></a></h1>
<!--PC用（901px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="company.html">Company</a></li>
<li class="ddmenu-title">Service
	<ul class="ddmenu">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<!--小さい端末用（900px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="company.html">Company</a></li>
<li id="menubar_hdr2" class="close">Service
	<ul id="menubar-s2">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<ul class="icon">
<li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
<li><a href="#"><img src="images/icon_youtube.png" alt="TouTube"></a></li>
</ul>
</header>

<div id="contents">

<section>

<h2>送信完了</h2>

<!-- フォームの情報はここからです -->
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
<input type="hidden" name="mode" value="finish" />
<!-- 処理終了 -->
<p>送信が完了しました。</p>
</form>
<!-- フォームの情報はここまでです -->

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

</body>
</html>
