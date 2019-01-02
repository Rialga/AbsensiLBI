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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/internship', 'InternshipController@index')->name('internship');


Route::post('/absensi', 'HomeController@absensi');
Route::post('/update', 'HomeController@update');

Route::get('/history', 'HistoryController@index')->name('history');

Route::post('/hintern', 'InternshipController@store')->name('hintern');
Route::post('/uphintern', 'InternshipController@update')->name('uphintern');

Route::resource('internship','InternshipController');
