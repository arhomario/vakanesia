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
    return view('home');
});

Route::get('APP', function () {
    return view('APP');
});
/*
|--------------------------------------------------------------------------
| Trip Page
|--------------------------------------------------------------------------
*/
Route::get('trip/{type}', 'TripController@index');

/*
|--------------------------------------------------------------------------
| Blog Page
|--------------------------------------------------------------------------
*/
Route::get('blog', 'BlogController@index');

/*
|--------------------------------------------------------------------------
| Help Page
|--------------------------------------------------------------------------
*/
Route::get('help', 'HelpController@index');
/*
|--------------------------------------------------------------------------
| Contact Page
|--------------------------------------------------------------------------
*/
Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@docontact');

/*
|--------------------------------------------------------------------------
| Member Page
|--------------------------------------------------------------------------
*/
Route::get('member/login', 'MemberController@login');
Route::post('member/login', 'MemberController@dologin');
Route::get('member/signup', 'MemberController@signup');
Route::post('member/signup', 'MemberController@dosignup');









/*
|--------------------------------------------------------------------------
| System  | Auth
|--------------------------------------------------------------------------
*/
Route::get('system/login', 'Auth\AuthController@showLoginForm');
Route::post('system/login', 'Auth\AuthController@login');
Route::get('system/logout', 'Auth\AuthController@logout');
/*
|--------------------------------------------------------------------------
| System  | Dashboard Page
|--------------------------------------------------------------------------
*/
Route::get('system', function () {
    return Redirect('system/dashboard');
});
Route::get('system/dashboard', 'System\DashboardController@index');


/*
|--------------------------------------------------------------------------
| System  | Members Page
|--------------------------------------------------------------------------
*/
Route::resource('system/members', 'System\MembersController');

/*
|--------------------------------------------------------------------------
| System  | Users Page
|--------------------------------------------------------------------------
*/
Route::resource('system/users', 'System\UsersController');
