<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        Setting::truncate();
        Setting::create([
            'name' => 'Laravel Daily Tweet',
            'description' => 'A website that tweets a random item from your database everyday.',
            'logo' => '',
            'twitter_account' => '@mydnic',
            'script_head' => '',
            'script_body' => '',
        ]);
    }
}
