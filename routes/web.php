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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/intro', function () {
	return view('intro');
});
//Route::get('/userinfo', 'UserController@index');
//Route::post('/userinfo', 'UserController@store');
//Route::patch('/userinfo/update', 'UserController@update');
Route::get('/products', 'ProductController@productindex');

//Route::get('/order')