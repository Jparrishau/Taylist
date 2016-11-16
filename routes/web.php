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

Route::get('/messages', function () {
    return view('messages');
})->name('messages');

Route::post('/add-post', 'PostController@createPost')->name('add-post');