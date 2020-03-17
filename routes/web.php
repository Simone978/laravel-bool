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
Route::get('/', 'StaticPageController@index')->name('StaticPage');
Route::get('/chiSiamo', 'StaticPageController@chisiamo')->name('StaticPage.privacy');
Route::get('/privacy', 'StaticPageController@privacy')->name('StaticPage.chiSiamo');


// pagine studenti
Route::get('/', 'DynamicPageController@students');
// // // // // // Route::get('/', 'DynamicPageController@show');