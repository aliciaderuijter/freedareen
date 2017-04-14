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


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('update','StoriesController@update');
    Route::post('update/stories', 'StoriesController@store');
    Route::post('update/about', 'DescriptionsController@store');
    Route::post('update/articles', 'ArticlesController@store');
    Route::delete('articles/{article}', 'ArticlesController@delete');

});

