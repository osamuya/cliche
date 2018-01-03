@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>My Informations addition</h4>
            
           <div class="myinfo-update basicform mt40">
               <h5>基本情報</h5>
                <form class="form-horizontal" method="POST" action="/regist_confirm" novalidate="novalidate">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">ニックネーム</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ $username }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Eメールアドレス</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ $useremail }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">お名前（姓）</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="family_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">お名前（名）</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="first_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">電話番号</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="main_telphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">携帯電話番号</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="mobile_telphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">郵便番号</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control zipcode3" name="zipcode3"> - <input type="text" class="form-control zipcode4" name="zipcode4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">都道府県</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="prefectures">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">住所</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    
                    <h5>本人情報</h5>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">生年月日</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control birthday_year birthday" name="birthday_year"> 年
                            <input type="text" class="form-control birthday_month birthday" name="birthday_month"> 月
                            <input type="text" class="form-control birthday_day birthday" name="birthday_day"> 日
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">性別</label>
                        <div class="col-md-6">
                            <label>男 <input type="radio" class="" name="sex" value="man"></label>　　
                            <label>女 <input type="radio" class="" name="sex" value="woman"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">血液型</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control blood_type" name="blood_type"> 型
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">好きな食べ物</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="foods">
                        </div>
                    </div>

                    
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                更新
                            </button>
                        </div>
                    </div>
                </form>
               
               Created at: {{ $user_createdat }}<br>
               Updated at: {{ $user_updatedat }}<br>
               
            </div>
            
        </div>
        
        <div class="col-sm-4">
            <h4>Index</h4>
            <div class="panel panel-default panel-basic">
                <div class="panel-heading">Member Index</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="/home">Dashboard</a></li>
                        <li><a href="/home/add/information">Add My Informations</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection