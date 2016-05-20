<?php

use App\Daily;
use Illuminate\Database\Seeder;

class DailyTableSeeder extends Seeder
{
    public function run()
    {
        Daily::truncate();
        Daily::create([
            'item_id' => 1,
        ]);
    }
}
