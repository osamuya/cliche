@inject('parameter', 'App\Http\Controllers\SetParameter')
@inject('normalboard', 'App\Http\Controllers\Board\normalController')
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
                            <label for="category" class="col-md-4 control-label pb10">カテゴリー</label>
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
                            <label for="nickname" class="col-md-4 control-label pb10">ニックネーム</label>
                            <div class="col-md-12">
                                <input id="nickname" type="text" class="form-control nickname" name="nickname" value="{{old('nickname')}}">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('nickname')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label pb10">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="user@example.com">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('email')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 都道府県 --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label pb10">都道府県</label>
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
                            <div class="col-md-4 control-label pb10">性別</div>
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
                            <label for="submission" class="col-md-4 control-label pb10">投稿内容</label>
                            <div class="col-md-12">
                                <textarea name="submission">{{old('submission')}}</textarea>
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('submission')}}</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- 画像アップ --}}
                        
                        <div class="input-group mb10">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none" name="file1">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly="" value="">
                        </div>
                        <div class="input-group mb10">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none" name="file2">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly="" value="">
                        </div>
                        <div class="input-group mb10">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none" name="file3">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly="" value="">
                        </div>
                        <div class="input-group mb10">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none" name="file4">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly="" value="">
                        </div>
                        <div class="input-group mb10">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none" name="file5">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly="" value="">
                        </div>
                        
                        <div class="errorMessage">
                            <p class="validationsError">{{$errors->first('file1')}}</p>
                        </div>

                        
                        
                        {{-- 複数選択 --}}
                        <div class="form-group">
                            <div class="col-md-4 control-label pb10">アンケート</div>
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
                        
                        {{-- 編集・削除キー --}}
                        <div class="form-group">
                            <label for="editkey" class="col-md-4 control-label pb10">編集・削除キー</label>
                            <div class="col-md-12">
                                <input id="editkey" type="text" class="form-control editkey" name="editkey" value="{{old('editkey')}}" placeholder="Yn2uNcK6">
                                <div class="errorMessage">
                                    <p class="validationsError">{{$errors->first('editkey')}}</p>
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
        
        {{--/////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        /////////////////////////////////////////////////////
        /////////////////////////////////////////////////--}}
        
        <div class="col-sm-6">
            <div class="nside nblock mt50">
                <h2 class="h2 nblog__ttl">Board</h2>
                
                <div class="board">
                    <div class="btable">
                        
                        @if (count($boardNormal) > 0)
                        @foreach ($boardNormal as $line)
                        <?php
                            /* Set parameter */
                            $title = mb_substr($line->submission, 0, 25);
                            $files = unserialize($line->files);
                            $multipleSelects = unserialize($line->multipleSelects);
                            $updated = date("Y.n.j(D) H:i",strtotime($line->updated_at));
                            $replyURI = "/board/normal/reply/".strtolower($line->uniqeid);
                        ?>
                        
                        {{--
                            btable__line start
                        --}}
                        <div class="btable__line" id="b_{{ $line->id }}">
                            
                            <p class="btable__line__trim">
                                <?php $imagePath80 = $normalboard->makeThumbnailPath($files[0], 80); ?>
                                <img src="{{$imagePath80}}" class="bthumbnail50">
                            </p>
                            <div class="btable__line__header">
                                <div class="btable__line__header_title">
                                    <!--{{ $line->uniqeid }}-->
                                    <a name="{{ $line->uniqeid }}" class="opener">{{ $title }}...</a>
                                </div>
                                <div class="btable__line__header_meta">
                                    <ul>
                                        <li><i class="fa fa-user-circle"></i> <a href="{{ $line->email }}"><strong>{{ $line->nickname }}</strong></a></li>
                                        <li><i class="fa fa-location-arrow fa-sm"></i></i><a href="#">{{ $line->prefectures }}</a></li>
                                        <li><i class="fa fa-transgender"></i></i>{{ $line->sex }}</li>
                                        <li><i class="fa fa-bars fa-sm"></i><a href="#">{{ $line->category }}</a></li>
                                        <li class="{{ $line->created_at }}"><i class="fa fa-table fa-sm"></i> {{ $updated }}</li>
                                        {{--
                                            remark: {{ $line->remark }}<br>
                                            status: {{ $line->status }}<br>
                                            delflag: {{ $line->delflag }}<br>
                                            created_at: {{ $line->created_at }}<br>
                                        --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="btable__line__contents" style="display:none" id="{{ $line->uniqeid }}">
                                {!! $line->submission !!}
                                
                                <!-- Thumbnail & Modal dialog  nblog__thumbnail_board-->
                                <div class="nblog__thumbnail_board mt10">
                                <?php
                                    $i=0;
                                    foreach ($files as $num=>$imgPath) {
                                        if ($imgPath !== NULL) {
//                                            var_dump($imgPath."<br>");
                                            $imagePath80 = $normalboard->makeThumbnailPath($imgPath, 80);
//                                            var_dump($imagePath80."<br>");
                                            echo "<p><a href='' data-toggle='modal' data-target='#IMG".$line->uniqeid."_".$i."'>";
                                            echo "<img src='".$imagePath80."' class='bthumbnail50'>";
                                            echo "</a></p>";
//                                            $imagePath80 = "";
                                ?>
                                    
                                    <!-- Modal dialog -->
                                    <div class='modal fade' id='IMG<?php echo $line->uniqeid."_".$i; ?>' tabindex='-1'>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                                </div>
                                                <div class="modal-body modal__img">
                                                    <img src="{{$imgPath}}" class="nblog__thumbnail_board--modalImage">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal dialog -->
                                    
                                <?php
                                            
                                            $i++;
                                        }
                                    }
                                    $files=array();
                                ?>
                                </div><!-- end nblog__thumbnail_board -->
                                

            
                                <div class="btable__line__tagarea">
                                    <a class="btn btn-default" data-toggle="modal" href="<?php echo $replyURI; ?>">
                                        この投稿を詳しくみる
                                    </a>
                                </div>
            
            
            
            
            
            
            
                                <div class="btable__line__tagarea">
                                    <a class="btn btn-default" data-toggle="modal" data-target="#<?php echo $line->uniqeid."__edit"; ?>">
                                    削除・編集
                                    </a>
                                    <div class="modal fade" id="<?php echo $line->uniqeid."__edit"; ?>" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                
                                                <form action="/foo/bar">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                                    <h4 class="modal-title">タイトル</h4>
                                                </div>
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    
                                                    {{-- カテゴリー --}}
                                                    <div class="form-group">
                                                        <label for="category" class="col-md-4 control-label pb10">カテゴリー</label>
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
                                                        <label for="nickname" class="col-md-4 control-label pb10">ニックネーム</label>
                                                        <div class="col-md-12">
                                                            <input id="nickname" type="text" class="form-control nickname" name="nickname" value="{{old('nickname')}}">
                                                            <div class="errorMessage">
                                                                <p class="validationsError">{{$errors->first('nickname')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Email --}}
                                                    <div class="form-group">
                                                        <label for="email" class="col-md-4 control-label pb10">Email</label>
                                                        <div class="col-md-12">
                                                            <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}">
                                                            <div class="errorMessage">
                                                                <p class="validationsError">{{$errors->first('email')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- 都道府県 --}}
                                                    <div class="form-group">
                                                        <label for="email" class="col-md-4 control-label pb10">都道府県</label>
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
                                                        <div class="col-md-4 control-label pb10">性別</div>
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
                                                        <label for="submission" class="col-md-4 control-label pb10">投稿内容</label>
                                                        <div class="col-md-12">
                                                            <?php $editLineSubmission = $normalboard->lineFeedConvertToCode($line->submission); ?>
                                                            <textarea name="submission">{{ $editLineSubmission }}</textarea>
                                                            <div class="errorMessage">
                                                                <p class="validationsError">{{$errors->first('submission')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- 画像アップ --}}

                                                    <div class="input-group mb10">
                                                        <label class="input-group-btn">
                                                            <span class="btn btn-primary">
                                                                Choose File<input type="file" style="display:none" name="file1">
                                                            </span>
                                                        </label>
                                                        <input type="text" class="form-control" readonly="" value="">
                                                    </div>
                                                    <div class="input-group mb10">
                                                        <label class="input-group-btn">
                                                            <span class="btn btn-primary">
                                                                Choose File<input type="file" style="display:none" name="file2">
                                                            </span>
                                                        </label>
                                                        <input type="text" class="form-control" readonly="" value="">
                                                    </div>
                                                    <div class="input-group mb10">
                                                        <label class="input-group-btn">
                                                            <span class="btn btn-primary">
                                                                Choose File<input type="file" style="display:none" name="file3">
                                                            </span>
                                                        </label>
                                                        <input type="text" class="form-control" readonly="" value="">
                                                    </div>
                                                    <div class="input-group mb10">
                                                        <label class="input-group-btn">
                                                            <span class="btn btn-primary">
                                                                Choose File<input type="file" style="display:none" name="file4">
                                                            </span>
                                                        </label>
                                                        <input type="text" class="form-control" readonly="" value="">
                                                    </div>
                                                    <div class="input-group mb10">
                                                        <label class="input-group-btn">
                                                            <span class="btn btn-primary">
                                                                Choose File<input type="file" style="display:none" name="file5">
                                                            </span>
                                                        </label>
                                                        <input type="text" class="form-control" readonly="" value="">
                                                    </div>

                                                    <div class="errorMessage">
                                                        <p class="validationsError">{{$errors->first('file1')}}</p>
                                                    </div>



                                                    {{-- 複数選択 --}}
                                                    <div class="form-group">
                                                        <div class="col-md-4 control-label pb10">アンケート</div>
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

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                                    <button type="submit" class="btn btn-primary">編集する</button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger">削除する</button>
                                                </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                
                            </div>
                            <div class="btable__line__footer">
                                <div class="">
                                    <i class="fa fa-tag fa-sm"></i>
                                    @foreach ($multipleSelects as $select)
                                        @if ($select !== NULL)
                                        <a href="#">{{ $select }}</a></a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
        
                        </div><!-- end btable__line -->
    
                        {{--
                            btable__line end
                        --}}
                        @endforeach
                        @else
                        <!--nothing-->
                        @endif
                        

                        
                    </div>
                </div>{{--board--}}
                
            </div>{{--nblock--}}
        </div>{{--col-sm-6--}}
    </div>
</div>

<script>

</script>

<!--cliche/approot/resources/views/index.blade.php-->
@endsection
