<?php


namespace Veda\Auth\facades;


use Illuminate\Support\Facades\Facade;

class Test extends Facade
{

    protected static function getFacadeAccessor()

    {

        return 'veda';

    }
}
