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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/person', 'PersonController', ['except' => 'show', 'names' => [
    'index' => 'person.index',
    'create' => 'person.create',
    'store' => 'person.store',
    'edit' => 'person.edit'
]]);
Route::post('/person/update', 'PersonController@update')->name('person.update');
Route::get('/person/destroy/{id}', 'PersonController@destroy')->name('person.destroy');
Route::get('/person/status', 'PersonController@status');
