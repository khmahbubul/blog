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

Route::middleware('auth')->prefix('admin')->group(function() {

	Route::get('/category/index', 'CategoriesController@index')->name('category.index');
	Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit')->where(['id' => '[0-9]+']);
	Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete')->where(['id' => '[0-9]+']);
	Route::get('/category/create', 'CategoriesController@create')->name('category.create');
	Route::post('/category/store', 'CategoriesController@store')->name('category.store');
	Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update')->where(['id' => '[0-9]+']);

	Route::get('/post/create', 'PostsController@create')->name('post.create');
	Route::post('/post/store', 'PostsController@store')->name('post.store');
	
});
