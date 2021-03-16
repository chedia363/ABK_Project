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

// Auth::routes();


Route::get('/admin', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function () {
    Route::get('ABK/login', 'LoginController@showLoginForm')->name('login');
    Route::post('ABK/login', 'LoginController@login')->name('loginadmin');
  
    Route::get('ABK/logout', 'LoginController@logout')->name('logout');


});

// front::routes();
Route::get('/', 'HomefrontController@Abakhome')->name('Abakhome');
/**Fields control panel */
Route::resource('fields','AdminFieldsController')->middleware('auth');
Route::get('remove-image-product', 'AdminFieldsController@removeImage')->name('remove.image');
/**Programs control panel */
Route::resource('programs','AdminProgramsController')->middleware('auth');
Route::get('remove-image-program', 'AdminProgramsController@removeImage')->name('remove.imageprogram');
/**AboutUs control panel */
Route::resource('aboutus','AdminAboutusController')->middleware('auth');
/**ContactUs control panel */
Route::resource('contactus','AdminContactusController')->middleware('auth');
/**Activities control panel */
Route::resource('activities','AdminActivitiesController')->middleware('auth');
/**Policies control panel */
Route::resource('policiesprcdural','AdminPoliciesprcduralmanualsController')->middleware('auth');
Route::get('remove-image-policies', 'AdminPoliciesprcduralmanualsController@removeImage')->name('remove.imagepolicies');
/**update My_profile */
Route::get('admin/{id}/profile', 'ProfileController@index')->name('admin.profile');
Route::put('admin/{id}/profile', 'ProfileController@update')->name('admin.profile.update');

Route::get('/initiative', 'HomefrontController@initiative')->name('initiative');
Route::get('/members', 'HomefrontController@members')->name('members');
Route::get('/policies', 'HomefrontController@politics')->name('policies');
Route::get('/invest', 'HomefrontController@Invest')->name('invest');

