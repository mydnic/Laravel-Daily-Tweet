<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        Item::create($request->only('content'));
        Flash::success('Item successfully stored');
        return redirect()->back();
    }
}
