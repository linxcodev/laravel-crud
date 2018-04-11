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

Route::get('santris',
'SantriController@index')->name('santri.index');
Route::get('santris/create', 'SantriController@create')->name('santri.create');
Route::post('santris',
'SantriController@store')->name('santri.store');
Route::get('santris/{id}',
'SantriController@show')->name('santri.show');
Route::get('santris/{id}/edit',
'SantriController@edit')->name('santri.edit');
// untuk update data bisa memakai put dan patch
Route::patch('santris/{id}',
'SantriController@update')->name('santri.update');
Route::delete('santris/{id}',
'SantriController@destroy')->name('santri.destroy');
Route::get('/home', 'HomeController@index')->name('home');
