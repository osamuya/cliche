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
    return view('index');
});

/* CRUD Board */
Route::match(['get', 'post'],'/board/normal', 'Board\normalController@index');
//Route::post('/board/normal/confirm', 'Board\normalController@confirm');
Route::post('/board/normal/confirm', 'Board\normalController@confirm');
Route::post('/board/normal/stored', 'Board\normalController@store');

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

