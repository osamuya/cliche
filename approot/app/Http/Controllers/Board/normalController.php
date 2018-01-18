<?php

namespace App\Http\Controllers\Board;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use BaseClass;
use App\BoardNormal;
use Illuminate\Support\Facades\DB;


/**
 * Board
 * Route::match(['get', 'post'],'/board/normal', 'Board\normalController@index');
 * Route::post('/board/normal/confirm', 'Board\normalController@confirm');
 * Route::post('/board/normal/stored', 'Board\normalController@store');
 *
 */

class normalController extends Controller
{
    //
    
    public function index(Request $request)
    {
        /* Logging */
        $user = Auth::user();
        if ($user !== NULL) {
            $addinfo = array(
                "userID" => $user["id"],
                "userName" => $user["email"],
                "className" => get_class($this),
                "methodName" => __METHOD__,
            );
        } else {
            $addinfo = array(
                "className" => get_class($this),
                "methodName" => __METHOD__,
            );
        }
        BaseClass::appLogger("access: /board/normal.",$addinfo);
        return view("board.normal.index");
    }
    
    
    
    public function confirm(Request $request) {
        
        $this->validate($request, [
            'category' => 'required',
            'nickname' => 'required|max:32',
            'email' => 'required|email',
            'prefectures' => 'required|max:16',
            'sex' => 'required',
            'submission' => 'required|max:3000',
            'multipleSelect0' => 'required_without_all:,multipleSelect1,multipleSelect2,multipleSelect3,multipleSelect4'
        ],[
            'multipleSelect0.required_without_all' => 'どれか一つ以上を選択してください。',
        ]);

        /* debug */
//        var_dump($request->input('category'));
//        var_dump($request->input('nickname'));
//        var_dump($request->input('email'));
//        var_dump($request->input('prefectures'));
//        var_dump($request->input('sex'));
//        var_dump($request->input('submission'));
//        var_dump($request->input('multipleSelectSum'));
//        var_dump($request->input('multipleSelect0'));
//        var_dump($request->input('multipleSelect1'));
//        var_dump($request->input('multipleSelect2'));
//        var_dump($request->input('multipleSelect3'));
//        var_dump($request->input('multipleSelect4'));
        
        /* Image file upload */
        $originalPath = $request->file('file1')->store('public/pics');
        
        $changePath = BaseClass::FilenameUniqueSerialNumber($originalPath);
//        $originalPath = storage_path($originalPath);
//        $changePath = storage_path($path);
        var_dump(storage_path($originalPath));
        var_dump(storage_path($changePath ));
        @rename (storage_path($originalPath), storage_path($changePath));
        
        

        
        /* Serialize for checkbox values */
        $multipleSelects = array();
        for($i=0;$i<$request->input('multipleSelectSum');$i++) {
             array_push($multipleSelects, $request->input('multipleSelect'.$i));
        }
        $serializedMultipleSelects = serialize($multipleSelects);
        
        /* save on sesshon */
        $request->session()->put('category', $request->input('category'));
        $request->session()->put('nickname', $request->input('nickname'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('prefectures', $request->input('prefectures'));
        $request->session()->put('sex', $request->input('sex'));
        $request->session()->put('submission', $request->input('submission'));
        $request->session()->put('multipleSelects', $serializedMultipleSelects);
        
        $request->session()->put('sended', 'true');
        
        /* view */
        return view("board.normal.confirm")->with([
            'category' => $request->input('category'),
            'nickname' => $request->input('nickname'),
            'email' => $request->input('email'),
            'prefectures' => $request->input('prefectures'),
            'sex' => $request->input('sex'),
            'submission' => $request->input('submission'),
            'multipleSelects' => $multipleSelects,
        ]);
    }
    
    public function store(Request $request) {
        
        if ($request->session()->get('sended') == 'true') {
            $request->session()->put('sended', 'false');
        } else {
            return view("board.normal.index");
        }
        
        $saveString = $request->session()->get('category')."\t";
        $saveString .= $request->session()->get('nickname')."\t";
        $saveString .= $request->session()->get('email')."\t";
        $saveString .= $request->session()->get('prefectures')."\t";
        $saveString .= $request->session()->get('sex')."\t";
        $saveString .= $request->session()->get('submission')."\t";
        $saveString .= $request->session()->get('multipleSelects')."\t";

        /* Logging */
        $user = Auth::user();
        if ($user !== NULL) {
            $addinfo = array(
                "userID" => $user["id"],
                "userName" => $user["email"],
                "className" => get_class($this),
                "methodName" => __METHOD__,
                "line" => $saveString,
            );
        } else {
            $addinfo = array(
                "className" => get_class($this),
                "methodName" => __METHOD__,
                "line" => $saveString,
            );
        }
        BaseClass::appLogger("Normalboard stored: /board/normal/stored.",$addinfo);
        
        /* Data set */
        $uniqeid = BaseClass::makeUniqeid("BNA");
        
//        App\BoardNormal
        /* save on database */
        $boardNormal = new BoardNormal();
        $boardNormal->category = $request->session()->get('category');
        $boardNormal->uniqeid = $uniqeid;
        $boardNormal->nickname = $request->session()->get('nickname');
        $boardNormal->email = $request->session()->get('email');
        $boardNormal->prefectures = $request->session()->get('prefectures');
        $boardNormal->sex = $request->session()->get('sex');
        $boardNormal->submission = $request->session()->get('submission');
        $boardNormal->multipleSelects = $request->session()->get('multipleSelects');
        $boardNormal->save();
        
        return view("board.normal.store");
    }
    
}


