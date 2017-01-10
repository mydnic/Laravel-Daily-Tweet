<?php

namespace App\Http\Controllers\API;

use App\Item;
use App\Daily;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function getDaily()
    {
        $item_id = Daily::first()->id;
        $item = Item::find($item_id);

        return [
            'content' => $item->content,
            'url' => route('item.show', $item->slug),
        ];
    }
}
