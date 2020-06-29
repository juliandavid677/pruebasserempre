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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/citiesbl', 'HomeController@cities');
Route::get('/clientbl', 'HomeController@client');
Route::get('/citieindex', 'CitiesController@index');
Route::post('/citiesstore', 'CitiesController@store');
Route::put('/citieupdate/{id}', 'CitiesController@update');
Route::delete('/citiedelete/{id}', 'CitiesController@destroy');

Route::get('/clientindex', 'ClientController@index');
Route::post('/clientsstore', 'ClientController@store');
Route::put('/clientupdate/{id}', 'ClientController@update');
Route::delete('/clientdelete/{id}', 'ClientController@destroy');

Route::resource('/client', 'ClientController');
