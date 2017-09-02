<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//
//    dump( $request->user());
//});
//

Route::group(['prefix' => 'v1/auth'], function () {

    Route::post('/register', 'Auth\RegisterController@register');

    Route::post('/login', 'Auth\LoginController@login');

});

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/user', 'UserController@getUserDetails');

});




