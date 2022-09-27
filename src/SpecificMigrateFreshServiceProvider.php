<?php

namespace Ziming\SpecificMigrateFresh;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ziming\SpecificMigrateFresh\Commands\SpecificMigrateFreshCommand;

class SpecificMigrateFreshServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('specific-migrate-fresh')
            ->hasConfigFile()
            ->hasCommand(SpecificMigrateFreshCommand::class);
    }
}
