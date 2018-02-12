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
Route::match(['get', 'post'],'/board/normal/reply/{accessid}', 'Board\normalController@replay');
///

/* contact */
Route::match(['get', 'post'],'/contact', 'Contact\ContactController@index');
Route::post('/contact/confirm', 'Contact\ContactController@confirm');
Route::post('/contact/sended', 'Contact\ContactController@send');

Route::get('/contact/test_sended', function(){return view("contact.sended");});

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

/* Ajax test get */
Route::get('/ajax/get_string', function(){ return view('develop.ajax_get_string'); });
//Route::get('/ajax/get_xml', function(){ return view('develop.ajax_get_xml'); });
Route::get('/ajax/get_json', function(){ return view('develop.ajax_get_json'); });

Route::get('/api/ajax/get_string', 'Test\TestController@ajax_get_string');
//Route::get('/api/ajax/get_xml', 'Test\TestController@ajax_get_xml');
Route::get('/api/ajax/get_json', 'Test\TestController@ajax_get_json');

/* Ajax test post */
Route::get('/ajax/post_string', function(){ return view('develop.ajax_post_string'); });
//Route::get('/ajax/post_xml', function(){ return view('develop.ajax_post_xml'); });
Route::get('/ajax/post_json', function(){ return view('develop.ajax_post_json'); });

Route::post('/api/ajax/post_string', 'Test\TestController@ajax_post_string');
//Route::get('/api/ajax/post_xml', 'Test\TestController@ajax_post_xml');
Route::post('/api/ajax/post_json', 'Test\TestController@ajax_post_json');

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
    Route::get('/test/503', function(){ return abort('503');});
    
    /* Develop  */
    Route::match(['get', 'post'],'/intervention/image', 'Test\TestController@interventionImage');
}

/**
 * Members login on authentcations
 *
 *
 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/add/information', 'HomeController@addinfo');

