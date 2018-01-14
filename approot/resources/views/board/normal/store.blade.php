@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="message-page mt50">
                <h2 class="message-pages__status mt30">投稿しました</h2>
                <p>
                <a href="/board/normal"></a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection