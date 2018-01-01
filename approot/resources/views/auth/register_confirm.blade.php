@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-basic mt60 mb60">
                <div class="panel-heading">Sign up (confirm)</div>
                <p>以下の内容で登録します。よろしいですか？</p>
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/store" novalidate="novalidate">
                        {{ csrf_field() }}
                        
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ニックネーム</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$name}}" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Eメールアドレス</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{$email}}" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">
                                Password
                            </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" value="{{$password}}" readonly="readonly">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" onclick="history.back()" class="btn btn-default">
                                    もどる
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    この内容で登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
