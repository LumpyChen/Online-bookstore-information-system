<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('orders', 'OrdersController');
Route::resource('order_details', 'OrderDetailsController');
Route::resource('books', 'BooksController');
Route::resource('repositories', 'ReposController');
Route::resource('repository_details', 'RepoDetailsController');
Route::resource('users', 'UsersController');
Route::resource('keepers', 'KeepersController');
Route::resource('logistics', 'LogisticsController');
Route::get('/', 'SitesController@index');
