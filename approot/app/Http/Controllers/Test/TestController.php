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

    
        return "Ajax Get Response";
    }
    
    
}
