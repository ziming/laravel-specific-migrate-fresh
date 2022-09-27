<?php

namespace Ziming\SpecificMigrateFresh\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ziming\SpecificMigrateFresh\SpecificMigrateFresh
 */
class SpecificMigrateFresh extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ziming\SpecificMigrateFresh\SpecificMigrateFresh::class;
    }
}
