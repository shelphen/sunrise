<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['namespace' => 'Backend', 'prefix' => 'api'], function () {

        Route::get('getUser/{id}', ['as' => 'user.get', 'uses' => 'UserController@get']);
        Route::post('putUser', ['as' => 'user.put', 'uses' => 'UserController@put']);
        Route::post('delUser', ['as' => 'user.delete', 'uses' => 'UserController@delete']);


});
