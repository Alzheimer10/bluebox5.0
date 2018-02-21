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



Route::get('/', 'HomeController@index')->name('/');


// EL BLUEBOX NO VA COMO SUBDOMINIO, DEBE IR COMO UNA URL MAS.
// ESTAS ROUTAS DE BLUEBOX DEBEN IR EN UN ARCHIVO SOLO. routes/bluebox.php
Route::prefix('bluebox')->group(function () {

	Auth::routes();
	Route::group(['namespace'=>'Bluebox'],function()
	{
		Route::get('/', 'HomeController@index')->name('bluebox');
	});

});