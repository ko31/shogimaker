<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。">
    <meta name="keywords" content="将棋,駒,ジェネレーター,Webサービス" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://shogimaker.ko31.com/favicon.ico">

    <title><?php echo html_escape($image['title']);?> | 将棋メーカー</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/hover.zoom.js"></script>
    <script src="/assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <meta property="og:title" content="<?php echo html_escape($image['title']);?> | 将棋メーカー" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。" />
    <meta property="og:url" content="http://shogimaker.ko31.com/" />
    <meta property="og:image" content="http://shogimaker.ko31.com<?php echo $image['image'];?>" />
    <meta property="og:site_name" content="将棋メーカー" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ko31">
    <meta name="twitter:title" content="<?php echo html_escape($image['title']);?> | 将棋メーカー">
    <meta name="twitter:description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。">
    <meta name="twitter:image:src" content="http://shogimaker.ko31.com<?php echo $image['image'];?>">
    <meta name="twitter:domain" content="shogimaker.ko31.com">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/EaselJS/0.8.0/easeljs.min.js"></script>
    <script src="/assets/shogi/shogi.js"></script>
    <script src="/assets/js/scroll.js"></script>
  </head>

  <body>
<!--Facebook SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3&appId=913321488690277";
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--//Facebook SDK-->

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">将棋メーカー</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/shogi/garally">ギャラリー</a></li>
            <li><a href="/shogi/about">サイトについて</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- +++++ Post +++++ -->
    <div id="white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p><img src="/assets/shogi/top.png" width="32" height="32"> ギャラリー</p>
                    <h1><?php echo html_escape($image['title']);?></h1>
                    <p><?php echo html_escape($image['date']);?></p>
                    <p><img class="img-responsive" src="<?php echo $image['image'];?>" alt="<?php echo html_escape($image['title']);?>"></p>
                    <!--Twitter-->
                    <p>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-size="large" data-related="shogimaker" data-hashtags="shogimaker">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </p>
                    <!--//Twitter-->
                    <!--Facebook-->
                    <p>
                    <div class="fb-like" data-href="http://shogimaker.ko31.com/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </p>
                    <!--//Facebook-->
                    <!--はてブ-->
                    <p>
<a href="http://b.hatena.ne.jp/entry/http://shogimaker.ko31.com/shogi/show/<?php echo $image['key'];?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php echo html_escape($image['title']);?> | 将棋メーカー" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                    </p>
                    <!--//はてブ-->
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /white -->
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h4>将棋メーカー</h4>
					<p>オリジナルの将棋の駒を簡単に作ることができます。</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-6">
					<h4>作者</h4>
                    <p><a href="https://twitter.com/ko31">@ko31</a></p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
