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

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::view('/home', 'home')->middleware('auth');
Route::view('/blog', 'user/blog')->middleware('auth');
Route::view('/admin', 'admin');

//following routes are just for testing
//For Ajax Demo 
Route::get('/ajaxDemo', 'FrontendController@ajaxDemo')
->name('ajaxDemo'); 
Route::post('/ajaxDemo', 'FrontendController@ajaxDemo')
->name('postAjaxDemo');
