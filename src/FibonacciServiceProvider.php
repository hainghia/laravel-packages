<?php

namespace Kukun\Fibonacci;
use Illuminate\Support\ServiceProvider;
class FibonacciServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('fibonacci', function () {
            return new Fibonacci;
        });
    }
}
