<?php

namespace GainLine\Basecamp;

use Illuminate\Support\ServiceProvider;

class BasecampServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/basecamp.php' => config_path('basecamp.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        $this->app->singleton('basecamp', function () {
            return new \GainLine\Basecamp\BasecampManager();
        });
    }
}
