<?php

namespace Kiiya\ChuckJokes\Facades;


use Illuminate\Support\Facades\Facade;

class Chuck extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chuck';
    }
}