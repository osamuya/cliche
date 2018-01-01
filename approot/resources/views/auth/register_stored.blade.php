@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/register">Sign up</a></li>
            <li class="active">Stored</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- Left Column --}}
        <div class="col-sm-6 col-xm-6">
            <h2 class="h2 mb60">Sign up complete</h2>

            <p class="">
                仮登録が完了しました。登録したEmailアドレスに認証URLが記載されています。24時間以内に認証されると本登録となります。
            </p>
        </div>
        {{-- Left Column End --}}

        {{-- Right Column --}}
        <div class="col-sm-6 col-xm-6 ">
            foobar
        </div>
        {{-- Right Column End --}}

    </div>
</div>
@endsection
