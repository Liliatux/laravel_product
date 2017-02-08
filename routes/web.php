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

Route::get('/', function () {
    return 'coucou';
});

Route::get('/legumes', '\App\Http\Controllers\LegumeController@getIndex');

Route::get('/legumes/show/{id}', 'LegumeController@getShow');

Route::post('/legumes/sell/{id}', 'LegumeController@postSell');

Route::post('/legumes/restock/{id}', 'LegumeController@postRestock');

Route::get('/legumes/add', 'LegumeController@getAdd');

Route::post('/legumes/add', 'LegumeController@postAdd');

Route::get('/legumes/edit/{id}', 'LegumeController@getEdit');

Route::post('/legumes/edit', 'LegumeController@postEdit');

Route::get('/legumes/delete/{id}', 'LegumeController@getDelete');