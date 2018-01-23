@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="errorpage mt50">
                <h2 class="error-status mt30">メンテナンス</h2>
                <p class="mt60">
                現在メンテナンス中です。<br>復旧までいましばらくお待ち下さい。
                <!--503-->
                </p>
            </div>
        </div>
    </div>
</div>
@endsection