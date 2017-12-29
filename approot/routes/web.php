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
}


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
