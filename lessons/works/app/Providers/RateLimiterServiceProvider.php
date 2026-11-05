<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\ServiceProvider;

class RateLimiterServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
           if ($request->user()) {
               return Limit::perMinute(120)->by($request->user()->id);
           }
           return Limit::perMinute(30)->by($request->id);
        });

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

    }
}
