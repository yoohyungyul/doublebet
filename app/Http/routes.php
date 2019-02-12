<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'HomeController@index');

// 언어
Route::get('lang/{locale}', function ($locale) {
    Cookie::queue(Cookie::forever('language',$locale));
    return back();
});


Route::post('/subscribe', 'HomeController@postSubscribe');