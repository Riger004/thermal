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

Route::get('/', function () {
    return view('prac.home');
});


//temp registration route

Route::get('/register', function () {
    return view('auth.register');
});



// temp profile
Route::get('/', function () {
    return view('prac.home');
});

Route::get('/demo', function () {
    return view('prac.demoProfile');
});




Route::get('create', function () {
    return view('prac.gigg_creation');
});


//Route::resource('profile','testController');
Route::resource('profile','profileController');

Route::get('about','testController@index');



// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


//auth for facebook
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider_facebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback_facebook');


//auth for google
Route::get('auth/google', 'Auth\AuthController@redirectToProvider_google');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback_google');





