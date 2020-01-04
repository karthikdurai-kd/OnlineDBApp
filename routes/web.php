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
Route::get('/', 'sampleController@index');
Route::get('/about', 'sampleController@about');
Route::get('/services', 'sampleController@services');
Route::get('/posts', 'postController@index');
Route::get('/posts/create', 'postController@create');
Route::post('/posts/store', 'postController@store');
Route::post('/posts/update/{param}', 'postController@update');
Route::get('/posts/{param}/edit', 'postController@edit');
Route::get('/posts/{param}/delete', 'postController@destroy');
Route::get('/posts/{param}', 'postController@show');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
