@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="message-page mt50">
                <h2 class="message-pages__status mt30">投稿完了</h2>
                <p>
                    投稿が完了しました。
                    <ul>
                        <li><a href="/board/normal">掲示板に戻る</a></li>
                        <li><a href="/">トップに戻る</a></li>
                    </ul>
                
                </p>
            </div>
        </div>
    </div>
</div>
@endsection