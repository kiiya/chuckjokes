<?php

namespace Kiiya\ChuckJokes\Http\Controllers;

use Kiiya\ChuckJokes\Facades\Chuck;

class ChuckController
{
    public function __invoke()
    {
        return view('chuckjokes::joke', [
            'joke' => Chuck::getRandomJoke(),
        ]);
    }
}
