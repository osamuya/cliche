<?php

namespace App\Http\Controllers\Test;

use BaseClass;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
