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

Route::get('/',"GuestController@index")->name("index");

Auth::routes();

Route::get('/home', 'AdminContorller@index')->name('home');
Route::get("/get/categories/","GuestController@index");











Route::get('/admin/', 'AdminContorller@index')->name('home');
Route::get('/admin/artists/create', 'AdminContorller@create_artists')->name('create_artists');
Route::get('/admin/artists/', 'AdminContorller@index_artists')->name('index_artists');
Route::get('/admin/categories', 'AdminContorller@categorylist')->name('categorylist');

Route::post('/admin/categories/store', 'AdminContorller@categorystore');
Route::post('/admin/categories/update', 'AdminContorller@categoryupdate');

Route::get('/admin/categories/delete/{id}', 'AdminContorller@categorydelete')->where(['id' => '[0-9]+'])
	->name('categorydelete');
Route::post('/admin/artists/store', 'AdminContorller@store_artists')->name('store_artists');