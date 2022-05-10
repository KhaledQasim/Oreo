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


Route::get('/gallery', 'App\Http\Controllers\PhotoController@index');

Route::get('/gallery', 'App\Http\Controllers\PhotoController@getPhotos');


Route::get('/', function () {
    return view('index');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('gallery-{id}', 'App\Http\Controllers\PhotoController@indexGallery');

Route::get('gallery-{id}', 'App\Http\Controllers\PhotoController@getGallery');
