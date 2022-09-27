<?php

namespace Ziming\LaravelSpecificMigrateFresh\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Ziming\LaravelSpecificMigrateFresh\LaravelSpecificMigrateFreshServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSpecificMigrateFreshServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_specific-migrate-fresh_table.php.stub';
        $migration->up();
        */
    }
}
