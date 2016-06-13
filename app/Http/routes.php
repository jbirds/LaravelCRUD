<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/haven/add', array('uses' => 'HavenController@create'));

Route::post('/haven/delete', array('uses' => 'HavenController@delete'));

Route::get('/haven/changeContact/{id}', array('uses' => 'HavenController@updatePage'));

Route::controller('haven', 'HavenController', [
    'anyData' => 'haven.data',
    'getIndex' => 'haven',
]);