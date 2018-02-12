@inject('parameter', 'App\Http\Controllers\SetParameter')
@inject('normalboard', 'App\Http\Controllers\Board\normalController')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">

            
<?php
            
//var_dump($boardNormal[0]->id);
//var_dump($boardNormal[0]->uniqeid);
//var_dump($boardNormal[0]->category);
//var_dump($boardNormal[0]->nickname);
//var_dump($boardNormal[0]->email);
//var_dump($boardNormal[0]->prefectures);
//var_dump($boardNormal[0]->sex);
//var_dump($boardNormal[0]->submission);
//var_dump($boardNormal[0]->files);
//var_dump($boardNormal[0]->multipleSelects);
//var_dump($boardNormal[0]->remark);
//var_dump($boardNormal[0]->status);
//var_dump($boardNormal[0]->delflag);
//var_dump($boardNormal[0]->created_at);
//var_dump($boardNormal[0]->updated_at);
            
            $title = mb_substr($boardNormal[0]->submission, 0, 30);
            $files = unserialize($boardNormal[0]->files);
?>
            
            
            <div class="nblog nblock mt50">
                <h2 class="h2 nblog__ttl">
                    <p class="btable__line__trim">
                        <?php $imagePath80 = $normalboard->makeThumbnailPath($files[0], 80); ?>
                        <img src="{{$imagePath80}}" class="bthumbnail50">
                    </p>
                    {{ $title }}...
                </h2>
                <div class="btable__line__header_meta">
                    <ul>
                        <li><i class="fa fa-user-circle"></i> <a href="aonuma.mori@gmail.com"><strong>{{ $boardNormal[0]->nickname }}</strong></a></li>
                        <li><i class="fa fa-location-arrow fa-sm"></i><a href="#">{{ $boardNormal[0]->prefectures }}</a></li>
                        <li><i class="fa fa-transgender"></i>{{ $boardNormal[0]->sex }}</li>
                        <li><i class="fa fa-bars fa-sm"></i><a href="#">{{ $boardNormal[0]->category }}</a></li>
                        <li class="2018-02-08 09:08:12"><i class="fa fa-table fa-sm"></i> {{ $boardNormal[0]->updated_at }}</li>

                    </ul>
                </div>
                
                <div class="nblog__text">{{ $boardNormal[0]->submission }}</div>


                    
                    
                    
                                <!-- Thumbnail & Modal dialog  nblog__thumbnail_board-->
                                <div class="nblog__thumbnail_board mt10">
                                <?php
                                    $i=0;
                                    foreach ($files as $num=>$imgPath) {
                                        if ($imgPath !== NULL) {
//                                            var_dump($imgPath."<br>");
                                            $imagePath80 = $normalboard->makeThumbnailPath($imgPath, 80);
//                                            var_dump($imagePath80."<br>");
                                            echo "<p><a href='' data-toggle='modal' data-target='#IMG".$boardNormal[0]->uniqeid."_".$i."'>";
                                            echo "<img src='".$imagePath80."' class='bthumbnail50'>";
                                            echo "</a></p>";
//                                            $imagePath80 = "";
                                ?>
                                    
                                    <!-- Modal dialog -->
                                    <div class='modal fade' id='IMG<?php echo $boardNormal[0]->uniqeid."_".$i; ?>' tabindex='-1'>
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
                    
                            <!-- reply Edit Delete pannel -->
                            <div class="mt30">
                                
                                <div class="reply__board">
                                    <div class="btable__line__header_meta">
                                        <ul>
                                            <li><i class="fa fa-user-circle"></i><strong>{{ $boardNormal[0]->nickname }}</strong></li>
                                            <li><i class="fa fa-transgender"></i></i>{{ $boardNormal[0]->sex }}</li>
                                            <li class="{{ $boardNormal[0]->created_at }}"><i class="fa fa-table fa-sm"></i> {{ $boardNormal[0]->updated_at }}</li>
                                        </ul>
                                
                                        <div class="btable__line__replytext pt10 pb10">
                                            replayreplayreplayreplayreplayreplayreplayreplayreplay
                                        </div>
                                        <div class="btable__line__repfooter">
                                            <a class="btn btn-default" data-toggle="modal" data-target="#xxxxx">
                                              編集・削除
                                            </a>
                                            <div class="modal fade" id="xxxxx" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                                            <h4 class="modal-title">タイトル</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            本文
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                                            <button type="button" class="btn btn-primary">ボタン</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                    <div class="btable__line__header_meta">
                                        <ul>
                                            <li><i class="fa fa-user-circle"></i><strong>{{ $boardNormal[0]->nickname }}</strong></li>
                                            <li><i class="fa fa-transgender"></i></i>{{ $boardNormal[0]->sex }}</li>
                                            <li class="{{ $boardNormal[0]->created_at }}"><i class="fa fa-table fa-sm"></i> {{ $boardNormal[0]->updated_at }}</li>
                                        </ul>
                                
                                        <div class="btable__line__replytext pt10 pb10">
                                            replayreplayreplayreplayreplayreplayreplayreplayreplay
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="reply__form mt30 cf">
                                    <h4>この投稿にReply</h4>
                                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="/board/normal/reply/{{ $boardNormal[0]->uniqeid }}" novalidate="novalidate">
                                        {{ csrf_field() }}

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
                                        
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    投稿内容を確認する
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- end reply Edit Delete pannel -->

                <div class="nblog__footer">
                    <ul>
                        <li>Date 2017-12-27(sun)</li>
                        <li>タグ</li>
                    </ul>
                </div>
            </div>{{--nblog--}}
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
<!--cliche/approot/resources/views/index.blade.php-->
@endsection
