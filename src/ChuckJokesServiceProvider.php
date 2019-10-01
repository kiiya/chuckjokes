<?php

namespace Kiiya\ChuckJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Kiiya\ChuckJokes\Console\ChuckJoke;
use Kiiya\ChuckJokes\Http\Controllers\ChuckController;

class ChuckJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckJoke::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chuckjokes');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/chuckjokes'),
        ]);

        Route::get('chuck-joke', ChuckController::class);
    }

    public function register()
    {
        $this->app->bind('chuck', function () {
            return new JokeFactory();
        });
    }
}
