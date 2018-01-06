<?php

namespace motwreen\whm;

use Illuminate\Support\Facades\Facade;

class WhmFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'whm';
    }
    
}
