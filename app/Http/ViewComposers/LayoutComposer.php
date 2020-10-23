<?php

namespace App\Http\ViewComposers;

use App\Setting;
use Illuminate\Contracts\View\View;

class LayoutComposer
{
    protected $settings;

    public function __construct()
    {
        $this->settings = Setting::first();
    }

    public function compose(View $view)
    {
        $view->with('settings', $this->settings);
    }
}
