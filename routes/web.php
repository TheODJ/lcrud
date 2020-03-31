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

Route::get('/', 'myController@index')->name('home');
Route::get('/create', 'myController@create')->name('create');
Route::post('/create', 'myController@store')->name('store');
Route::get('/edit/{id}', 'myController@edit')->name('edit');
Route::post('/update/{id}', 'myController@update')->name('update');
Route::delete('/delete/{id}', 'myController@delete')->name('delete');


Route::get('/test', 'testController@index');

Route::get('/hello', function () {
    return "Hello World";
});
Route::get('/user/{id}', function ($id) {
    return "Your id is " . $id;
});
