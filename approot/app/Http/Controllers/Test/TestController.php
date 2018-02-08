<?php

namespace App\Http\Controllers\Test;

use BaseClass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class TestController extends Controller
{
    public static function hello() {
        return 'BaseClass test hello()!';
    }
    
    public function index()
    {
        var_dump(BaseClass::hello());
        
        
        
        
        return view("develop.text_index");
    }
    
    public function ajaxresponce() {
        
        
        return "hoge";
    }
    
    public function ajax_get_string() {
        $sum = mt_rand(1111,9999);
        return $sum;
    }
    
    public function ajax_get_json() {
    /* get:json */
        $dummyArray = array(
            "title" => "jsonでデータを取得",
            "foo" => "1234",
            "bar" => "5678",
        );
        return $dummyArray;
    }
    
    public function ajax_post_string(Request $request) {
        
        $id = $request->input('id');
        $user = $request->input('user');
        
        return "Ajax Post Response ID:".$id." USER:".$user;
    }
    
    public function interventionImage(Request $request) {
        
        // interventionImage test
        // ヘルパーでフルパスにするとか、wrapper作らないとだめですね。
        $img = Image::make('/Users/osamuyamakami/localhost/cliche/approot/storage/app/public/pics/jeeox1cykkWzx4eHIn7veFg1c4KZVePOfEtOd8xM.jpeg');
        $img->resize(100, 100);
        $img->save('/Users/osamuyamakami/localhost/cliche/approot/storage/app/public/pics/baz.jpg', 60);
//        die();
        // /storage/pics/TMPPIC-20180206-5-a79a-845b-c329.jpg
        ///Users/osamuyamakami/localhost/cliche/approot/storage/app/public/pics/jeeox1cykkWzx4eHIn7veFg1c4KZVePOfEtOd8xM.jpeg
        
        $path = base_path();
        
//        var_dump($path."/storage/app/public/pics/");
//        var_dump(storage_path()."/app/public/pics/jeeox1cykkWzx4eHIn7veFg1c4KZVePOfEtOd8xM.jpeg");
        
        $imagepath = storage_path()."/app/public/pics/jeeox1cykkWzx4eHIn7veFg1c4KZVePOfEtOd8xM.jpeg";
        $re = $this->makeImageThumbnail($imagepath, 200);
        die;
        
        
        
        return $img->response('jpg');
    }
    
    public function makeImageThumbnail($path, $thumbnailWidth=100) {
        
//        $height = Image::make($path)->height();
//        $width = Image::make($path)->width();
//        var_dump($height);
//        var_dump($width);
        
        /*比率*/
//        $thumbnailHeight = round(($thumbnailWidth * $height) / $width);
//        var_dump($thumbnailHeight);
        $img = Image::make($path);
        $img->resize($thumbnailWidth, null, function($constraint){ $constraint->aspectRatio(); });
        $pathParts = pathinfo($path);
        
        $restructurePath = $pathParts["dirname"].'/'.$pathParts["filename"]."__thumb".$thumbnailWidth.'.'.$pathParts["extension"];
        var_dump($restructurePath);
        $img->save($restructurePath);
        return true;
        
    }
}











