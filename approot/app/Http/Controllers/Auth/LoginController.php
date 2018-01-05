<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use BaseClass;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    /* ログイン条件の変更 */
    public function credentials(Request $request)
    {
        /*
         * 通常のメンバーログインはrole + status + delflag
        */
        $authConditionsOrigin = $request->only($this->username(), 'password');
        $authConditionsCustom = array_merge(
            $authConditionsOrigin,
            ['status'=>'2'],
            ['delflag'=>'0']
        );
        
        return $authConditionsCustom;
    }
    
    /**
     * ログイン時のイニシャライズとか最初の処理はここでやる
     *
     *
     */
    protected function authenticated(Request $request, $user)
    {
        /* login log */
        $user = Auth::user();
        $addinfo = array(
            "userID" => $user["id"],
            "userName" => $user["email"],
            "className" => get_class($this),
            "methodName" => __METHOD__,
        );
        BaseClass::loginLogger("user logined.",$addinfo);
    }
    
    
    /**
     * Logout時の処理
     * vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesUsers.php
     * を継承して、ここでオーバーライドしている
     *
     */
    public function logout(Request $request)
    {

        
        /* Logging */
        $user = Auth::user();
        $addinfo = array(
            "userID" => $user["id"],
            "userName" => $user["email"],
            "className" => get_class($this),
            "methodName" => __METHOD__,
        );
        BaseClass::loginLogger("user logout.",$addinfo);
        
        /* logout */
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
    
}
