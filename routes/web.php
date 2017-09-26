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


Route::post('/', 'HomeController@paypal');
Route::get('/','HomeController@welcome');

Route::get('thankyou','DonationsController@thanks');
Route::get('lang/{lang}', 'LanguageController@switchLang');
Route::get('unsuccessful','DonationsController@unsuccessful');
Route::get('donations','DonationsController@show');
Route::get('about','DescriptionsController@show');
Route::get('poems','PoemsController@show');
Route::get('support','SupportsController@show');
Route::get('trial','TrialController@show');
Route::get('contact','ContactController@show');
Route::get('detention','DetentionsController@show');
Route::get('media','MediaController@show');
Route::post('contact','ContactController@email');



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('update','StoriesController@update');
    Route::post('update/stories', 'StoriesController@store');
    Route::post('update/about', 'DescriptionsController@store');
    Route::post('update/poem', 'PoemsController@store');
    Route::post('update/articles', 'ArticlesController@store');
    Route::post('update/support', 'SupportsController@store');
    Route::post('update/trial', 'TrialController@store');
    Route::post('update/detention','DetentionsController@store');
	Route::post('update/media','MediaController@store');




	Route::delete('articles/{article}', 'ArticlesController@delete');

});

