<?php

namespace App\Http\Controllers;

use App\Daily;
use App\Http\Requests;
use App\Item;
use App\Setting;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Twitter;

class ItemController extends Controller
{
    public function showDaily()
    {
        $item = Daily::first()->item;
        $settings = Setting::first();

        if (is_null($item)) {
            Flash::warning('Please add your first item');
            return redirect()->route('admin.item.index');
        }

        return view('item.show')
            ->with('settings', $settings)
            ->with('item', $item);
    }

    public function show($slug)
    {
        $item = Item::findBySlug($slug);
        $settings = Setting::first();
        return view('item.show')
            ->with('settings', $settings)
            ->with('item', $item);
    }

    public function showRandom()
    {
        $item = Item::orderByRaw("RAND()")->first();
        return redirect()->route('item.show', $item->slug);
    }
}
