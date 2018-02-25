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
//Route::get('/about', 'HomeController@about')->name('about');

// 文章相关路由
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/post/{post}', 'PostsController@show')->name('post.show');

// 标签相关路由
Route::get('/tags', 'HomeController@tags')->name('tags');
