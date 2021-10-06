<?php

namespace Webographen\AdminLog;

use Statamic\Providers\AddonServiceProvider;
use Webographen\AdminLog\Listeners\AdminLogListener;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'webographen';

    protected $listeners = [
        AdminLogListener::class
    ];

    public function boot()
    {
        $this->app->make('config')->set('logging.channels.adminlog', [
            'driver' => 'daily',
            'path' => storage_path('logs/adminlog.log'),
            'level' => 'debug',
            'days' => 14,
        ]);
    }
}
