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
    return view('welcome');
});

Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function () {
    Route::get('ABK/login', 'LoginController@showLoginForm')->name('login');
    Route::post('ABK/login', 'LoginController@login')->name('loginadmin');
  
    Route::get('ABK/logout', 'LoginController@logout')->name('logout');


});

// front::routes();
Route::get('/', 'HomefrontController@Abakhome')->name('Abakhome');
Route::get('/initiative', 'HomefrontController@initiative')->name('initiative');
Route::get('/members', 'HomefrontController@members')->name('members');
