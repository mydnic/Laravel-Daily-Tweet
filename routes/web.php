<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'ItemController@showDaily')->name('home');
Route::get('random', 'ItemController@showRandom')->name('item.random');
Route::get('{slug}', 'ItemController@show')->name('item.show');

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::resource('item', 'Admin\ItemController');
    Route::get('category/{id}/delete', 'Admin\CategoryController@delete')->name('category.delete');
    Route::resource('category', 'Admin\CategoryController');
    Route::get('setting', 'Admin\SettingController@edit')->name('setting.edit');
    Route::post('setting', 'Admin\SettingController@update')->name('setting.update');
});
