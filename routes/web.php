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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index')->name('front');
Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('admin/wilayah', 'Admin\WilayahController@index')->name('admin.wilayah');
    Route::get('admin/wilayah/create', 'Admin\WilayahController@create')->name('admin.wilayah.create');
    Route::post('admin/wilayah/store', 'Admin\WilayahController@store')->name('admin.wilayah.store');

});

