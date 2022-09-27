<?php

return [

    /*
     * There are 2 modes 'exclude' and 'include'.
     *
     * 'exclude' mode will drop all tables except the tables you specified in the 'excluded_tables' array.
     * 'include' mode will drop only the tables you specified in the 'included_tables' array.
     */
    'mode' => env('SPECIFIC_MIGRATE_FRESH_MODE', 'exclude'),

    /*
     * This will be used if mode is 'exclude'.
     *
     * If mode is 'exclude', the database tables in this array will be excluded
     * from getting dropped.
     */
    'excluded_tables' => [
        //
    ],

    /*
     * This will be used if mode is 'include'.
     *
     * If mode is 'include', only the database tables in this array will be dropped
     */
    'included_tables' => [
        //
    ],
];
