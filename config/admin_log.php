<?php

return [

    /*
     * Turn the logging on and off her or in your env file.
     */
    'enabled' => env('ADMINLOG_ENABLED', true),

    /*
     * You can automatically delete log files after a certain amount of days.
     * Setting this to 0 will prevent any deletions.
     */
    'delete_after' => 0,

    /*
     * Option to change the name of the log files to avoid any conflicts.
     */
    'log_name' => 'adminlog',
];