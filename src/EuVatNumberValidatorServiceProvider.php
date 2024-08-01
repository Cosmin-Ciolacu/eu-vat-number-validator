<?php

namespace CosminCiolacu\EuVatNumberValidator;

use Illuminate\Support\ServiceProvider;

class EuVatNumberValidatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cosmin-ciolacu');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'cosmin-ciolacu');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/eu-vat-number-validator.php', 'eu-vat-number-validator');

        // Register the service the package provides.
        $this->app->singleton('eu-vat-number-validator', function ($app) {
            return new EuVatNumberValidator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['eu-vat-number-validator'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/eu-vat-number-validator.php' => config_path('eu-vat-number-validator.php'),
        ], 'eu-vat-number-validator.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/cosmin-ciolacu'),
        ], 'eu-vat-number-validator.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/cosmin-ciolacu'),
        ], 'eu-vat-number-validator.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/cosmin-ciolacu'),
        ], 'eu-vat-number-validator.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
