<?php
namespace Cierrateam\LaravelCrisp;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelCrispServiceProvider for registering the crisp-api into a laravel-application
 * @package Cierrateam\LaravelCrisp
 */
class LaravelCrispServiceProvider extends ServiceProvider {

    /**
     * Booting into laravel :)
     * @param Router $router
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/config/laravel-crisp.php' => config_path('laravel-crisp.php'),
        ], 'laravel_crisp_config');

        $this->app->singleton('laracrisp', function ($app) {
            return new LaravelCrisp(config('laravel-crisp.auth_identifier'), config('laravel-crisp.auth_key'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/laravel-crisp.php', 'laravel-crisp'
        );
    }
}