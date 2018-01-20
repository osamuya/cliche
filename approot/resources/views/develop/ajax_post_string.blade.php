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
                    }).done(function(data){
                        console.log(data);
                        $("#out").text(data);
                    });
                });
            });
        </script>
        
    </head>
    <body>
        <a href="#" id="ajax">String with post</a><br>
        <span id="out"></span>
        
    </body>
</html>
