<!doctype html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="csrf-token" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com">
	<meta property="og:image" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="">
	<link rel="shortcut icon" href=""/>

	<!--Bootstrap-->
	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<link type="text/css" href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<!--css-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
<!--	<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all">-->
	<!--js-->
	<script type="text/javascript" src="/assets/js/bundle.js"></script>

	<!--[if lt IE 10]>
	<script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="assets/js/respond.min.js"></script>
	<script type="text/javascript" src="assets/js/flexibility.js"></script>
	<![endif]-->
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar-default navbar navbar-static-top navbar-mc200">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#patern05" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <h1><img src="/assets/img/nowhite_150.png" class="navbar-mc200-logo" alt="nowhote"></h1>
            </a>
        </div>

        <div id="patern05" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right navbar-mc200-list">


                <li>
<a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><img src='/assets/img/ug-home.png' class='navbar-mc200-icon'>
Home
<b class='caret'></b></a>
<ul class='dropdown-menu'>
<li><a href='/' target='_self'>nowhite home</a>
</li><li><a href='/note/' target='_self'>nowhite note top</a>
</li><li><a href='/bookmark' target='_self'>bookmark top</a>
</li></ul></li>
<li>
<a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><img src='/assets/img/ug-login.png' class='navbar-mc200-icon'>
Login
<b class='caret'></b></a>
<ul class='dropdown-menu'>
<li><a href='/register' target='_self'>Sign up</a>
</li><li><a href='/login' target='_self'>Login</a>
</li></ul></li>

                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-menu.png" class="navbar-mc200-icon">
                        Menu<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/note/">note top</a></li>
                        <li><a href="/regist/">Sign up</a></li>
                        <li><a href="/board_free/1">自由投稿掲示板</a></li>
                        <li><a href="/board00.php">みんなの投稿</a></li>
                        <li><a href="#">みんなの投稿その２</a></li>
                        <li><a href="#">みんなの投稿その３</a></li>
                        <li><a href="/top.php">TOPページデモ</a></li>
                        <li><a href="/template.php">テンプレート</a></li>
                        <li><a href="/template_form.php">フォームテンプレート</a></li>
                        <li><a href="/calendar/calendar.php">カレンダー</a></li>
                    </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-archives.png" class="navbar-mc200-icon">
                            Archives
                        <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">トピック一覧</a></li>
                            <li><a href="#">画像一覧</a></li>
                            <li><a href="#">地域から探す</a></li>
                            <li><a href="#">トピック一覧</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-note.png" class="navbar-mc200-icon">
                        member
                        <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="/login">ログイン</a></li>
                            <li><a href="/register">サインアップ</a></li>
                            <li><a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
                            <li><a href="/home">ダッシュボード</a></li>
                            <li><a href="/usage">このサイトの使い方</a></li>
                            <li><a href="#">免責</a></li>
                            <li><a href="/contact">お問い合わせ</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
    <!--.container-->
</nav>






<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Login</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        
        <div class="col-sm-6 col-xm-6">

                <h2 class="h2 mb60">Login</h2>


                    <form class="form-horizontal" method="POST" action="http://nowhite.site/login" novalidate="novalidate">
                        <input type="hidden" name="_token" value="yvLUlQcIhchzc7DKZ7PLvOE8RDaoia2weJL5zymO">
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" > ログイン情報を記憶する
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-black">
                                    Login
                                </button>
                                <br><br>
                                <a href="http://nowhite.site/password/reset">
                                    パスワードを忘れた
                                </a>
                            </div>
                        </div>
                    </form>



        </div>
    </div>
</div>

<footer id="footer">
    <p class="copyright text-center">Copyright (C) 2017 nowhite. All rights reserved.</p>
</footer>

</body>
</html>
