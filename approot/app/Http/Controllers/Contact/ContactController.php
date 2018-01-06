<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use BaseClass;


/**
 * Contact
 * Route::match(['get', 'post'],'/contact', 'Contact\ContactController@index');
 * Route::post('/contact/confirm', 'Contact\ContactController@confirm');
 * Route::post('/contact/sended', 'Contact\ContactController@send');
 *
 */
class ContactController extends Controller
{
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
        BaseClass::appLogger("access: /contact.",$addinfo);
        
        return view("contact.index");
    }
    
    public function confirm(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'surname' => 'required|max:32',
            'firstname' => 'required|max:32',
            'surnamekana' => 'required|max:32',
            'firstnamekana' => 'required|max:32',
            'email' => 'required|email',
            'retypeemail' => 'required|max:1200|same:email',
            'postNumber3' => 'required|digits:3|numeric',
            'postNumber4' => 'required|digits:4|numeric',
            'prefectures' => 'required|max:16',
            'municipality' => 'required|max:64',
            'address' => 'required|max:256',
            'telphoneAreacode' => 'required|numeric',
            'telphoneCitycode' => 'required|numeric',
            'telphoneSubscriber' => 'required|numeric',
            'mobilephoneAreacode' => 'present|numeric',
            'mobilephoneCitycode' => 'present|numeric',
            'mobilephoneSubscriber' => 'present|numeric',
            'sex' => 'required',
            'inquery' => 'required|max:2000',
            'agreement' => 'accepted',
        ]);
        
        /* debug */
