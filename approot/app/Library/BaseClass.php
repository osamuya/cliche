<?php
// app/Library/BaseClass.php
namespace app\Library;

// Datetime package "Carbon" for laravel
use Carbon\Carbon;
// for custom monolog to the app
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Log;

class BaseClass
{
    /* Logger */
    protected $app_log;
    protected $login_log;

    public function __construct() {

    }
    
    
    
    public static function hello() {
        return 'BaseClass test hello()!';
    }

    /* ファイル名をユニーク連番にする
     *
     * $strings @para filepath
     * $strings @return filepath
     *
     */
    public static function FilenameUniqueSerialNumber($path="") {
        // public/pics/pAm5KBNVLohRTzjXR5wAU04rCUzKrY6tijFQ6hDX.jpeg
        $pathParts = pathinfo($path);
        if ($pathParts["extension"] == "jpeg") {
            $extention = "jpg";
        } else {
            $extention = $pathParts["extension"];
        }
        $fileName = BaseClass::makeUniqeid("PIC");
        $changePath = $pathParts["dirname"]."/".$fileName.".".$extention;
        return $changePath;
    }
    
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


    
    /**
     * Logger
     *
     *
     *
     */
    public static function appLogger($log="", $addinfo=array()) {
        
        $base = new BaseClass();
        $base::setupLogger();
        /**
         * Get the log base information
         * - @Class name being executed
         * - @datetime
         * - @Error code | Status code
         * -
         */
        $app = new Logger(env('APP_NAME')."-app");
        $app->pushHandler(new StreamHandler(env('APPLOG'), Logger::INFO));
        
        /* logging */
        $line = "";
        if (is_array($addinfo)) {
            foreach ($addinfo as $key=>$value) {
                $line .= "{$key}:{$value},";
            }
        }
        $log = $log." ".$line." ".$base::getGlobalip()." ".$_SERVER['HTTP_USER_AGENT'];
        $app->addInfo($log);
        
        return true;
    }
    
    

    public static function loginLogger($log="", $addinfo=array()) {
        
        $base = new BaseClass();
        $base::setupLogger();
        /**
         * Get the log base information
         * - @Class name being executed
         * - @datetime
         * - @Error code | Status code
         * -
         */
        $login = new Logger(env('APP_NAME')."-login");
        $login->pushHandler(new StreamHandler(env('LOGINLOG'), Logger::INFO));
        
        /* logging */
        $line = "";
        if (is_array($addinfo)) {
            foreach ($addinfo as $key=>$value) {
                $line .= "{$key}:{$value},";
            }
        }
        $log = $log." ".$line." ".$base::getGlobalip()." ".$_SERVER['HTTP_USER_AGENT'];
        $login->addInfo($log);
        
        return true;
    }
    
    
    public static function setupLogger() {
        
        if (file_exists(env('APPLOG'))) {
            @chmod(env('APPLOG'), 0666);
        } else {
            @touch(env('APPLOG'));
            @chmod(env('APPLOG'), 0666);
            die(get_class()." The application log has not been set yet.");
        }
        if (file_exists(env('LOGINLOG'))) {
            @chmod(env('LOGINLOG'), 0666);
        } else {
            @touch(env('LOGINLOG'));
            @chmod(env('LOGINLOG'), 0666);
            die(get_class()." The Login & authentications log has not been set yet.");
        }
        
        return [
            "app_log" => env('APPLOG'),
            "login_log" => env('LOGINLOG'),
        ];
    }
}
