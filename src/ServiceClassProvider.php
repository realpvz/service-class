<?php

namespace Realpvz\ServiceClass;

use App\Console\Commands\MakeServiceCommand;
use Illuminate\Support\ServiceProvider;

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