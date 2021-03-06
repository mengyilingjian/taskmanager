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

Route::get('/', 'HomeController@root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//路由命名方式一
// Route::post('projects', 'ProjectsController@store')->name('projects.store');

//路由命名方式二
Route::post('projects', ['uses'=>'ProjectsController@store','as'=>'projects.store']);   //提交新建表单项目
