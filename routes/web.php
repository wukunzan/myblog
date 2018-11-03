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

//Route::get('/', 'PagesController@root')->name('root');
Route::get('/', 'PostsController@index')->name('root');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

Route::get('users_json','UsersController@usersJson')->name('users.json');

Route::get('cache_at','UsersController@cacheAt')->name('users.cache.at');

Route::resource('posts', 'PostsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::get('posts/{post}/{slug?}', 'PostsController@show')->name('posts.show');

Route::post('posts/upload', 'PostsController@upload')->name('posts.upload');

Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

Route::get('tags/{slug}', 'TagsController@show')->name('tags.show');

Route::resource('replies', 'RepliesController', ['only' => [ 'store',  'destroy']]);

Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');


