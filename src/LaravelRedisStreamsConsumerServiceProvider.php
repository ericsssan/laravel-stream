<?php

namespace CoditectSg\LaravelRedisStreamsConsumer;

use Illuminate\Support\ServiceProvider;

class LaravelRedisStreamsConsumerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravelredisstreamsconsumer');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelredisstreamsconsumer');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravelredisstreamsconsumer.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravelredisstreamsconsumer'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravelredisstreamsconsumer'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravelredisstreamsconsumer'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravelredisstreamsconsumer');

        // Register the main class to use with the facade
        $this->app->singleton('laravelredisstreamsconsumer', function () {
            return new LaravelRedisStreamsConsumer;
        });
    }
}
