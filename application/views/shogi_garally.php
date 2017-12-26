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

    <title>ギャラリー | 将棋メーカー</title>

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

    <meta property="og:title" content="将棋メーカー" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。" />
    <meta property="og:url" content="http://shogimaker.ko31.com/" />
    <meta property="og:image" content="http://shogimaker.ko31.com/assets/shogi/sample.png" />
    <meta property="og:site_name" content="将棋メーカー" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ko31">
    <meta name="twitter:title" content="将棋メーカー">
    <meta name="twitter:description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。">
    <meta name="twitter:image:src" content="http://shogimaker.ko31.com/assets/shogi/sample.png">
    <meta name="twitter:domain" content="shogimaker.ko31.com">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/EaselJS/0.8.0/easeljs.min.js"></script>
    <script src="/assets/shogi/shogi.js"></script>
    <script src="/assets/js/scroll.js"></script>
  </head>

  <body>

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
                    <h1>ギャラリー</h1>
                    <p>最近作られた将棋画像です。</p>
                    <ul>
<?php 
foreach ($images as $image):
?>
                        <li><?php echo html_escape($image['date']);?> <a href="/shogi/show/<?php echo html_escape($image['key']);?>"><?php echo html_escape($image['title']);?></a></li>
<?php 
endforeach;
?>
                    </ul>
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
    <script src="/assets/js/bootstrap.min.js"></script>

<!-- Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-1736292-45', 'auto');
ga('send', 'pageview');
</script>
<!-- //Analytics -->
  </body>
</html>
