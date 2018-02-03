<?php

namespace App\Http\Controllers\Board;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use BaseClass;
use App\BoardNormal;
use Illuminate\Support\Facades\DB;

/* monolog */
use Monolog\Logger;
use Illuminate\Support\Facades\Log;

/**
 * Board
 * Route::match(['get', 'post'],'/board/normal', 'Board\normalController@index');
 * Route::post('/board/normal/confirm', 'Board\normalController@confirm');
 * Route::post('/board/normal/stored', 'Board\normalController@store');
 *
 */
class normalController extends Controller
{
    
    public function __construct() {

    }
    
    public function index(Request $request)
    {
        
        /* Display Thread bulletin board */
        
//        $boardNormal = new BoardNormal;
//        $boardNormal = BoardNormal::where('delflag',0);
        $boardNormal = BoardNormal::all()->where('delflag',0);
        
        var_dump($boardNormal);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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
            'file1' => 'file|image|mimes:jpeg,bmp,png|dimensions:min_width=100,min_height=100,max_width=3600,max_height=3600',
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
        
        /**====================================================
         * Image file upload
         * Temporarily save and use only for thumbnail display
         *
         * Simple example...
         * $changePath: app/public/pics/TMPPIC-20180121-5-a63f-81f2-e3ca.jpg
         * $publishedPath: /storage/pics/TMPPIC-20180121-5-a63f-81f2-e3ca.jpg
         */
        $imagesPaths = array();
        if ($request->file('file1')) {
            $publishedPath1 = $this->uploadFilesTemporaryProcessing($request->file('file1'),$prefix="TMPPIC");
            array_push($imagesPaths, $publishedPath1);
        }
        if ($request->file('file2')) {
            $publishedPath2 = $this->uploadFilesTemporaryProcessing($request->file('file2'),$prefix="TMPPIC");
            array_push($imagesPaths, $publishedPath2);
        }
        if ($request->file('file3')) {
            $publishedPath3 = $this->uploadFilesTemporaryProcessing($request->file('file3'),$prefix="TMPPIC");
            array_push($imagesPaths, $publishedPath3);
        }
        if ($request->file('file4')) {
            $publishedPath4 = $this->uploadFilesTemporaryProcessing($request->file('file4'),$prefix="TMPPIC");
            array_push($imagesPaths, $publishedPath4);
        }
        if ($request->file('file5')) {
            $publishedPath5 = $this->uploadFilesTemporaryProcessing($request->file('file5'),$prefix="TMPPIC");
            array_push($imagesPaths, $publishedPath5);
        }
//        var_dump($imagesPaths);
        /* Serialize for files */
        $serializedFiles = serialize($imagesPaths);
        var_dump($serializedFiles);
//        die();
        
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
        $request->session()->put('files', $serializedFiles);
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
            'files' => $imagesPaths,
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
        $saveString .= $request->session()->get('files');
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
        
        Log::info('なんらかのメッセージとか。 ID:');
        
        
        
        
        
        /* Data set */
        $uniqeid = BaseClass::makeUniqeid("BNA");
        
        /* save on database */
        $boardNormal = new BoardNormal();
        $boardNormal->category = $request->session()->get('category');
        $boardNormal->uniqeid = $uniqeid;
        $boardNormal->nickname = $request->session()->get('nickname');
        $boardNormal->email = $request->session()->get('email');
        $boardNormal->prefectures = $request->session()->get('prefectures');
        $boardNormal->sex = $request->session()->get('sex');
        $boardNormal->submission = $request->session()->get('submission');
        $boardNormal->files = $request->session()->get('files');
        $boardNormal->multipleSelects = $request->session()->get('multipleSelects');
        $boardNormal->remark = "";
        $boardNormal->status = 1;
        $boardNormal->delflag = 0;
        $boardNormal->save();
        
        /* All complete */
        return view("board.normal.store");
    }
    
    
    
    
    
    
    /** Image uploader Utility
     *
     *
     *
     *
     *
     *
     */
    public function uploadFilesTemporaryProcessing($requestFile,$prefix="FILE") {
        
        /* Storage Base path */
        $picBasePath = "storage/pics/";
        
        if (!empty($requestFile)) {
            $originalPath = "app/".$requestFile->store('public/pics');
            $changePath = BaseClass::FilenameUniqueSerialNumber($originalPath, $prefix);
            $rename = @rename (storage_path($originalPath), storage_path($changePath));
            
            /* Make publishing path */
            $pathinfo = array();
            $pathinfo = pathinfo($changePath);
            $publishedPath = "/".$picBasePath.$pathinfo['filename'].'.'.$pathinfo['extension'];
            
            return $publishedPath;
        } else {
            return false;
        }
        
        return false;
    }
    
    public function getStatus($statusNumber) {
        
        $status = array(
            "投稿表示" => 1,
            "非表示" => 2,
            "管理者" => 999,
        );
        $key = array_search($status, $statusNumber);
        
        return $key;
    }
}


