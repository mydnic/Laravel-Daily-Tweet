<?php

namespace App\Console\Commands;

use App\Item;
use App\Daily;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Thujohn\Twitter\Facades\Twitter;

class SelectRandomAndTweet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dailyjob';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Select a daily item and tweet its content';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $daily_item = Daily::first();
        $random_item = Item::where('id', '!=', $daily_item->item_id)->orderByRaw('RAND()')->first();
        $daily_item->item_id = $random_item->id;
        $daily_item->save();

        Twitter::postTweet([
            'status' => Str::limit($random_item->content, 140) . ' ' . route('item.show', $random_item->slug),
            'format' => 'json',
        ]);
    }
}
