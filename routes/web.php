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

Route::get('/', 'ProductsController@index');
Route::get('products/search', 'ProductsController@search');
// Route::get('products/{product_id}/reviews/create', 'ReviewsController@create');
Route::resource('products.reviews', 'ReviewsController', ['only' => 'create']);
Route::resource('products', 'ProductsController', ['only' => 'show']);
