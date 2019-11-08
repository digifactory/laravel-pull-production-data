<?php

namespace DigiFactory\PullProductionData;

use Illuminate\Support\ServiceProvider;

class PullProductionDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pull-production-data.php'),
            ], 'config');

            $this->commands([
                PullProductionDataCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pull-production-data');
    }

    public function provides()
    {
        return [
            PullProductionDataCommand::class,
        ];
    }
}
