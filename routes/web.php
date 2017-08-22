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
//处理注册请求
Route::resource('users', 'UsersController');

//显示登陆页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话（登陆）
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话（退出登录）
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('/admin', 'StaticPagesController@admin_home')->name('admin_home');