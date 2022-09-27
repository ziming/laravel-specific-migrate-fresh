<?php

namespace Ziming\LaravelSpecificMigrateFresh;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ziming\LaravelSpecificMigrateFresh\Commands\LaravelSpecificMigrateFreshCommand;

class LaravelSpecificMigrateFreshServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-specific-migrate-fresh')
            ->hasConfigFile()
            ->hasCommand(LaravelSpecificMigrateFreshCommand::class);
    }
}
