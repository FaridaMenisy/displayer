<?php

namespace faridamenisy\displayer;

use Illuminate\Support\ServiceProvider;

class displayerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
          $this->loadRoutesFrom(__DIR__.'displayer/src/routes/displayer.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
