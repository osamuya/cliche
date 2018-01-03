@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="errorpage mt50">
                <h2 class="error-status mt30">404</h2>
                <p>
                ページがみつかりません。
                </p>
            </div>
        </div>
    </div>
</div>
@endsection