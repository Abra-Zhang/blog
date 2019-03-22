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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.home');
    Route::get('/home', 'DashboardController@index')->name('dashboard.home');
    Route::get('/posts', 'DashboardController@posts')->name('dashboard.posts');
});

Route::resource('posts', 'PostController');