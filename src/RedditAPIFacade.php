<?php

namespace ginomessmer\RedditAPI;

use Illuminate\Support\Facades\Facade;

class RedditAPIFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-reddit-api';
    }
}