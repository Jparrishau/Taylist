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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playground', function () {
    return view('playground');
});

Auth::routes();

Route::get('/home', 'HomeController@createHome')->name('home');

Route::get('/gallery/{category}', 'GalleryController@createGallery')->name('gallery');

Route::post('/add-post', 'PostController@createPost')->name('add-post');

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('/getCurrentUserThreads', ['as' => 'messages.show', 'uses' => 'MessagesController@getThreadsByCurrentUser']);
    Route::get('/getMessagesByThreadId/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@getMessagesByThreadId']);
    Route::get('/getThreadById/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@getThreadById']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});