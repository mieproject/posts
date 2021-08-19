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

Route::group(['namespace' => 'MieProject\Posts\Controllers\Admin','as'=>'admin.','middleware'=>'web'], function() {
    // Posts Route
//    dd(config('uidashboard.url.prefix').'/posts');
    Route::get(config('uidashboard.url.prefix').'/posts', 'PostsController@index')->name('posts');
    Route::get(config('uidashboard.url.prefix').'/posts/create', 'PostsController@create')->name('posts.create');
//    Route::post(config('uidashboard.url.prefix').'/files', 'FileController@store')->name('files.store');
});
