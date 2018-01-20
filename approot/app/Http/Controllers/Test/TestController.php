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
    
    /**=====================================
     * Ajax test
     * - text: simple string response
     * - json: return array (automatic chenged json format)
     */
    public function ajax_get_string() {
    /* text */
        return "Ajax Get text Response";
    }
    public function ajax_get_json() {
    /* json */
        $dummyArray = array(
            "title" => "jsonでデータを取得",
            "foo" => "1234",
            "bar" => "5678",
        );
        return $dummyArray;
    }
//    public function ajax_get_xml() {
//        $dummyArray = array(
//            "foo" => "1234",
//            "bar" => "5678",
//        );
//        return $dummyArray;
//    }
    
    
    
}
