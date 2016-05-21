<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function getDaily()
    {
        $item_id = Daily::first();
        $item = Item::find($item_id);
        return [
            'content' => $item->content,
            'url' => route('item.show', $item->slug)
        ];
    }
}
