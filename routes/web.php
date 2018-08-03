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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('/sigup','UsersController@create')->name('sigup');
Route::get('/users/{user}','UsersController@show')->name('users.show');
Route::post('/users','UsersController@store')->name('users.store');

//seesions
Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destory')->name('logout');

//curd
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{user}/edit','UsersController@edit')->name('users.edit');
Route::patch('/users/{user}','UsersController@update')->name('users.update');
Route::delete('/users/{user}','UsersController@destroy')->name('users.destroy');
