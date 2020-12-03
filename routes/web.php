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

Route::get('/', 'HomeController@index')->name('home');
Route::get('artigo', 'HomeController@artigo')->name('artigo');
Route::post('categoria', 'HomeController@categoria')->name('categoria');

Route::get('logout', 'HomeController@logout')->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::prefix('categorias')->group(function() {
        Route::get('', 'CategoryController@index')->name('categories.index');
        Route::get('novo', 'CategoryController@create')->name('categories.create');
        Route::post('', 'CategoryController@store')->name('categories.store');
        Route::get('{id}', 'CategoryController@edit')->name('categories.edit');
        Route::put('{id}', 'CategoryController@update')->name('categories.update');
        Route::delete('{id}', 'CategoryController@destroy')->name('categories.destroy');
    });
        
});

Auth::routes();


