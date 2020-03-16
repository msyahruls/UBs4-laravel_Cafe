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

// Route::get('/admin', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('landing');
Route::get('menu', 'WelcomeController@menu')->name('menu');

Route::get('home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	Route::get('dashboard/export', 'DashboardController@export');
	Route::get('category/export', 'CategoryController@export');
	Route::get('product/export', 'ProductController@export');

	Route::resource('category', 'CategoryController');
	Route::resource('product', 'ProductController');
});
