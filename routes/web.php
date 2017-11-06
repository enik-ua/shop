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

//Route::resource('/catalog', 'CatalogController');
Route::get('/catalog/create',"CatalogController@create");
Route::get('/catalog',"CatalogController@index");
Route::post('/catalog',"CatalogController@store");
//Route::redirect('/', '/public/catalog/');
//Route::get('/',"CatalogController@create");
Route::get('/', function () {
    return view('catalogcreate');
});

