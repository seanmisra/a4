<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@start'); 
Route::get('/search', 'HomeController@search'); 
Route::get('/match', 'HomeController@match'); 

Route::get('/breeds', 'DictionaryController'); 

Route::get('/breeds/{dog}', 'DogController'); 

// must know app key to access admin features
Route::get('/'.Config::get("app.key").'/admin', 'AdminController@main');
Route::get('/'.Config::get("app.key").'/admin/search', 'AdminController@search');
Route::post('/'.Config::get("app.key").'/admin/edit', 'AdminController@edit');
Route::post('/'.Config::get("app.key").'/admin/delete', 'AdminController@delete');
Route::post('/'.Config::get("app.key").'/admin/add', 'AdminController@add');


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
