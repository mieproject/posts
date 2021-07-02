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

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'MieProject\Posts\Controllers','as'=>'admin.','middleware'=>'web'], function() {
    // Posts Route
//    dd(config('uidashboard.url.prefix').'/posts');
    Route::get(config('uidashboard.url.prefix').'/posts', 'PostsController@dash_index')->name('posts');
    Route::get(config('uidashboard.url.prefix').'/posts/create', 'PostsController@dash_create')->name('posts.create');
//    Route::post(config('uidashboard.url.prefix').'/files', 'FileController@store')->name('files.store');
});
