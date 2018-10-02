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
    return "Welcome to naij-fx-rates-api, info on how to use consume coming soon!!";
});

Route::get('scrape', 'ScrappingController@get_rates');
Route::get('api/v1/rates/dollar','RatesController@show_dollar');
Route::get('api/v1/rates/pounds','RatesController@show_pounds');
Route::get('api/v1/rates/','RatesController@show');
