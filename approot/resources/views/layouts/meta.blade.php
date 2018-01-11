@inject('parameter', 'App\Http\Controllers\SetParameter')
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <!--page info-->
    <title>SMAPON</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--og-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <!--favicon-->
    <link rel="shortcut icon" href="">
    <!--js-->
    <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/js/easing.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.MyQRCode.js"></script>
    <script type="text/javascript" src="assets/js/jquery.captcha.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(function(){
    $("#captcha").setCaptcha({
            width:320,
            height:160,
            color:"#666666",
            size:50,
            length:4,
            hook:function(){
                    alert("認証用画像と入力された値が一致しません");
            },
            form:".form",
    });
    });
    $(".form img").addClass('captcha_img');
    </script>
    </head>