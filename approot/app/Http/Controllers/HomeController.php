<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function addinfo()
    {
        $user = Auth::user();
        echo "<!--";
        var_dump($user);
        echo "-->";
        
//        var_dump($user->name);
//        var_dump($user->email);

        
        return view('home.addinfo')->with([
            'username' => $user->name,
            'useremail' => $user->email,
            'user_createdat' => $user->created_at,
            'user_updatedat' => $user->updated_at,
            ]);
    }
}
