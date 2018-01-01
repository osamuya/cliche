<?php
// app/Library/BaseClass.php
namespace app\Library;

// Datetime package "Carbon" for laravel
use Carbon\Carbon;
// for custom monolog to the app
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class BaseClass
{
    // property
    protected $custom_log;


    public static function hello() {
        return 'BaseClass test hello()!';
    }

    /*
    |--------------------------------------------------------------------------
    | Method correctSerialize & correctUnserialize
    |--------------------------------------------------------------------------
    | As serialize () and unserialize () may not serialize properly,
    | I try to serialize nearly almost correctly with base64 in between.
    | example: cc0f609b88b6d12f2d52d6a7873a5611228e610e
    | * @access public
    | * @param $array
    | * @return $array
    */
//    public static function correctSerialize($array)
//    {
//        $data = serialize($array);
//        return $data;
//    }
//    public static function correctUnserialize($array)
//    {
//        $data = base64_decode($array);
//        $array = unserialize(html_entity_decode($data));
//        return $array;
//    }


    /*
    |--------------------------------------------------------------------------
    | Method makeAccessHash
    |--------------------------------------------------------------------------
    | make normal hash for anyway to use without password hash.
    | example: cc0f609b88b6d12f2d52d6a7873a5611228e610e
    | * @access public
    | * @param nothing
    | * @return $string
    */
    public static function makeAccessHash() {
        $access_hash = sha1(mt_rand(00000000,99999999));
        return $access_hash;
    }

    /*
    |--------------------------------------------------------------------------
    | Method makeEncrypt
    |--------------------------------------------------------------------------
    | * @access public
    | * @param $strings
    | * @return $string
    |
    */
    public static function makeEncrypt($password) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        return $password_hash;
    }
    /*
    |--------------------------------------------------------------------------
    | Method makeEncrypt
    |--------------------------------------------------------------------------
    | * @access public
    | * @param $strings, $strings
    | * @return boolen
    */
    public static function verifyEncrypt($password, $hash) {
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Method makeDatetime
    |--------------------------------------------------------------------------
    | * @access public
    | * @param STIRINGS $timestamp
    | * @return $timestamp
    | * @throws
    | * @todo
    |
    */
    public static function makeDatetime($timestamp=0) {
        // If there is no parameter, return current time

        // current time
        $datetime = date('Ymd-His');
        return $datetime;

    }

    /*
    |--------------------------------------------------------------------------
    | Method makeUniqeid
    |--------------------------------------------------------------------------
    | make uniqeid
    | * @access public
    | * @param STIRINGS $timestamp
    | * @return $timestamp
    | * @throws
    | * @todo
    |
    */
    public static function makeUniqeid($oiprefix="000") {

        $uniqeid_tmp = uniqid();
        // (example)5-94f5-3b53-8eda
        $uiprefix = substr($uniqeid_tmp,0,1);
        $ui1 = substr($uniqeid_tmp,1,4);
        $ui2 = substr($uniqeid_tmp,5,4);
        $ui3 = substr($uniqeid_tmp,9,4);
        $uniqeid = $oiprefix."-".$uiprefix."-".$ui1."-".$ui2."-".$ui3;

        return $uniqeid;
    }

    /* パスワードの伏せ字を作成
     *
     * $strings @para 生のパスワード
     * $fchara @para 伏せ字にしない文字数 (Offset)
     *
     */
    public static function boundLettered($strings, $fchara=0) {

        $displayChara = substr($strings, 0,$fchara);

        $count = mb_strlen($strings);
        $count = $count - $fchara;
        $boundLettered = "";
        for($i=0; $i<$count; $i++) {
            $boundLettered .= "●";
        }
        if ($fchara > 0) {
            $returnBoundLettered = $displayChara.$boundLettered;
        } else if ($fchara == 0) {
            $returnBoundLettered = $boundLettered;
        }
        return $returnBoundLettered;
    }


    /*
    |--------------------------------------------------------------------------
    | Method getGlobalip
    |--------------------------------------------------------------------------
    | Get the client's global IP address
    | * @return Global IP Address
    |
    */
    public static function getGlobalip() {

        return \Request::ip();
    }



}
