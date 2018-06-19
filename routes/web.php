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
/*$defaultLocale = Config::get('app.fallback_locale');*/

//Route::post("sendmail", "KursController@sendmail")->name('sendmail');

Route::post('sr/form/sr-kontakt', 'KursController@sendmail');
Route::post('sr/form/sr-prijava', 'KursController@sendmail');
Route::post('en/form/en-contact', 'KursController@sendmail');
Route::post('en/form/en-application', 'KursController@sendmail');

Route::get('{lang?}', 'KursController@getPage');
Route::get('{lang}/{page}', 'KursController@getStaticPage');

/*
Route::get(' / ', 'KursController@getPage');
Route::get('en', 'KursController@indexEn')->name('en');

//Route::get('index - en','KursController@index')->name('index - en');

Route::get(' / contact / {en ? }', 'KursController@getPage');
Route::get(' / applicationcourses / {en ? }', 'KursController@getPage');

Route::get(' / qacourse / {en ? }', 'KursController@qacourse')->name('qacourse / en');
Route::get(' / contact / {en ? }', 'KursController@contact')->name('contact / en');
Route::get(' / applicationcourses / {en ? }', 'KursController@applicationcourses')->name('applicationcourses / en');

Route::get(' / qacourse / {en ? }', 'KursController@qacourse')->name('qacourse / sr');
Route::get(' / contact / {en ? }', 'KursController@contact')->name('contact / sr');
Route::get(' / applicationcourses / {en ? }', 'KursController@applicationcourses')->name('applicationcourses / sr');
 */
Auth::routes();

Route::get(' / home', 'HomeController@index')->name('home');
