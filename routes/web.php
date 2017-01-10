<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function() {


    Route::get('/', 'HomeController@index');

    Route::get('post/{id}', [
        'uses' => 'PostController@show',
        'as'   => 'post_show_path',
    ]);

});

Route::group(['prefix' => 'api'], function () {
    Route::get('/', function () {
        return 'Hola soy tu api';
    });
});



Route::get('/auth/login', [
    'uses' => 'AuthController@index',
    'as'   => 'auth_show_path', ]);

Route::post('/auth/login', [
    'uses' => 'AuthController@store',
    'as'   => 'auth_store_path', ]);

Route::get('/auth/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path', ]);