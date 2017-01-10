<?php

namespace App\Http\Controllers;

use App\Item;
use App\Daily;
use App\Setting;
use Laracasts\Flash\Flash;

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

        return view('item.daily')
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
        $item = Item::orderByRaw('RAND()')->first();

        return redirect()->route('item.show', $item->slug);
    }
}
