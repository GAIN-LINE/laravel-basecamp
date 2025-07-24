<?php

namespace GainLine\Basecamp;

use Illuminate\Support\Facades\Facade;

class Basecamp extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'basecamp';
    }
}
