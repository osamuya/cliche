<?php

namespace App\Http\Controllers\Admin;

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
    | Admin Login Controller
    |--------------------------------------------------------------------------
    |
    | In addition to having almost the same function as
    | app/Http/Controllers/Admin/LoginController.php,
    | you can log in with higher authority as admin user.
    | to conveniently provide its functionality to your applications.
    |
    */
    
    use AuthenticatesUsers;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        /* Admin authentication */
        $this->adminAuthentication();
        
        /* Logging */
        $user = Auth::user();
        
        /* app log */
        $addinfo = array(
            "userID" => $user["id"],
            "className" => get_class($this),
            "methodName" => __METHOD__,
        );
        BaseClass::appLogger("Application information.",$addinfo);
        
        /* login log */
        $addinfo = array(
            "userID" => $user["id"],
            "userName" => $user["email"],
            "className" => get_class($this),
            "methodName" => __METHOD__,
        );
        BaseClass::loginLogger("Admin logined.",$addinfo);
        
        /* view */
        return view('admin.index');
    }
    
    /**
     * Admin authentication
     * Determine whether it is an administrator
     * user by referring to the user's role
     *
     * @return bolen
     */
    public function adminAuthentication()
    {
        /* Get logined user informations */
        $user = Auth::user();
        if ($user["role"] === 2)
        {
            /* give a admin session */
            return true;
        } else {
            return abort('404');
        }
    }
}
