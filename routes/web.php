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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/about', 'StaticPagesController@about')->name('about');

//显示注册页面
Route::get('signup', 'UsersController@create')->name('signup');

//用户资源路由
Route::resource('users', 'UsersController');
//文章资源路由
Route::resource('articles', 'ArticlesController');

//显示登陆页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话（登陆）
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话（退出登录）
Route::delete('logout', 'SessionsController@destroy')->name('logout');

//后台管理首页
Route::get('/admin', 'UsersController@admin')->name('admin_home');
//用户管理
Route::get('/admin/users', 'UsersController@admin_users')->name('admin_users');
//文章管理
Route::get('/admin/articles', 'UsersController@admin_articles')->name('admin_articles');
//评论管理
Route::get('/admin/comment', 'UsersController@admin_comment')->name('admin_comment');
