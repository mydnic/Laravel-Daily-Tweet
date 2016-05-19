<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('admin.item.index')
            ->with('categories', $categories)
            ->with('items', $items);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create')
            ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->content = $request->input('content');
        $item->save();

        if ($request->has('category_id')) {
            $item->categories()->sync($request->input('category_id'));
        }

        Flash::success('Item successfully stored');

        return redirect()->route('admin.item.index');
    }
}
