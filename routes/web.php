<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@create')->name('products-create');
Route::post('/products/store', 'ProductsController@store')->name('products-store');
Route::get('/products/show/{id}', 'ProductsController@show')->name('products-show');
Route::delete('/products/destroy/{id}', 'ProductsController@destroy')->name('products-destroy');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products-edit');
Route::put('/products/update/{id}', 'ProductsController@update')->name('products-update');
