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
    /* get:text */
        return "Ajax Get text Response";
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
//    public function ajax_get_xml() {
//        $dummyArray = array(
//            "foo" => "1234",
//            "bar" => "5678",
//        );
//        return $dummyArray;
//    }
    
    public function ajax_post_string(Request $request) {
    /* post:json */
        var_dump($request->input('id'));
        var_dump($request->input('name'));
        
        return "Ajax Post text Response";
    }
    
    public function ajax_post_json(Request $request) {
    /* post:json */
        
        $info = array(
            "id" => $request->input('id'),
            "name" => $request->input('name'),
            "description" => "ajax json test",
            "status" => "active",
        );
        return $info;
    }
}
