<?php

namespace Ringlives\Adminpanel;


use Illuminate\Support\ServiceProvider;

class AdminpanelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/adminpanel.php', 'adminpanel');
    }
}