//        var_dump($request->input('category'));
//        var_dump($request->input('surname'));
//        var_dump($request->input('firstname'));
//        var_dump($request->input('surnamekana'));
//        var_dump($request->input('firstnamekana'));
//        var_dump($request->input('email'));
//        var_dump($request->input('retypeemail'));
//        var_dump($request->input('postNumber3'));
//        var_dump($request->input('postNumber4'));
//        var_dump($request->input('prefectures'));
//        var_dump($request->input('municipality'));
//        var_dump($request->input('address'));
//        var_dump($request->input('telphoneAreacode'));
//        var_dump($request->input('telphoneCitycode'));
//        var_dump($request->input('telphoneSubscriber'));
//        var_dump($request->input('mobilephoneAreacode'));
//        var_dump($request->input('mobilephoneCitycode'));
//        var_dump($request->input('mobilephoneSubscriber'));
//        var_dump($request->input('sex'));
//        var_dump($request->input('inquery'));
//        var_dump($request->input('enquete01'));
//        var_dump($request->input('enquete02'));
//        var_dump($request->input('enquete03'));
//        var_dump($request->input('enquete04'));
//        var_dump($request->input('enquete05'));
//        var_dump($request->input('agreement'));
        
        /* save on sesshon */
        $request->session()->put('category', $request->input('category'));
        $request->session()->put('surname', $request->input('surname'));
        $request->session()->put('firstname', $request->input('firstname'));
        $request->session()->put('surnamekana', $request->input('surnamekana'));
        $request->session()->put('firstnamekana', $request->input('firstnamekana'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('postNumber3', $request->input('postNumber3'));
        $request->session()->put('postNumber4', $request->input('postNumber4'));
        $request->session()->put('prefectures', $request->input('prefectures'));
        $request->session()->put('municipality', $request->input('municipality'));
        $request->session()->put('address', $request->input('address'));
        $request->session()->put('telphoneAreacode', $request->input('telphoneAreacode'));
        $request->session()->put('telphoneCitycode', $request->input('telphoneCitycode'));
        $request->session()->put('telphoneSubscriber', $request->input('telphoneSubscriber'));
        $request->session()->put('mobilephoneAreacode', $request->input('mobilephoneAreacode'));
        $request->session()->put('mobilephoneCitycode', $request->input('mobilephoneCitycode'));
        $request->session()->put('mobilephoneSubscriber', $request->input('mobilephoneSubscriber'));
        $request->session()->put('sex', $request->input('sex'));
        $request->session()->put('inquery', $request->input('inquery'));
        $request->session()->put('enquete01', $request->input('enquete01'));
        $request->session()->put('enquete02', $request->input('enquete02'));
        $request->session()->put('enquete03', $request->input('enquete03'));
        $request->session()->put('enquete04', $request->input('enquete04'));
        $request->session()->put('enquete05', $request->input('enquete05'));
        $request->session()->put('agreement', $request->input('agreement'));
        
        $request->session()->put('sended', 'true)');
        
        /* view */
        return view("contact.confirm")->with([
            'category' => $request->input('category'),
            'surname' => $request->input('surname'),
            'firstname' => $request->input('firstname'),
            'surnamekana' => $request->input('surnamekana'),
            'firstnamekana' => $request->input('firstnamekana'),
            'email' => $request->input('email'),
            'retypeemail' => $request->input('retypeemail'),
            'postNumber3' => $request->input('postNumber3'),
            'postNumber4' => $request->input('postNumber4'),
            'prefectures' => $request->input('prefectures'),
            'municipality' => $request->input('municipality'),
            'address' => $request->input('address'),
            'telphoneAreacode' => $request->input('telphoneAreacode'),
            'telphoneCitycode' => $request->input('telphoneCitycode'),
            'telphoneSubscriber' => $request->input('telphoneSubscriber'),
            'mobilephoneAreacode' => $request->input('mobilephoneAreacode'),
            'mobilephoneCitycode' => $request->input('mobilephoneCitycode'),
            'mobilephoneSubscriber' => $request->input('mobilephoneSubscriber'),
            'sex' => $request->input('sex'),
            'inquery' => $request->input('inquery'),
            'enquete01' => $request->input('enquete01'),
            'enquete02' => $request->input('enquete02'),
            'enquete03' => $request->input('enquete03'),
            'enquete04' => $request->input('enquete04'),
            'enquete05' => $request->input('enquete05'),
            'agreement' => $request->input('agreement'),
        ]);
    }
    
    public function send(Request $request)
    {
        
        $saveString = $request->session()->get('category')."\t";
        $saveString .= $request->session()->get('surname')."\t";
        $saveString .= $request->session()->get('firstname')."\t";
        $saveString .= $request->session()->get('surnamekana')."\t";
        $saveString .= $request->session()->get('firstnamekana')."\t";
        $saveString .= $request->session()->get('email')."\t";
        $saveString .= $request->session()->get('postNumber3')."\t";
        $saveString .= $request->session()->get('postNumber4')."\t";
        $saveString .= $request->session()->get('prefectures')."\t";
        $saveString .= $request->session()->get('municipality')."\t";
        $saveString .= $request->session()->get('address')."\t";
        $saveString .= $request->session()->get('telphoneAreacode')."\t";
        $saveString .= $request->session()->get('telphoneCitycode')."\t";
        $saveString .= $request->session()->get('telphoneSubscriber')."\t";
        $saveString .= $request->session()->get('mobilephoneAreacode')."\t";
        $saveString .= $request->session()->get('mobilephoneCitycode')."\t";
        $saveString .= $request->session()->get('mobilephoneSubscriber')."\t";
        $saveString .= $request->session()->get('sex')."\t";
        $saveString .= $request->session()->get('inquery')."\t";
        $saveString .= $request->session()->get('enquete01')."\t";
        $saveString .= $request->session()->get('enquete02')."\t";
        $saveString .= $request->session()->get('enquete03')."\t";
        $saveString .= $request->session()->get('enquete04')."\t";
        $saveString .= $request->session()->get('enquete05')."\t";
        $saveString .= $request->session()->get('agreement')."\t";
        
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
        BaseClass::appLogger("Inquery sended: /contact/sended.",$addinfo);
        
        /* send mail */
        //ここでメール送信
        
        return "send";
    }
}
