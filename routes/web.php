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

// Home route
Route::get('/','HomeController@index');
Route::get('/blog','HomeController@blog')->name('blog');
Route::get('/jobdetail/{id}','HomeController@jobdetail')->name('jobdetail');

// Admin route
Route::get('/admin','AdminController@admin')->name('admin.dashboard');
Route::get('/admin/add','AdminController@AddJob')->name('AddJob');
Route::get('/admin/show','AdminController@Show')->name('Show');
Route::get('/edit/{id}','AdminController@Edit')->name('Edit');


Route::post('/admin/add/post','AdminController@Postjob')->name('job.save');
Route::post('/update','AdminController@Update')->name('job.update');
