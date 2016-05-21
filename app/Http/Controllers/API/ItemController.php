<?php

namespace App\Http\Controllers\API;

use App\Daily;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getDaily()
    {
        $item_id = Daily::first()->id;
        $item = Item::find($item_id);
        return [
            'content' => $item->content,
            'url' => route('item.show', $item->slug)
        ];
    }
}
