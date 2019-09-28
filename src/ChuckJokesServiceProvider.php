<?php

namespace Kiiya\ChuckJokes;

use Kiiya\ChuckJokes\Console\ChuckJoke;
use Kiiya\ChuckJokes\JokeFactory;
use Illuminate\Support\ServiceProvider;

class ChuckJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckJoke::class
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