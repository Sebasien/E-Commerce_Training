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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/catalogue', 'CatalogueController@see')->name('catalogue');
Route::group(['prefix' => 'product'], function () {
    Route::get('/{product}', 'ProductController@index')->name('product');
    Route::get('/{id_categorie}', 'ProductController@search(id_categorie)')->name('product');
});
Route::get('/basket', 'BasketController@see')->name('basket');