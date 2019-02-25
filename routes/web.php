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

Route::get('/', function () {
    return view('index');
});

//login, register and member information
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//about me
Route::get('/intro', function () {
	return view('intro');
});
//Route::get('/userinfo', 'UserController@index');
//Route::post('/userinfo', 'UserController@store');
//Route::patch('/userinfo/update', 'UserController@update');

//Product
Route::get('/products', 'ProductController@productindex');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::patch('/products/{product}/edit', 'ProductController@update');
Route::delete('/products/{product}/edit', 'ProductController@delete');

//Order
//Route::get('/order/buy/{order}', 'OrderController@orderinfo');
Route::get('/order/buy', 'OrderController@ordercreate');
Route::post('/order/buy', 'OrderController@orderstore');
Route::delete('/order/buy', 'OrderController@destroy');

//Message
Route::get('/contact', 'MessageController@create');
Route::post('/contact', 'MessageController@store');
Route::get('/contact/{contact}/edit', 'MessageController@edit');	
Route::patch('/contact/{contact}/edit', 'MessageController@update');
Route::delete('/contact', 'MessageController@destroy');