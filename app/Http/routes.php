<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('', ['as' => 'home', 'uses' => 'ItemController@showDaily']);
    Route::auth();
    Route::get('random', ['as' => 'item.random', 'uses' => 'ItemController@showRandom']);
    Route::get('{slug}', ['as' => 'item.show', 'uses' => 'ItemController@show']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::resource('item', 'Admin\ItemController');
    Route::get('category/{id}/delete', ['as' => 'admin.category.delete', 'uses' => 'Admin\CategoryController@delete']);
    Route::resource('category', 'Admin\CategoryController');
});