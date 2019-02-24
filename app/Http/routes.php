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


Route::get('/', 'StudentController@index');// show working
Route::get('/create/{name}/{age}/{address}','StudentController@createNewStudent');// create working
Route::get('/read/{name}','StudentController@read');// read working 
Route::get('/update/{name}/{age}/{address}','StudentController@update');// update  working
Route::get('/delete/{id}','StudentController@delete');// delete working

