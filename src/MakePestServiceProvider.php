<?php

namespace Tobya\Makepest;

use Illuminate\Support\ServiceProvider;



class MakePestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Tobya\Makepest\MakePestCommand::class,
            ]);
        }
    }
}
