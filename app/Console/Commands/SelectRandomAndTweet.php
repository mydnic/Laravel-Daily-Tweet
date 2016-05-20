<?php

namespace App\Console\Commands;

use App\Daily;
use App\Item;
use Illuminate\Console\Command;
use Twitter;

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
        $random_item = Item::orderByRaw('RAND()')->first();
        $daily_item->item_id = $random_item->id;
        $daily_item->save();

        $link = Twitter::linkify(route('item.show', $random_item->slug));

        Twitter::postTweet([
            'status' => $random_item->content . ' ' . $link,
            'format' => 'json'
        ]);
    }
}
