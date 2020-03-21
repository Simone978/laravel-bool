<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Api')->group(function () {
    Route::post('studentsapi','StudentController@getAll');
    Route::post('studentsapi/age/{age}','StudentController@getAge');
    Route::post('studentsapi/gender/{gender}','StudentController@getgender');
    Route::post('studentsapi/filter','StudentController@filter');
});