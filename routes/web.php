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

Route::get('/', function () {
    return view('adminlte::layouts.landing');
});

Route::get('/medicos/{str}', 'SearchController@getAllUsers');
Route::get('/search/{str}', 'SearchController@getSearchUsers');
Route::get('/medico/{id}', 'SearchController@getUser');

Route::get('/avatar/{id}', 'UserAvatarController@get');
