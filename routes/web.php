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

Route::get('/', 'SitesController@index');

Route::get('/about', 'SitesController@about');

Route::get('/contact', 'SitesController@contact');

//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles', 'ArticlesController@store');
//Route::get('/articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');

//Route::get('/auth/login', 'Auth\LoginController@login');
//Route::post('/auth/login', 'Auth\LoginController@login');
//
//Route::get('/auth/register', 'Auth\RegisterController@register');
//Route::post('/auth/register', 'Auth\RegisterController@register');
//
//Route::get('/auth/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
