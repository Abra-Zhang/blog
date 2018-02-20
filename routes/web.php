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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

// 文章相关路由
Route::get('/articles', 'ArticlesController@index')->name('articles');
Route::get('/article/{article}', 'ArticlesController@show')->name('article.show');

// 标签相关路由
Route::get('/tags', 'TagsController@index')->name('tags');
