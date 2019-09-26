# ChuckJokes

Get random Chuck Norris jokes

## Installation

Use the composer [pip](https://pip.pypa.io/en/stable/) to install ChuckJokes.

```bash
composer require kiiya/chuckjokes
```

## Usage

```php
use Kiiya\ChuckJokes\JokeFactory;

$jokes = new JokeFactory;
$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)