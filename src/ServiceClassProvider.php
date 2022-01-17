<?php

namespace Realpvz\ServiceClass;

use Illuminate\Support\ServiceProvider;
use Realpvz\ServiceClass\Commands\MakeServiceCommand;

class ServiceClassProvider extends ServiceProvider
{
    private static array $commandNames = [
        MakeServiceCommand::class,
    ];

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Stubs' => resource_path('/stubs'),
        ], 'stubs');

        $this->commands(self::$commandNames);
    }

    public function register()
    {

    }
}