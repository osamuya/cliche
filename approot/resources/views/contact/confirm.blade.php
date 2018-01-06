@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            
            <div class="nblock form mt50">
                <h2 class="h2 nblog__ttl">Contact</h2>
                
                <div class="contact confirm">
                    
                    <form class="form-horizontal" method="POST" action="/contact/sended" novalidate="novalidate">
                        {{ csrf_field() }}

                        {{-- お問い合わせカテゴリー --}}
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">カテゴリー</label>
                            <div class="col-md-6">
                                <p>{{$category}}</p>
                            </div>
                        </div>
                        
                        {{-- 姓名 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">お名前</div>
                            <div class="col-md-6">
                               <p>{{$surname}} {{$firstname}}</p>
                            </div>
                        </div>
                        
                        {{-- 姓名カタカナ--}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">お名前（カタカナ）</div>
                            <div class="col-md-6">
                                <p>{{$surnamekana}} {{$firstnamekana}}</p>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <p>{{$email}}</p>
                            </div>
                        </div>
                        
                        {{-- 郵便番号 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">郵便番号</div>
                            <div class="col-md-6">
                                <p>〒{{$postNumber3}} - {{$postNumber4}}</p>
                            </div>
                        </div>
                        
                        {{-- 都道府県 --}}
                        <div class="form-group">
                            <label for="prefectures" class="col-md-4 control-label">都道府県</label>
                            <div class="col-md-6">
                                <p>{{$prefectures}}</p>
                            </div>
                        </div>
                        
                        {{-- 市町村区 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">市町村区</label>
                            <div class="col-md-6">
                                <p>{{$municipality}}</p>
                            </div>
                        </div>

                        {{-- 住所 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">住所</label>
                            <div class="col-md-6">
                                <p>{{$address}}</p>
                            </div>
                        </div>
                        
                        {{-- 電話番号(main) --}}
                        <div class="form-group">
                            <label for="telphoneAreacode" class="col-md-4 control-label">電話番号</label>
                            <div class="col-md-6">
                                <p>{{$telphoneAreacode}}-{{$telphoneCitycode}}-{{$telphoneSubscriber}}</p>
                            </div>
                        </div>

                        {{-- 電話番号(2) --}}
                        <div class="form-group">
                            <label for="mobilephoneAreacode" class="col-md-4 control-label">電話番号 (携帯)</label>
                            <div class="col-md-6">
                                <p>{{$mobilephoneAreacode}}-{{$mobilephoneCitycode}}-{{$mobilephoneSubscriber}}</p>
                            </div>
                        </div>
                        
                        {{-- 性別 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">性別</div>
                            <div class="col-md-6">
                                <p>{{$sex}}</p>
                            </div>
                        </div>
                        
                        {{-- お問い合わせ --}}
                        <div class="form-group">
                            <label for="inquery" class="col-md-4 control-label">お問い合わせ</label>
                            <div class="col-md-6">
                                <p>{{$inquery}}</p>
                            </div>
                        </div>
                        
                        {{-- アンケート --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">アンケート</div>
                            <div class="col-md-6">
                                <p>
                                    @if ($enquete01) {{$enquete01}}<br> @endif
                                    @if ($enquete02) {{$enquete02}}<br> @endif
                                    @if ($enquete03) {{$enquete03}}<br> @endif
                                    @if ($enquete04) {{$enquete04}}<br> @endif
                                    @if ($enquete05) {{$enquete05}}<br> @endif
                                </p>
                            </div>
                        </div>
                        
                        {{-- 同意 --}}
                        <div class="form-group">
                            <label for="inquery" class="col-md-4 control-label">同意項目</label>
                            <div class="col-md-6">
                                <p>
                                @if ($agreement == 'true') 同意する
                                @endif
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
        
        <div class="col-sm-4">
            <div class="nside nblock mt50">
                <h2>Sidebar</h2>

            </div>
            
        </div>{{--col-sm-4--}}
    </div>
</div>
<!--cliche/approot/resources/views/index.blade.php-->
@endsection
