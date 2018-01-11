<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /**
     * SMAPON can be enjoyed only with smartphones.
     * iPhone | iPad | Android | Windows Phone | BlackBerry
     */
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if (
        (strpos($ua, 'iPhone') !== false) ||
        (strpos($ua, 'iPad') !== false) ||
        ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false)) ||
        (strpos($ua, 'Windows Phone') !== false) ||
        (strpos($ua, 'BlackBerry') !== false))
    {
        return view('index');
    } else {
        /* Information that a lottery can be done on smartphone */
        return view('guide');
    }
});

Route::post('/lot', 'LotController@result');


/* contact */
Route::match(['get', 'post'],'/contact', 'Contact\ContactController@index');
Route::post('/contact/confirm', 'Contact\ContactController@confirm');
Route::post('/contact/sended', 'Contact\ContactController@send');

/* Auth costomerized */
/* /register */
Route::match(['get', 'post'],'/regist_confirm', 'Login\SignupController@registConfirm');
Route::post('/store', 'Login\SignupController@store');
Route::get('/mail_authenticate_user/{accesshash}', 'Login\SignupController@mailAuthenticate');

/**
 * Admin Auth
 * If the value of role is 99, you can control all pages and all database as root (admin).
 * - Issuing authority
 * - Deprivation
 * - Mandatory modification, change / update
 */
Route::match(['get', 'post'],'/admin/index', 'Admin\LoginController@index');
Route::match(['get', 'post'],'/admin/login', 'Admin\LoginController@login');


/**
 * Develop page
 *
 * 2017-12-06
 * by cliche
 */
if (env("APP_ENV")=="local" || env("APP_ENV")=="develop") {
    /* Develop index */
    Route::get('/list', function () { return view('develop.list');});

    /* Bootstrap3 */
    Route::get('/blog/index', function () { return view('blog.index');});
    Route::get('/blog/archives', function () { return view('blog.archives');});
    
    /* Develop test */
    Route::match(['get', 'post'],'/text/index', 'Test\TestController@index');
    
    Route::get('/test/403', function(){ return abort('403');});
    Route::get('/test/404', function(){ return abort('404');});
    Route::get('/test/500', function(){ return abort('500');});
}

/**
 * Members login on authentcations
 *
 *
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/add/information', 'HomeController@addinfo');

