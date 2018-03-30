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

Route::get('/', 'PagesController@root')->name('root');
Route::get('/info', 'PagesController@info')->name('info');
Route::get('/diary', 'PagesController@diary')->name('diary');
Route::get('/feedback', 'PagesController@feedback')->name('feedback'); 
Route::post('/feedback/store', 'PagesController@feedback_store')->name('feedback.store');

Auth::routes();

Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('articles', 'ArticlesController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');