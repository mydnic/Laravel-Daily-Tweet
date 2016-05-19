<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showDaily()
    {
        $item = Item::first();
        return view('item.show')
            ->with('item', $item);
    }
}
