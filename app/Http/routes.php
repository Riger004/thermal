
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

/*Route::get('/', function () {
    return view('prac.home');
});*/


//temp registration route

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/messages', function () {
    return view('prac.messages');
});

Route::get('/album', function () {
    return view('prac.gigg_creation_album');
});


/*Route::get('/gigg', function () {
    return view('prac.gigg');
});*/



// temp profile
Route::get('/','homePage@display_gigs' );


// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//email confirmation
Route::get('register/confirm/{token}', 'testController@confirmEmail');

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




//Route::resource('profile','testController');
Route::resource('profile','profileController');

//route for gig create
Route::resource('gig_create','gigController');


//trying to experiment witht the route
Route::get('about','testController@index');

//Route::get('shwgig/{id}','homePage@show_gig');


//working on the cart page now
Route::post('gig_create/cart/{id}','cartController@store');

//displaying the cart
Route::get('cart/display','cartController@display_cart');

//working on displaying the cart

Route::get('/catagory/{category}', 'categoryController@show');



















