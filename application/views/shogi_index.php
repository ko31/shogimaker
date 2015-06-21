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

    <title>将棋メーカー</title>

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

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ko31">
    <meta name="twitter:title" content="将棋メーカー">
    <meta name="twitter:description" content="将棋メーカーはオリジナルの将棋を簡単に作ることができるWebサービスです。">
    <meta name="twitter:image:src" content="http://shogimaker.ko31.com/assets/shogi/sample.png">
    <meta name="twitter:domain" content="shogimaker.ko31.com">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/EaselJS/0.8.0/easeljs.min.js"></script>
    <script src="/assets/shogi/shogi.js"></script>
    <script src="/assets/js/scroll.js"></script>
<script>
</script>
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

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="/assets/shogi/top.png" alt="将棋メーカー">
					<h1>将棋メーカー</h1>
					<p>オリジナルの将棋の駒を簡単に作ることができます。</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Contents Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>将棋の駒を作る</h3>
				<hr>
				<p>それぞれの駒に表示する文字を入力してください。（1つの駒に2文字まで）</p>
			</div>
		</div>
        <div class="row mt">	
            <div class="col-lg-8 col-lg-offset-3">
                <div class="form-group">
                    <table id="form_type" class="table table-bordered">
                        <tr>
                            <th>タイトル</th>
                            <td>
                                <a id="title_position"></a>
                                <input type="text" class="form-control" id="title" placeholder="タイトルを入力してください" value="ダミー">
                            </td>
                        </tr>
                    </table>
                    <table id="form_type" class="table table-bordered">
                        <tr>
                            <th>駒の作り方</th>
                            <td>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="create_type" id="create_type1" class="create_type" value="1" checked>
                                        1種類の駒に同じ文字を入れる
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="create_type" id="create_type2" class="create_type" value="2">
                                        1種類の駒に別々の文字を入れる
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- 同じ文字を入れるフォーム -->
                    <table id="form1" class="table table-bordered">
                        <tr>
                            <th>王将</th>
                            <td><input type="text" class="form-control" name="k_ou" id="k_ou" placeholder="王将" value="王将" /></td>
                        </tr>
                        <tr>
                            <th>飛車</th>
                            <td><input type="text" class="form-control" name="k_hi" id="k_hi" placeholder="飛車" value="飛車" /></td>
                        </tr>
                        <tr>
                            <th>角行</th>
                            <td><input type="text" class="form-control" name="k_kaku" id="k_kaku" placeholder="角行" value="角行" /></td>
                        </tr>
                        <tr>
                            <th>金将</th>
                            <td><input type="text" class="form-control" name="k_kin" id="k_kin" placeholder="金将" value="金将" /></td>
                        </tr>
                        <tr>
                            <th>銀将</th>
                            <td><input type="text" class="form-control" name="k_gin" id="k_gin" placeholder="銀将" value="銀将" /></td>
                        </tr>
                        <tr>
                            <th>桂馬</th>
                            <td><input type="text" class="form-control" name="k_kei" id="k_kei" placeholder="桂馬" value="桂馬" /></td>
                        </tr>
                        <tr>
                            <th>香車</th>
                            <td><input type="text" class="form-control" name="k_kyo" id="k_kyo" placeholder="香車" value="香車" /></td>
                        </tr>
                        <tr>
                            <th>歩兵</th>
                            <td><input type="text" class="form-control" name="k_fu" id="k_fu" placeholder="歩兵" value="歩兵" /></td>
                        </tr>
                    </table>
                    <!-- //同じ文字を入れるフォーム -->
                    <!-- 別々の文字を入れるフォーム -->
                    <table id="form2" class="table table-bordered">
                        <tr>
                            <th>王将</th>
                            <td><input type="text" class="form-control" name="k_ou" id="k_ou" placeholder="王将" value="王将" /></td>
                        </tr>
                        <tr>
                            <th>飛車</th>
                            <td><input type="text" class="form-control" name="k_hi" id="k_hi" placeholder="飛車" value="飛車" /></td>
                        </tr>
                        <tr>
                            <th>角行</th>
                            <td><input type="text" class="form-control" name="k_kaku" id="k_kaku" placeholder="角行" value="角行" /></td>
                        </tr>
                        <tr>
                            <th>金将</th>
                            <td>
                                <input type="text" class="form-control" name="k_kin1" id="k_kin1" placeholder="金1" value="金1" />
                                <input type="text" class="form-control" name="k_kin2" id="k_kin2" placeholder="金2" value="金2" />
                            </td>
                        </tr>
                        <tr>
                            <th>銀将</th>
                            <td>
                                <input type="text" class="form-control" name="k_gin1" id="k_gin1" placeholder="銀1" value="銀1" />
                                <input type="text" class="form-control" name="k_gin2" id="k_gin2" placeholder="銀2" value="銀2" />
                            </td>
                        </tr>
                        <tr>
                            <th>桂馬</th>
                            <td>
                                <input type="text" class="form-control" name="k_kei1" id="k_kei1" placeholder="桂1" value="桂1" />
                                <input type="text" class="form-control" name="k_kei2" id="k_kei2" placeholder="桂2" value="桂2" />
                            </td>
                        </tr>
                        <tr>
                            <th>香車</th>
                            <td>
                                <input type="text" class="form-control" name="k_kyo1" id="k_kyo1" placeholder="香1" value="香1" />
                                <input type="text" class="form-control" name="k_kyo2" id="k_kyo2" placeholder="香2" value="香2" />
                            </td>
                        </tr>
                        <tr>
                            <th>歩兵</th>
                            <td>
                                <input type="text" class="form-control" name="k_fu1" id="k_fu1" placeholder="歩1" value="歩1" />
                                <input type="text" class="form-control" name="k_fu2" id="k_fu2" placeholder="歩2" value="歩2" />
                                <input type="text" class="form-control" name="k_fu3" id="k_fu3" placeholder="歩3" value="歩3" />
                                <input type="text" class="form-control" name="k_fu4" id="k_fu4" placeholder="歩4" value="歩4" />
                                <input type="text" class="form-control" name="k_fu5" id="k_fu5" placeholder="歩5" value="歩5" />
                                <input type="text" class="form-control" name="k_fu6" id="k_fu6" placeholder="歩6" value="歩6" />
                                <input type="text" class="form-control" name="k_fu7" id="k_fu7" placeholder="歩7" value="歩7" />
                                <input type="text" class="form-control" name="k_fu8" id="k_fu8" placeholder="歩8" value="歩8" />
                                <input type="text" class="form-control" name="k_fu9" id="k_fu9" placeholder="歩9" value="歩9" />
                            </td>
                        </tr>
                    </table>
                    <!-- //別々の文字を入れるフォーム -->
                    <br>
                    <button id="create" class="btn btn-lg btn-success">画像を作成する</button>
                </div>
            </div>
        </div><!-- /row -->

		<div id="result_area" class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3 id="show_title">タイトル</h3>
                <hr>
                <canvas id="result" width="520" height="226"></canvas>
        		<br>
                <form action="/shogi/save" method="post" id="saveform">
        		    <button id="save" class="btn btn-lg btn-primary">この画像を保存する</button>
        		    <input type="hidden" id="save_title" name="title" value="" />
                </form>
			</div>
		</div>
	</div><!-- /container -->
	
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

    <a id="to_title" href="#title_position"></a>

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
