@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
@include('block.jumbotron')
{{ $parameter->hello }}
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            
            <div class="nblog nblock mt50">
                <h2 class="h2 nblog__ttl">hogehoge</h2>
                <div class="nblog__header">
                    <ul>
                        <li>カテゴリー</li>
                        <li>タグ</li>
                    </ul>
                </div>
                <div class="nblog__text">
                    略歴[編集]
                    旧東ドイツのドレスデンに生まれる。地元の芸術アカデミーで1951年から56年まで絵画を学ぶが、共産主義体制に制約を感じ、ベルリンの壁によって東西ドイツの行き来が禁止される寸前の1961年、西側のデュッセルドルフに移住。デュッセルドルフ芸術大学に入学。独自の作風を展開していく。1971年からデュッセルドルフ芸術大学教授を15年以上にわたり務めた。2012年、競売大手サザビーズがロンドンで行った競売で、エリック・クラプトンが所有していたゲルハルト・リヒターの抽象画「アプストラクテス・ビルト（809-4）」が約2132万ポンド（約26億9000万円）で落札された。生存する画家の作品としては史上最高額。
                    作風[編集]
                    初期の頃から製作されている<a href="">フォト・ペインティング</a>は、新聞や雑誌の写真を大きくカンバスに描き写し、画面全体をぼかした手法である。モザイクのように多くの色を並べた「カラー・チャート」、カンバス全体を灰色の絵具で塗りこめた「グレイ・ペインティング」、様々な色を折りこまれた「アブストラクト・ペインティング」、幾枚ものガラスを用いて周囲の風景の映り込む作品など、多様な表現に取り組んでいる。これらの基礎資料であるかのような五千枚以上のドローイングや写真からなる数百を越えるパネルからなる作品として、「アトラス」がある。これはアビ・ヴァールブルクの「ムネモシュネ・アトラス」の影響を受けた物である。初期の作品は主として油彩であったが、近年ではエナメルや印刷技術を用いた物が多くなっている。
                </div>
                <div class="nblog__thumbnail">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                    <img src="https://dummyimage.com/80x80/c1c1c1/fff.png">
                </div>
                <div class="nblog__header">
                    <ul>
                        <li>Date 2017-12-27(sun)</li>
                        <li>タグ</li>
                    </ul>
                </div>
            </div>{{--nblog--}}
        </div>{{--col-sm-8--}}
        
        <div class="col-sm-4">
            <div class="nside nblock mt50">
                <h2>hogehoge</h2>
                <form class="form-horizontal" method="POST" action="/login">

                </form>
            </div>
            
        </div>{{--col-sm-4--}}
    </div>
</div>
<!--cliche/approot/resources/views/index.blade.php-->
@endsection



<!doctype html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja">
<!--<![endif]-->
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <!--page info-->
  <title>スマホde抽選TOP| タカシマヤ タイムズスクエア</title>
  <meta name="description" content="タカシマヤタイムズスクエアのスマホde抽選会のページです。プレミアムフライデーぴったりのお得なクーポンが当たります。">
  <meta name="keywords" content="抽選,キャンペーン,プレミアムフライデー,高島屋,Takashimaya,タカシマヤ, 百貨店,デパート,催情報,ファッション,イベント">
  <!--og-->
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
  <!--favicon-->
  <link rel="shortcut icon" href="">
  <!--css-->
  <link rel="stylesheet" type="text/css" href="assets/css/index.css" media="all">
  <!--js-->
  <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/easing.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/jquery.MyQRCode.js"></script>
  <script type="text/javascript" src="assets/js/jquery.captcha.js"></script>
  <!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style>
  header,footer,nav,section,article,figure,aside {
  　display:block;
  }
  </style>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-91967403-1', 'auto');
    ga('send', 'pageview');

  </script>

  <script type="text/javascript">
    // ユーザーエージェントの判定
    var ua = navigator.userAgent.toLowerCase();    // get ua
    var isiPhone = (ua.indexOf('iphone') > -1);    // iPhone
    var isiPad = (ua.indexOf('ipad') > -1); // iPad
    var isAndroid = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') > -1); // Android
    var isAndroidTablet = (ua.indexOf('android') > -1) && (ua.indexOf('mobile') == -1); // Android Tablet

    <!-- PCアクセスの場合は、スマホ・タブレットのアクセスを促す -->
    // console.log(isiPhone);
    // console.log(isiPad);
    // console.log(isAndroid);
    // console.log(isAndroidTablet);
    <!-- コメントアウト-->
    // if (isiPhone == true || isiPad == true || isAndroid == true || isAndroidTablet == true) {
    //   $("#sp_recommend").css('display','none');
    // } else {
    //   location.href = "pc.html";
    // }
  </script>

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

  <script>
