<?php

namespace Kiiya\ChuckJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kiiya\ChuckJokes\Console\ChuckJoke;

class ChuckJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckJoke::class,
            ]);
        }

        Route::get('chuck-joke', function () {
            return 'success';
        });
    }

    public function register()
    {
        $this->app->bind('chuck', function () {
            return new JokeFactory();
        });
    }
}
