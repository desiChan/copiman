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
// ramadan pake Route::post('updatedata&{id}','MmenuController@update');

Route::resource('mmenu', 'MmenuController');
Route::resource('mmodul', 'MmodulController');
Route::resource('jnsticket', 'JnsticketController');
Route::resource('project', 'ProjectController');


Route::auth();

Route::get('/home', 'HomeController@index');
