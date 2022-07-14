<?php

namespace App\Providers;

use App\Extensions\JwtCookieSessionHandler;
use App\Service\JwtService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Session::extend('jwt-session', function ($app) {
            return new JwtCookieSessionHandler();
        });

        $this->app->bind('jwt.service', function () {
            return new JwtService(config('jwt.secret'));
        });
    }
}
