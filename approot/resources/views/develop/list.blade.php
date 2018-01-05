@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
@include('block.topbanner')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            
            

<h1>cliche</h1>
<ul>
	<li><a href="/">Top</a></li>
    <li><a href="/list">List</a></li>
</ul>

<h2></h2>
<ul>
    <li><a href="/blog/index">Blog index</a></li>
    <li><a href="/blog/archives">Blog archives</a></li>
</ul>

<h2>Develop</h2>
    テストや実験、雛形のテストで必要なページ
    <ul>
        <li><a href="/list">list</a></li>
        <li><a href="/text/index">/text/index</a></li>
    </ul>

<h2>認証関連</h2>
    <ul>
        <li><a href="/register">Sign up</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/password/reset">Password reset</a></li>
        <li><a href="/home">home</a></li>
    </ul>
    <ul>
        <li><a href="/admin/index">Admin index</a></li>
        <li><a href="/admin/login">Admin login</a></li>
    </ul>
            
<h2>Error</h2>
    テストや実験、雛形のテストで必要なページ
    <ul>
        <li><a href="/test/403">403</a></li>
        <li><a href="/test/404">404</a></li>
        <li><a href="/test/500">500</a></li>
    </ul>
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
<!--cliche/approot/resources/views/develop/list.blade.php-->
@endsection