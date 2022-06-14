<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/travels', 'TravelPackageController@index')->name('travels');
Route::get('/travels/{id}', 'TravelPackageController@show')->name('home');

Route::get('/flights', 'FlightController@index')->name('flights');
Route::get('/flights/{id}', 'FlightController@show')->name('home');

