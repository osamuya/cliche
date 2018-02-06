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


                        
<!--                        <p id="xxxx">xxxx</p>-->
                        
<!--
<div class="form-group">
    <div class="input-group">
        <label class="input-group-btn">
            <span class="btn btn-primary" id="file1">
                Uploadファイルを選択
                <input type="file" name="file1" value="{{old('file1')}}" style="display:none">
            </span>
        </label>
        <input type="text" class="form-control" readonly="">
    </div>
</div>
                        
                        
                        <div class="form-group">
<label>
    <span class="btn btn-primary">
        Choose File
        
    </span>
</label>
-->
<!--
                            
                            <input type="file" name="file2" id="file2" value="{{old('file2')}}">
                        </div>
-->
<!--
                        <div class="col-md-4 control-label pb10">ファイルアップロード</div>
                        <div class="form-group">
                            <input type="file" id="file-input" name="file1" style="display: none;">
                            <div class="input-prepend">
                                <a class="btn" onclick="$('#file-input').click()">
                                    <i class="fa fa-file-image-o fa-lg"></i>
                                </a>
                            <span id="cover" class="input-xlarge uneditable-input">ファイルを選択</span>
                            </div>
                        </div>

                        <script>
                            $('#file-input').change(function() {
                              $('#cover').html($(this).val());
                            });
                        </script>
-->

                        
                        
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
                <h2 class="h2 nblog__ttl">Board</h2>
                
                <div class="board">
                    <div class="btable">
                        
                        
                        @foreach ($boardNormal as $line)
                        <?php
                            /* Sen parameter */
                            $title = mb_substr($line->submission, 0, 25);
                            $files = unserialize($line->files);
                            $multipleSelects = unserialize($line->multipleSelects);
                            $updated = date("Y.n.j(D) H:i",strtotime($line->updated_at));
                        ?>
                        
                        {{-- btable__line start --}}
                        <div class="btable__line" id="b_{{ $line->id }}">
<!--                            <a href="{{$files[0]}}" class="{{ $line->uniqeid }}">-->
                                <p class="btable__line__trim">
                                    <img src="{{$files[0]}}" class="bthumbnail50">
                                </p>
<!--                            </a>-->
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
                                
                                {{--
                                * サムネイル画像の表示から、その画像のモダールによる拡大表示まで。
                                
                                
                                --}}
                                <div class="nblog__thumbnail_board mt10">
                                <?php
                                    $i=0;
                                    foreach ($files as $num=>$imgPath) {
                                        if ($imgPath !== NULL) {
                                            echo "<p><a href='' data-toggle='modal' data-target='#IMG".$line->uniqeid."_".$i."'>";
                                            echo "<img src='".$imgPath."' class='bthumbnail50'>";
                                            echo "</a></p>";
                                ?>
                                    
                                    <!-- Modal dialog -->
                                    <div class='modal fade' id='IMG<?php echo $line->uniqeid."_".$i; ?>' tabindex='-1'>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
<!--                                                    <h4 class="modal-title">タイトル</h4>-->
                                                </div>
                                                <div class="modal-body modal__img">
                                                    <img src="{{$imgPath}}" class="nblog__thumbnail_board--modalImage">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
<!--                                                    <button type="button" class="btn btn-primary">ボタン</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal dialog -->
                                    
                                <?php
                                            $i++;
                                        }
                                    }
                                ?>
                                </div>
                                
                            </div>
                            <div class="btable__line__footer">
                                <i class="fa fa-tag fa-sm"></i>
                                @foreach ($multipleSelects as $select)
                                    @if ($select !== NULL)
                                    <a href="#">{{ $select }}</a></a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        {{-- btable__line end --}}
                        @endforeach
                        
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
