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

Route::get('/', 'Controller@index');

// Login proccess 
Route::get('login', 'AuthController@showLoginForm');
Route::get('logout', 'AuthController@processLogout');
Route::post('login', 'AuthController@processLogin');


Route::get('verify/{token}', 'Controller@verifyEmail');

Route::Resource('register', 'UserController');
//-------Category 
Route::Resource('category', 'CategoryController');


//-------Post 
Route::Resource('post', 'PostController');