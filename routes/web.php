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
    return "Welcome boss";
});

Route::get('/scrape', 'ScrappingController@get_rates');
Route::get('api/v1/rates/dollar','RatesController@show');