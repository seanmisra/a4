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

Route::get('/breeds', 'DictionaryController'); 

Route::get('/breeds/{dog?}', 'DogController'); 

if (Config::get('app.env') == 'local') 
    Route::get('/admin', 'AdminController');


/*
//test code - delete later // 

Route::get('/', function () {
    return view('home');
});

Route::get('/breeds/{dog?}', function($dog = null) {
    if ($dog == null)
        return 'Show list of all breeds here'; 
    else 
        return 'Show '.$dog.' breed here';  
}); 

if (Config::get('app.env') == 'local') {
    Route::get('/admin', function() {
        return view('admin');
    });
}*/
