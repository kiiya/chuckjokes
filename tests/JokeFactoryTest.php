<?php

namespace kiiya\chuckjokes\tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use kiiya\chuckjokes\JokeFactory;
use GuzzleHttp\Handler\MockHandler;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{"type": "success", "value": { "id": 140, "joke": "Chuck Norris built a better mousetrap, but the world was too frightened to beat a path to his door.", "categories": [] } }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris built a better mousetrap, but the world was too frightened to beat a path to his door.', $joke);
    }
}
