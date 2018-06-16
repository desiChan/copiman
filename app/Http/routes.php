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

 
Route::get('halo', function(){
    return 'Hello world! Halo semuanya, selamat belajar Laravel.';
});


//Route::get('mmenu', 'MmenuController@index');

Route::resource('mmenu', 'MmenuController');
// ramadan pake Route::post('updatedata&{id}','MmenuController@update');
