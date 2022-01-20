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

Route::get('/', 'GeneralController@home')->name('home');
Route::get('/comics/admin', 'ComicController@adminIndex')->name('comics.admin.index');
/* / general route */



/* COMICS ROUTES */
Route::get('/comics/index', 'ComicController@index')->name('comics.index');

Route::get('/comic/create', 'ComicController@create')->name('comics.create');

Route::post('/comic', 'ComicController@store')->name('comics.store');

Route::get('/comic/show/{comic}', 'ComicController@show')->name('comics.show');

Route::get('/comic/edit/{comic}', 'ComicController@edit')->name('comics.edit');

Route::put('/comic/update/{comic}', 'ComicController@update')->name('comics.update');

Route::delete('/comic/{comic}', 'ComicController@destroy')->name('comics.destroy');


