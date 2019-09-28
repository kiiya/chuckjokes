<?php

namespace kiiya\chuckjokes;

use Kiiya\ChuckJokes\JokeFactory;
use Illuminate\Support\ServiceProvider;

class ChuckJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('chuck', function () {
            return new JokeFactory();
        });
    }
}