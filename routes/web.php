<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('index');
ROUTE::get('posts', 'PostController@index')->name('posts.index');
ROUTE::get('posts/{slug}', 'PostController@show')->name('posts.show');
ROUTE::get('categories/{slug}', 'CategoryController@index')->name('category.index');
ROUTE::post('/mails','ContactController@index')->name('contact');
ROUTE::get('tags/{slug}', 'TagController@index')->name('tag.index');



Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')
->group(function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');
});
