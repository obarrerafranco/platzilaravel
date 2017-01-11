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


   //Route::get('/', 'HomeController@index');
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as'   => 'home_path',
    ]);


    Route::get('post/create', [
        'uses' => 'PostController@create',
        'as'   => 'post_create_path',
    ]);

    Route::post('post/create', [
        'uses' => 'PostController@store',
        'as'   => 'post_store_path',
    ]);
    Route::get('post/{id}/edit', [
        'uses' => 'PostController@edit',
        'as'   => 'post_edit_path',
    ])->where('id', '[0-9]+');

    Route::patch('post/{id}/edit', [
        'uses' => 'PostController@update',
        'as'   => 'post_patch_path',
    ])->where('id', '[0-9]+');

    Route::delete('post/{id}/delete', [
        'uses' => 'PostController@destroy',
        'as'   => 'post_delete_path',
    ])->where('id', '[0-9]+');

    Route::get('post/{id}', [
        'uses' => 'PostController@show',
        'as'   => 'post_show_path',
    ])->where('id', '[0-9]+');
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