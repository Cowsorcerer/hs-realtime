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

Route::get('/api/stats', 'StatsController@index');
Route::get('/stats', 'StatsController@index')->name('statsIndex');
Route::get('/stats/save', 'StatsController@store')->name('saveStats');

Route::get('/settings/profile', 'SettingsController@profile')->name('profileSettings');
Route::post('/settings/profile/save', 'UsersController@update')->name('saveProfile');