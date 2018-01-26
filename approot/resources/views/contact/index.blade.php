@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            
            <div class="nblock form mt50">
                <h2 class="h2 nblog__ttl">Contact</h2>
                
                <div class="contact">
                    
                    <form class="form-horizontal" method="POST" action="/contact/confirm" novalidate="novalidate">
                        {{ csrf_field() }}

                        {{-- お問い合わせカテゴリー --}}
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">カテゴリー</label>
                            <div class="col-md-6">
                                <select class="selectpicker" id="category" name="category">
                                    <optgroup>
    <option value="">選択してください</option>
    <option value="全般" @if (old('category') == '全般') selected @endif>全般</option>
    <option value="契約についてのお問い合わせ" @if (old('category') == '契約についてのお問い合わせ') selected @endif>契約についてのお問い合わせ</option>
    <option value="使い方についてのお問い合わせ" @if (old('category') == '使い方についてのお問い合わせ') selected @endif>使い方についてのお問い合わせ</option>
    <option value="ご要望" @if (old('category') == 'ご要望') selected @endif>ご要望</option>
    <option value="その他" @if (old('category') == 'その他') selected @endif>その他</option>
                                    </optgroup>
                                </select>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('category')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 姓名 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">お名前</div>
                            <div class="col-md-6">
                                <label for="surname">姓:</label>
                                <input id="surname" type="text" class="form-control surname" name="surname" value="{{old('surname')}}">
                                <label for="firstname">名:</label>
                                <input id="firstname" type="text" class="form-control firstname" name="firstname" value="{{old('firstname')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('surname')}}{{$errors->first('firstname')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 姓名カタカナ--}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">お名前（カタカナ）</div>
                            <div class="col-md-6">
                                <label for="surnamekana">セイ:</label>
                                <input id="surnamekana" type="text" class="form-control surname" name="surnamekana" value="{{old('surnamekana')}}">
                                <label for="firstnamekana">メイ:</label>
                                <input id="firstnamekana" type="text" class="form-control firstname" name="firstnamekana" value="{{old('firstnamekana')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('surnamekana')}}{{$errors->first('firstnamekana')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('email')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Email Retype--}}
                        <div class="form-group">
                            <label for="retypeemail" class="col-md-4 control-label">Email (確認)</label>
                            <div class="col-md-6">
                                <input id="retypeemail" type="email" class="form-control" name="retypeemail" value="{{old('retypeemail')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('retypeemail')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 郵便番号 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">郵便番号</div>
                            <div class="col-md-6">
                                <label for="postNumber3">〒</label>
                                <input id="postNumber3" type="text" class="form-control postNumber3" name="postNumber3" value="{{old('postNumber3')}}">
                                <label for="postNumber4"> - </label>
                                <input id="postNumber4" type="text" class="form-control postNumber4" name="postNumber4" value="{{old('postNumber4')}}">
                                <div class="errorMessage">
                                    @if($errors->has('postNumber3'))
                                        <p class="validationsError">{{ $errors->first('postNumber3') }}</p>
                                    @elseif($errors->has('postNumber4'))
                                        <p class="validationsError">{{ $errors->first('postNumber4') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        {{-- 都道府県 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">都道府県</label>
                            <div class="col-md-6">
                                <select class="selectpicker" id="prefectures" name="prefectures">
                                    <optgroup>
                                    <option value="">選択してください</option>
                                    @foreach ($parameter->prefectures as $item)
                                        <?php
                                            if (old('prefectures') == $item[0]) {
                                                $selected = "selected";
                                            } else {
                                                $selected = "";
                                            }
                                        ?>
                                        <option value="{{ $item[0] }}" <?php echo $selected; ?>>{{ $item[0] }}</option>
                                        
                                    @endforeach
                                    </optgroup>
                                </select>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('prefectures')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 市町村区 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">市町村区</label>
                            <div class="col-md-6">
                                <input id="municipality" type="text" class="form-control" name="municipality" value="{{old('municipality')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('municipality')}}</p>
                                </div>
                            </div>
                        </div>

                        {{-- 住所 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">住所</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{old('address')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('address')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 電話番号(main) --}}
                        <div class="form-group">
                            <label for="telphoneAreacode" class="col-md-4 control-label">電話番号</label>
                            <div class="col-md-6">
                                <input id="telphoneAreacode" type="text" class="form-control telphoneAreacode" name="telphoneAreacode" value="{{old('telphoneAreacode')}}">
                                <label for="telphoneCitycode"> - </label>
                                <input id="telphoneCitycode" type="text" class="form-control telphoneCitycode" name="telphoneCitycode" value="{{old('telphoneCitycode')}}">
                                <label for="telphoneSubscriber"> - </label>
                                <input id="telphoneSubscriber" type="text" class="form-control telphoneSubscriber" name="telphoneSubscriber" value="{{old('telphoneSubscriber')}}">
                                <div class="errorMessage">
<!--
                                    <p class="validationsError">{{$errors->first('telphoneAreacode')}}</p>
                                    <p class="validationsError">{{$errors->first('telphoneCitycode')}}</p>
                                    <p class="validationsError">{{$errors->first('telphoneSubscriber')}}</p>
-->
                                    
@if($errors->has('telphoneAreacode'))
    <p class="validationsError">{{ $errors->first('telphoneAreacode') }}</p>
@elseif($errors->has('telphoneCitycode'))
    <p class="validationsError">{{ $errors->first('telphoneCitycode') }}</p>
@elseif($errors->has('telphoneSubscriber'))
    <p class="validationsError">{{ $errors->first('telphoneSubscriber') }}</p>
@endif
                                </div>
                            </div>
                        </div>

                        {{-- 電話番号(2) --}}
                        <div class="form-group">
                            <label for="mobilephoneAreacode" class="col-md-4 control-label">電話番号 (携帯)</label>
                            <div class="col-md-6">
                                <input id="mobilephoneAreacode" type="text" class="form-control mobilephoneAreacode" name="mobilephoneAreacode" value="{{old('mobilephoneAreacode')}}">
                                <label for="mobilephoneCitycode"> - </label>
                                <input id="mobilephoneCitycode" type="text" class="form-control mobilephoneCitycode" name="mobilephoneCitycode" value="{{old('mobilephoneCitycode')}}">
                                <label for="mobilephoneSubscriber"> - </label>
                                <input id="mobilephoneSubscriber" type="text" class="form-control mobilephoneSubscriber" name="mobilephoneSubscriber" value="{{old('mobilephoneSubscriber')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('mobilephoneAreacode')}}</p>
                                    <p class="validationsError">{{$errors->first('mobilephoneCitycode')}}</p>
                                    <p class="validationsError">{{$errors->first('mobilephoneSubscriber')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 性別 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">性別</div>
                            <div class="col-md-6">
                                <label for="man">男</label>
                                <input id="man" type="radio" class="" name="sex" value="男" @if (old('sex') == '男') checked @endif>
                                <label for="woman">女</label>
                                <input id="woman" type="radio" class="" name="sex" value="女" @if (old('sex') == '女') checked @endif>
                                <label for="else">どちらでもない</label>
                                <input id="else" type="radio" class="" name="sex" value="どちらでもない" @if (old('sex') == 'どちらでもない') checked @endif>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('sex')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- お問い合わせ --}}
                        <div class="form-group">
                            <label for="inquery" class="col-md-4 control-label">お問い合わせ</label>
                            <div class="col-md-6">
                                <textarea name="inquery">{{old('inquery')}}</textarea>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('inquery')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- アンケート --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">アンケート</div>
                            <div class="col-md-6">
                                <p>興味のある項目にチェックを入れてください</p>
                                <input type="checkbox" name="enquete01" class="" value="インターネット">
                                <label for="enquete">インターネット</label>&nbsp;
                                <input type="checkbox" name="enquete02" class="" value="不動産">
                                <label for="enquete">不動産</label>&nbsp;
                                <input type="checkbox" name="enquete03" class="" value="広告・メディア">
                                <label for="enquete">広告・メディア</label>&nbsp;
                                <input type="checkbox" name="enquete04" class="" value="政治・法律">
                                <label for="enquete">政治・法律</label>&nbsp;
                                <input type="checkbox" name="enquete05" class="" value="芸術・文学・音楽">
                                <label for="enquete">芸術・文学・音楽</label>&nbsp;
                            </div>
                        </div>
                        
                        {{-- 同意 --}}
                        <div class="form-group">
                            <label for="inquery" class="col-md-4 control-label">同意項目</label>
                            <div class="col-md-6">
                                <p>個人情報保護法とコンプライアンスに同意しますか？</p>
                                <input type="checkbox" name="agreement" id="agreement" class="agreement" value="true" @if (old('agreement') == 'true') checked @endif>&nbsp;<label for="agreement">同意する</label>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('agreement')}}</p>
                                </div>
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    確認
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
