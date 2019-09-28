<?php
/**
 * Created by PhpStorm.
 * User: kiiya
 * Date: 2019-09-28
 * Time: 13:09
 */

namespace Kiiya\ChuckJokes\Tests;

use Illuminate\Support\Facades\Artisan;
use Kiiya\ChuckJokes\Facades\Chuck;
use Orchestra\Testbench\TestCase;
use Kiiya\ChuckJokes\ChuckJokesServiceProvider;

class JokeCommandTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ChuckJokesServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Chuck' => Chuck::class
        ];
    }

    /** @test */
    public function the_console_command_returns_a_joke()
    {
        $this->withoutMockingConsoleOutput();

        Chuck::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('Some joke');

        $this->artisan('chuckjoke');

        $output = Artisan::output();

        $this->assertSame('Some joke'.PHP_EOL, $output);
    }
}
