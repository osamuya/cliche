@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            
            <div class="nblock form mt50">
                <h2 class="h2 nblog__ttl">Submit</h2>
                
                <div class="board">
                    
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/board/normal/confirm" novalidate="novalidate">
                        {{ csrf_field() }}

                        {{-- カテゴリー --}}
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">カテゴリー</label>
                            <div class="col-md-12">
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
                        
                        {{-- ニックネーム --}}
                        <div class="form-group">
                            <label for="nickname" class="col-md-4 control-label">ニックネーム</label>
                            <div class="col-md-12">
                                <input id="nickname" type="text" class="form-control nickname" name="nickname" value="{{old('nickname')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('nickname')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('email')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 都道府県 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">都道府県</label>
                            <div class="col-md-12">
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
                        
                        {{-- 性別 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">性別</div>
                            <div class="col-md-12">
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
                        
                        {{-- 投稿 --}}
                        <div class="form-group">
                            <label for="submission" class="col-md-4 control-label">投稿内容</label>
                            <div class="col-md-12">
                                <textarea name="submission">{{old('submission')}}</textarea>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('submission')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 画像アップ --}}
                        <div class="form-group">
                            <input type="file" name="file1">
                            <input type="file" name="file1">
                        </div>
                        
                        
                        
                        {{-- 複数選択 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label">アンケート</div>
                            <div class="col-md-12">
                                <p>興味のある項目にチェックを入れてください</p>
                                <input type="hidden" name="multipleSelectSum" value="5">
                                <input type="checkbox" name="multipleSelect0" class="" value="インターネット">
                                <label for="enquete">インターネット</label>&nbsp;
                                <input type="checkbox" name="multipleSelect1" class="" value="不動産">
                                <label for="enquete">不動産</label>&nbsp;
                                <input type="checkbox" name="multipleSelect2" class="" value="広告・メディア">
                                <label for="enquete">広告・メディア</label>&nbsp;
                                <input type="checkbox" name="multipleSelect3" class="" value="政治・法律">
                                <label for="enquete">政治・法律</label>&nbsp;
                                <input type="checkbox" name="multipleSelect4" class="" value="芸術・文学・音楽">
                                <label for="enquete">芸術・文学・音楽</label>&nbsp;
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('multipleSelect0')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    投稿内容を確認する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                
                
                
                
            </div>{{--form--}}
        </div>{{--col-sm-6--}}
        
        <div class="col-sm-6">
            <div class="nside nblock mt50">
                <h2>Board</h2>

            </div>
            
        </div>{{--col-sm-4--}}
    </div>
</div>
<!--cliche/approot/resources/views/index.blade.php-->
@endsection
