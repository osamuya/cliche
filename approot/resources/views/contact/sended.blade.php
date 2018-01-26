@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="fullwidth mt50">
                <h2 class="main-text mt30">送信完了</h2>
                <p class="mt60">
                お問い合わせが送信されました。
                </p>
                <p class="mt60">
                    <a href="/">TOPへ戻る</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection