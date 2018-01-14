@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            
            <div class="nblock form mt50">
                <h2 class="h2 nblog__ttl">Contact</h2>
                
                <div class="contact confirm">
                    
                    <form class="form-horizontal" method="POST" action="/contact/sended" novalidate="novalidate">
                        {{ csrf_field() }}

                        {{-- カテゴリー --}}
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">カテゴリー</label>
                            <div class="col-md-6">
                                <p>{{$category}}</p>
                            </div>
                        </div>
                        
                        {{-- 姓名 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">ニックネーム</div>
                            <div class="col-md-6">
                               <p>{{$nickname}}</p>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <p>{{$email}}</p>
                            </div>
                        </div>
                        
                        {{-- 都道府県 --}}
                        <div class="form-group">
                            <label for="prefectures" class="col-md-4 control-label">都道府県</label>
                            <div class="col-md-6">
                                <p>{{$prefectures}}</p>
                            </div>
                        </div>
                        
                        {{-- 性別 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">性別</div>
                            <div class="col-md-6">
                                <p>{{$sex}}</p>
                            </div>
                        </div>
                        
                        {{-- 投稿 --}}
                        <div class="form-group">
                            <label for="inquery" class="col-md-4 control-label">投稿内容</label>
                            <div class="col-md-6">
                                <p>{{$submission}}</p>
                            </div>
                        </div>
                        
                        {{-- 複数選択 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">複数選択</div>
                            <div class="col-md-6">
                                <p>
                                    @foreach ($multipleSelects as $selected)
                                        {{$selected}} 
                                    @endforeach
                                </p>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" onclick="history.back()" class="btn btn-default">
                                    戻る
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    お問い合わせを送信する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                
            </div>{{--form--}}
        </div>{{--col-sm-8--}}
        
        <div class="col-sm-6">
            <div class="nside nblock mt50">
                <h2>Sidebar</h2>

            </div>
            
        </div>{{--col-sm-4--}}
    </div>
</div>
<!--cliche/approot/resources/views/index.blade.php-->
@endsection
