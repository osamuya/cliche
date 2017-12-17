@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.app')

@section('content')

<div class="jumbotron mjumbotron">

    <div id="carousel-mainContents" class="slide carousel" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-mainContents" data-slide-to="0" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-mainContents" data-slide-to="2" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="3" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="4" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="5" class=""></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img src="/assets/img/slide/001_1600.jpg" alt="hogehoge">
                <div class="carousel-text">
                    <h3>夏</h3>
                    <p>太陽が燦々に降り注ぐ暑い季節</p>
                    <button type="button" class="btn btn-default">春ページ詳細</button>
                </div>
            </div>
            <div class="item active">
                <img src="/assets/img/slide/002_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/003_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/004_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/005_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/006_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
        </div><!--.carousel-inner-->
    </div><!--.slide-->
</div>
{{ $parameter->hello }}

@endsection

