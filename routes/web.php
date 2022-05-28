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


Route::get('/gallery', 'App\Http\Controllers\ProductController@index');

Route::get('/gallery', 'App\Http\Controllers\ProductController@get');


Route::get('photos-{id}', 'App\Http\Controllers\PhotoController@indexPhotos');

Route::get('photos-{id}', 'App\Http\Controllers\PhotoController@getPhotos');


Route::get('/acrylic', 'App\Http\Controllers\PhotoController@index');

Route::get('/acrylic', 'App\Http\Controllers\PhotoController@get');



Route::get('/foam', 'App\Http\Controllers\PhotoController@index');

Route::get('/foam', 'App\Http\Controllers\PhotoController@get');




Route::get('/tree', 'App\Http\Controllers\PhotoController@index');

Route::get('/tree', 'App\Http\Controllers\PhotoController@get');



Route::get('/baskets', 'App\Http\Controllers\PhotoController@index');

Route::get('/baskets', 'App\Http\Controllers\PhotoController@get');




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
