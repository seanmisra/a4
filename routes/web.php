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

if (Config::get('app.env') == 'local') {
    Route::get('/admin', 'AdminController@main');
    Route::get('/admin/search', 'AdminController@search'); 
    Route::post('/admin/edit', 'AdminController@edit'); 
    Route::post('/admin/delete', 'AdminController@delete'); 
    Route::post('/admin/add', 'AdminController@add'); 
}


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
