<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('daily', 'API\ItemController@getDaily');
