<?php
/**
 * Created by PhpStorm.
 * User: kiiya
 * Date: 2019-09-28
 * Time: 12:59
 */

namespace Kiiya\ChuckJokes\Console;


use Illuminate\Console\Command;
use Kiiya\ChuckJokes\Facades\Chuck;

class ChuckJoke extends Command
{
    protected $signature = 'chuckjoke';

    protected $description = 'Get a random Chuck Norris joke.';

    public function handle()
    {
        $this->info(Chuck::getRandomJoke());
    }
}