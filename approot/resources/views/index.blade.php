
@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
@include('block.jumbotron')


<div class="container">

    
    <div class="row">
        
        <div class="col-sm-9">

        <div class="nblog nblock">
            <h2 class="h2 nblog__ttl">hogehoge</h2>
            <div class="nblog__text">
                略歴[編集]
                旧東ドイツのドレスデンに生まれる。地元の芸術アカデミーで1951年から56年まで絵画を学ぶが、共産主義体制に制約を感じ、ベルリンの壁によって東西ドイツの行き来が禁止される寸前の1961年、西側のデュッセルドルフに移住。デュッセルドルフ芸術大学に入学。独自の作風を展開していく。1971年からデュッセルドルフ芸術大学教授を15年以上にわたり務めた。2012年、競売大手サザビーズがロンドンで行った競売で、エリック・クラプトンが所有していたゲルハルト・リヒターの抽象画「アプストラクテス・ビルト（809-4）」が約2132万ポンド（約26億9000万円）で落札された。生存する画家の作品としては史上最高額。
                作風[編集]
                初期の頃から製作されているフォト・ペインティングは、新聞や雑誌の写真を大きくカンバスに描き写し、画面全体をぼかした手法である。モザイクのように多くの色を並べた「カラー・チャート」、カンバス全体を灰色の絵具で塗りこめた「グレイ・ペインティング」、様々な色を折りこまれた「アブストラクト・ペインティング」、幾枚ものガラスを用いて周囲の風景の映り込む作品など、多様な表現に取り組んでいる。これらの基礎資料であるかのような五千枚以上のドローイングや写真からなる数百を越えるパネルからなる作品として、「アトラス」がある。これはアビ・ヴァールブルクの「ムネモシュネ・アトラス」の影響を受けた物である。初期の作品は主として油彩であったが、近年ではエナメルや印刷技術を用いた物が多くなっている。
            </div>
            <div class="nblog__footer">Date: 2017.12.12(tue)</div>
        </div>
        
            
        </div>
        <div class="col-sm-3">
            <h2>hogehoge</h2>
        </div>
    </div>

</div>
{{ $parameter->hello }}
<!--/Users/osamuyamakami/localhost/cliche/approot/resources/views/index.blade.php-->
@endsection

