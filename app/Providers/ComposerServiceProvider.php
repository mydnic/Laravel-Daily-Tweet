<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout.app', 'App\Http\ViewComposers\LayoutComposer');
    }

    /**
     * Register.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
