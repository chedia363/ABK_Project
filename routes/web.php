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
/**AboutUs control panel */
Route::resource('teams','AdminTeamsController')->middleware('auth');
/**vision control panel */
Route::resource('vision','AdminVisionController')->middleware('auth');
/**messages control panel */
Route::resource('messages','AdminMessagesController')->middleware('auth');
/**invest control panel */
Route::resource('invests','AdminInvestsController')->middleware('auth');
Route::get('remove-image-invests', 'AdminInvestsController@removeImage')->name('remove.imageinvests');
/**partners control panel */
Route::resource('partners','AdminPartnersController')->middleware('auth');
Route::get('remove-image-partners', 'AdminPartnersController@removeImage')->name('remove.imagepartners');


/**update My_profile */
Route::get('admin/{id}/profile', 'ProfileController@index')->name('admin.profile');
Route::put('admin/{id}/profile', 'ProfileController@update')->name('admin.profile.update');

Route::get('/initiative', 'HomefrontController@initiative')->name('initiative');
Route::get('/members', 'HomefrontController@members')->name('members');
Route::get('/policies', 'HomefrontController@politics')->name('policies');
Route::get('/policies2', 'HomefrontController@politics2')->name('policies2');
Route::get('/policies3', 'HomefrontController@politics3')->name('policies3');
Route::get('/policies4', 'HomefrontController@politics4')->name('policies4');
Route::get('/policies5', 'HomefrontController@politics5')->name('policies5');
Route::get('/policies6', 'HomefrontController@politics6')->name('policies6');
Route::get('/invest', 'HomefrontController@Invest')->name('invest');

