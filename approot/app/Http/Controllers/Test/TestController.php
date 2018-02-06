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
        var_dump($img);
        die();
        // /storage/pics/TMPPIC-20180206-5-a79a-845b-c329.jpg
        ///Users/osamuyamakami/localhost/cliche/approot/storage/app/public/pics/jeeox1cykkWzx4eHIn7veFg1c4KZVePOfEtOd8xM.jpeg
        return "foobar";
    }
}
