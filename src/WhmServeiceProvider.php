<?php

namespace motwreen\whm;

use Illuminate\Support\ServiceProvider;
class WhmServeiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = $this->app->make('config');
        $this->mergeConfigFrom(
            __DIR__ . '/config/whm.php', 'whm'
        );
        $this->app->bind('whm', function() {
            return new Whm;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/whm.php' => config_path('whm.php'),
        ],'whm');
    }
}
