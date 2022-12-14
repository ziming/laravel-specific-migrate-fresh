<?php

namespace Ziming\LaravelSpecificMigrateFresh\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LaravelSpecificMigrateFreshCommand extends Command
{
    use ConfirmableTrait;

    public $signature = 'migrate:specific-fresh {--seed}';

    public $description = 'Command to migrate:fresh for only the tables you wanted.';

    public function handle(): int
    {
        if (! $this->confirmToProceed()) {
            return self::FAILURE;
        }

        if (config('specific-migrate-fresh.mode') === 'exclude') {
            $this->executeExcludeMode();
        } elseif (config('specific-migrate-fresh.mode') === 'include') {
            $this->executeIncludeMode();
        }

        $this->call('migrate', [
            '--seed' => $this->option('seed'),
        ]);

        return self::SUCCESS;
    }

    private function executeExcludeMode()
    {
        $excludedTables = config('specific-migrate-fresh.excluded_tables');

        // @phpstan-ignore-next-line
        $tablesToDrop = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        $tablesToDrop = array_diff($tablesToDrop, $excludedTables);

        // Support views dropping in a future version
        // Schema::dropAllViews();

        Schema::disableForeignKeyConstraints();

        foreach ($tablesToDrop as $table) {
            Schema::dropIfExists($table);
        }

        Schema::enableForeignKeyConstraints();
    }

    private function executeIncludeMode()
    {
        $tablesToDrop = config('specific-migrate-fresh.included_tables');

        // Support views dropping in a future version
        // Schema::dropAllViews();

        Schema::disableForeignKeyConstraints();

        foreach ($tablesToDrop as $table) {
            Schema::dropIfExists($table);
        }

        Schema::enableForeignKeyConstraints();
    }
}
