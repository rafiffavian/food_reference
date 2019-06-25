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

    Route::get('admin/utara', 'Admin\UtaraController@index')->name('admin.utara');
    Route::get('admin/utara/create', 'Admin\UtaraController@create')->name('admin.utara.create');
    Route::post('admin/utara/store', 'Admin\UtaraController@store')->name('admin.utara.store');

    Route::get('admin/timur', 'Admin\TimurController@index')->name('admin.timur');
    Route::get('admin/timur/create', 'Admin\TimurController@create')->name('admin.timur.create');
    Route::post('admin/timur/store', 'Admin\TimurController@store')->name('admin.timur.store');

    Route::get('admin/barat', 'Admin\BaratController@index')->name('admin.barat');
    Route::get('admin/barat/create', 'Admin\BaratController@create')->name('admin.barat.create');
    Route::post('admin/barat/store', 'Admin\BaratController@store')->name('admin.barat.store');

    Route::get('admin/menu', 'Admin\MenuController@index')->name('admin.menu');
    Route::get('admin/menu/create', 'Admin\MenuController@create')->name('admin.menu.create');
    Route::post('admin/menu/store', 'Admin\MenuController@store')->name('admin.menu.store');

    Route::get('admin/menu/getJsonData', 'Admin\MenuController@getJsonData')->name('admin.menu.getJsonData');





});