//    var done_2timesFlag = 0;
//    if (done_2timesFlag == 1) {
//        alert("お一人様1日1回までとなります。\n26日(日)まで1日1回抽選できますので、またチャレンジしてください。");
//    } else {
//        // nothing
//    }
  </script>

  <script>
//    $(function(){
//        $("#ltt_start").click(function(){
//            if (done_2timesFlag == 1) {
//                alert("お一人様1日1回までとなります。\n26日(日)まで1日1回抽選できますので、またチャレンジしてください。");
//                return false;
//            } else {
//                return true;
//            }
//        });
//        return true;
//    });
  </script>
  </head>

  <body>
    <div id="d_overlay"></div>
    <div id="modalAbout_block">
        <div class="modal modal__txt">
            <h1>【応募要項】</h1>
            <h2>■キャンペーン名<h2>
            <p>タカシマヤ タイムズスクエア プレミアムフライデー スマホde抽選会</p>
        </div>
    </div>

    <!-- PCアクセスの場合は、スマホ・タブレットのアクセスを促す -->
    <!-- コメントアウト-->
    <!-- <div id="sp_recommend" style="display: none;">
        <div>スマートフォンでお楽しみください。</div>
        <div id="spuri"></div>
    </div> -->

    <!-- main -->
    <main>
        <!-- mainvisual -->
        <div class="mainvisual">
            <div class="mainvisual__img"><img src="assets/img/top_m_visual.png" alt="プレミアムフライデー　スマホde抽選会　2017年2月24日（金）→26日（日）各日午前10時→午後7時　抽選は24日（金）午前10時スタート！お楽しみに！" class="sp"></div>

            <div class="getlotArea">
              <form class="form" action="lot.php" id="lotty_start" method="post">
                  <input type="text" id="captcha" placeholder="上の数字を入力してください">
                  <input type="hidden" name="lotty_hash" value="iotNYV9ARVLDgWCW5ZXqbI7wbYodsVEJ">
                  <p id="modalAbout"><a href="javascript:void(0)">応募要項・利用規約</a>に同意の上</p>
                  <input type="submit" value="" id="ltt_start">
              </form>
              <div class="att">※おひとり様１日１回まで</div>
            </div>
        </div>
        <!-- mainvisual end -->

        <!-- greet -->
        <div class="greet sp">
          <div class="greet__txt">
            2月24日(金)～26日(日)のプレミアムフライデー週末3日間に限り、
            1日1回誰でもどこからでも参加できる『スマホde抽選会』を開催いたします。<br />
            賞品総数480本、タカシマヤ タイムズスクエア全店から素敵なプレゼントをご用意しました。
            スマホ一つでどなたでも簡単に参加できる抽選会です。1日1回のチャレンジをお楽しみください。
          </div>
        </div>
        <!-- greet end -->

    <!-- lotAcceptance -->
    <div class="lotAccept sp">
      <div class="lotAccept__ttl">
        <p>抽選受付期間</p>
      </div>
      <div class="lotAccept__txt">
        <ul>
          <li>2017年2月24日(金)　午前10時→午後7時</li>
          <li>2017年2月25日(土)　午前10時→午後7時</li>
          <li>2017年2月26日(日)　午前10時→午後7時</li>
        </ul>
      </div>
    </div>

    <div id="sp_recommend" class="pc">
        <div id="sp_recommend__txt" class="pc">本ページは、スマートフォンまたは<br />タブレットからお楽しみください。</div>
        <div id="spuri" style="display: none;" class="pc"></div>
    </div>

    <!-- クーポンリスト -->
    <div class="cpn">
        <img src="assets/img/bnr_pre.png" alt="プレミアムな週末にぴったり! こんな商品が当たるかも!?">
        <div class="notice">
            <span class="price_notice">
                ※賞品の画像はイメージです。
            </span>
        </div>

    </div>
    <div class="coupon">

    <div class="couponarea">
        <ul class="couponareaItems clearfix">
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_01.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.takashimaya.co.jp/shinjuku/" target="_blank">髙島屋</a></p>
                  <p>タカシマヤギフトカード</p>
                  <p>10,000円分</p>
                  <p>10名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_02.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="https://shinjuku.tokyu-hands.co.jp/" target="_blank">東急ハンズ</a></p>
                  <p>東急ハンズギフトカード</p>
                  <p>5,000円分</p>
                  <p>20名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_03.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="https://www.kinokuniya.co.jp/c/store/Books-Kinokuniya-Tokyo/" target="_blank">Books Kinokuniya Tokyo</a></p>
                  <p>紀伊國屋ギフトカード</p>
                  <p>1,000円分</p>
                  <p>100名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_04.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="https://www.socie.jp/beautyavenue/shinjuku.html" target="_blank">ビューティアベニュー ソシエ</a></p>
                  <p>エステティックご招待券</p>
                  <p>5名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_05.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="https://hair.socie.jp/shop/jm_shinjuku/" target="_blank">ヘアーカッティングガーデンジャック・モアザン</a></p>
                  <p>シャンプー・カット・ブロー無料御招待券 5名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_06.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.abc-cooking.co.jp/srv/web_contents/studio/studio_detail.php?studio_id=100000009" target="_blank">ABC Cooking Studio</a></p>
                  <p>ABC Cooking Studioの今すぐ食べたい基本のおかずレシピ本 50名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_07_08.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.bodies.jp/" target="_blank">ボディーズ</a></p>
                  <p>ヨガレッスン　無料チケット</p>
                  <p>20名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_07_08.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.bodies.jp/" target="_blank">ボディーズ</a></p>
                  <p>骨盤歪みお試しレッスン</p>
                  <p>15名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_09.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr">
                    <a href="http://www.whiteessence.com/shop/?clinic_code=053" target="_blank">ホワイトエッセンス</a>
                  </p>
                  <p>ベーシックホワイトニングまたはクリーニングチケット</p>
                  <p>1,000円</p>
                  <p>12名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_10.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.nitori.co.jp/" target="_blank">ニトリ</a></p>
                  <p>新宿タカシマヤ タイムズスクエア店　商品券2,000円</p>
                  <p>50名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_11.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://www.restaurants-park.jp/" target="_blank">レストランズパーク</a></p>
                  <p>レストランズパーク お食事券 1,000円分</p>
                  <p>50名様</p>
                </div>
            </li>
            <li class="couponareaItems_Items">
                <img src="assets/img/coupon_thum_12.jpg">
                <div class="couponareaItems_txt">
                  <p class="ubrdr"><a href="http://fr.mapion.co.jp/map/uc/PoiInfo?vo=mbml&grp=uniqlo&kencode=13&city_name=%E6%B8%8B%E8%B0%B7%E5%8C%BA&poi_code=10101360" target="_blank">ユニクロ</a></p>
                  <p>ユニクロ お買物券 1,000円分</p>
                  <p>100名様</p>
                </div>
            </li>
        </ul>
    </div>
</div>

    <div class="btnToTop">
      <a href="#" onclick="ga('send', 'event', 'chusen', 'click', '抽選ボタン２');"><img src="assets/img/btn_lot.png" alt=""></a>
      <p>※おひとり様１日１回まで</p>
    </div>

  </main>
  <!-- main end -->


    <!-- footer -->
    <footer class="footer">
      <div class="toPageTop footerItems__item sp"><a href="#"><img class="toppage_sankaku" src="assets/img/yazirushi.png" alt="矢印">ページトップ</a></div>
      <ul class="footerItems">
          <li class="footerItems__item sp"><a href="http://takashimaya-timessquare.jp/">トップページ<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
              <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/about/">施設案内<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
          <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/specialtyshop/">百貨店＆専門店<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
          <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/event">イベント<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
          <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/floorguide/">フロアガイド<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
          <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/access/">アクセス<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
          <li class="footerItems__item"><a href="http://takashimaya-timessquare.jp/tax/">免税手続き<img src="assets/img/yazirushi.png" alt="矢印" class="spi"></a></li>
      </ul>
    </footer>
  </body>
</html>
