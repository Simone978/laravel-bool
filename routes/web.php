<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// pagine statiche
Route::get('/', 'StaticPageController@index')->name('StaticPage.home');
Route::get('/chiSiamo', 'StaticPageController@chisiamo')->name('StaticPage.chisiamo');
Route::get('/privacy', 'StaticPageController@privacy')->name('StaticPage.privacy');


// pagine studenti
Route::get('/studentpage', 'DynamicPageController@index')->name('home');
Route::get('/studentpage/show/{slug?}', 'DynamicPageController@show')->name('studentpage.show');
Route::get('/studentpage/show/id/{id}', 'DynamicPageController@getId')->name('studentpage.showId');
Route::get('/studentpage/show/id/altro/{id}', 'DynamicPageController@getAltroId')->name('studentpage.showAltroId');
Route::get('/showstudent/genere/{genere}', 'DynamicPageController@getGenere')->name('studentpage.showGenere');
Route::get('/studentpage/show/eta/{eta}', 'DynamicPageController@getEta')->name('studentpage.showEtal');
Route::get('/showstudent/mostra', 'DynamicPageController@getAllStudents')->name('showstudent.getAllStudents');
Route::get('/showstudent/mostra/db', 'DynamicPageController@getAllDbStudents')->name('showstudent.getAllDbStudents');

