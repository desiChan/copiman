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
//ramadan pake Route::post('updatedata&{id}','MmenuController@update');
//Route::get('/ticket', 'LoadViewController@OpenViewTicket');
//Route::get('/mmodul', 'LoadViewController@OpenViewMmodul');

Route::get('/projectdetail&{id}', 'ProjectController@show');
Route::get('/jnsticketdetail&{id}', 'JnsticketController@show');
Route::get('/mmoduldetail&{id}', 'MmodulController@show');
Route::get('/mmenudetail&{id}', 'MmenuController@show');


Route::get('/projectedit&{id}', 'ProjectController@edit');
Route::get('/jnsticketedit&{id}', 'JnsticketController@edit');
Route::get('/mmoduledit&{id}', 'MmodulController@edit');
Route::get('/mmenuedit&{id}', 'MmenuController@edit');


Route::get('createproject', 'ProjectController@create');
Route::get('createjnsticket', 'JnsticketController@create');
Route::get('createmmenu', 'MmenuController@create');
Route::get('createmmodul', 'MmodulController@create');



Route::resource('mmenu', 'MmenuController');
Route::resource('mmodul', 'MmodulController');
Route::resource('jnsticket', 'JnsticketController');
Route::resource('project', 'ProjectController');
Route::resource('maccess', 'MaccessController');


Route::auth();

Route::get('/home', 'HomeController@index');
