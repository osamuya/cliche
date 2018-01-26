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
        <meta name="viewport" content="width=device-width">
        <!--page info-->
        <title>sample</title>
<<<<<<< HEAD
        <!--AjaxもPOSTなのでCSRFトークン入れないと駄目です-->
=======
>>>>>>> 26813ffae90e453c962510d579f30a2459136175
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--og-->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://example.com/" />
        <meta property="og:title" content="sample" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="sample" />
		<!--Twitter-->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <!--css-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!--js-->
        <!--[if lt IE 10]>
        <script type="text/javascript" src="/assets/js/plugin/html5shiv.min.js"></script>
        <script type="text/javascript" src="/assets/js/plugin/respond.min.js"></script>
        <![endif]-->
        
<<<<<<< HEAD
        
        <script>
            $(function(){
                // metaのCSRFトークンを取得してAjaxにセットする
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // ここから普通のAjax
                $("#ajax").on('click',function(){
                    $.ajax({
                        url: "/api/ajax/post_string",
                        type: "post",
                        data: {
                            id: 'foo',
                            user: 'bar'
                        },
                        dataType: 'text'
=======
        <script>
            $(function(){
                $("#ajax").on('click',function(){
                    $.ajaxSetup({
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                    });
                    $.ajax({
                        url: "/api/ajax/post_string",
                        type: 'post',
                        dataType: 'text',
                        data : {
                            "id" : "9999",
                            "name" : "osamuya"
                        },
>>>>>>> 26813ffae90e453c962510d579f30a2459136175
                    }).done(function(data){
                        console.log(data);
                        $("#out").text(data);
                    });
                });
            });
        </script>
<<<<<<< HEAD
    </head>
    <body>
        <a href="#" id="ajax">Get String</a>
        <span id="out"></span>
=======
        
    </head>
    <body>
        <a href="#" id="ajax">String with post</a><br>
        <span id="out"></span>
        
>>>>>>> 26813ffae90e453c962510d579f30a2459136175
    </body>
</html>
