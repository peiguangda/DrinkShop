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

// Route::get('/', [
// 		'as' => 'home',
// 		'uses' => 'HomeController@getHome'
// 	]);
 
// Route::get('/login/', [
// 		'as' => 'login',
// 		'uses' => 'Auth\LoginController@login'
// 	]);

// Route::post('/login/', [
// 		'as' => 'login',
// 		'uses' => 'Auth\LoginController@postLogin'
// 	]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/admin')->group(function(){

	Route::get('/', [
		'as' => 'admin.index',
		'uses' => 'AdminController@index'
	]);

	Route::prefix('/product')->group(function(){

		Route::get('/', [
			'as' => 'product.index',
			'uses' => 'ProductController@index'
		]);

		Route::post('/', [
			'as' => 'product.store',
			'uses' => 'ProductController@store'
		]);

		Route::get('/create', [
			'as' => 'product.create',
			'uses' => 'ProductController@create'
		]);

		Route::get('/{id}/edit', [
			'as' => 'product.edit',
			'uses' => 'ProductController@edit'
		]);

		Route::post('/{id}', [
			'as' => 'product.update',
			'uses' => 'ProductController@update'
		]);
		
		Route::get('/{id}', [
			'as' => 'product.destroy',
			'uses' => 'ProductController@destroy'
		]);

	});

	Route::prefix('/category')->group(function(){

		Route::get('/', [
			'as' => 'category.index',
			'uses' => 'CategoryController@index'
		]);

		Route::post('/', [
			'as' => 'category.store',
			'uses' => 'CategoryController@store'
		]);

		Route::get('/create', [
			'as' => 'category.create',
			'uses' => 'CategoryController@create'
		]);

		Route::get('/{id}/edit', [
			'as' => 'category.edit',
			'uses' => 'CategoryController@edit'
		]);

		Route::post('/{id}', [
			'as' => 'category.update',
			'uses' => 'CategoryController@update'
		]);
		
		Route::get('/{id}', [
			'as' => 'category.destroy',
			'uses' => 'CategoryController@destroy'
		]);

	});


	Route::prefix('/users')->group(function(){

		Route::get('/', [
			'as' => 'user.index',
			'uses' => 'UserController@index'
		]);

		Route::post('/', [
			'as' => 'user.store',
			'uses' => 'UserController@store'
		]);

		Route::get('/create', [
			'as' => 'user.create',
			'uses' => 'UserController@create'
		]);

		Route::get('/{id}/edit', [
			'as' => 'user.edit',
			'uses' => 'UserController@edit'
		]);

		Route::post('/{id}', [
			'as' => 'user.update',
			'uses' => 'UserController@update'
		]);
		
		Route::get('/{id}', [
			'as' => 'user.destroy',
			'uses' => 'UserController@destroy'
		]);

	});

});
