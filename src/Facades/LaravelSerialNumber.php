<?php

namespace RewixQ\LaravelSerialNumber\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RewixQ\LaravelSerialNumber\LaravelSerialNumber
 */
class LaravelSerialNumber extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RewixQ\LaravelSerialNumber\LaravelSerialNumber::class;
    }
}
