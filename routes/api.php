<?php

use Illuminate\Http\Request;

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

Route::prefix('v1')->namespace('Api\v1')->group(function (){
    Route::post('/login','LoginController@login');

    Route::middleware('auth:api')->group(function (){
        Route::get('/dashboard','LoginController@dashboard');
    });

});
