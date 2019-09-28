<?php

namespace Kiiya\ChuckJokes;

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
    }

    public function register()
    {
        $this->app->bind('chuck', function () {
            return new JokeFactory();
        });
    }
}
