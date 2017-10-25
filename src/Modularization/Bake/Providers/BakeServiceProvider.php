<?php

namespace Modularization\Bake\Providers;

use Illuminate\Support\ServiceProvider;
use Modularization\Bake\Console\Commands\BakeCommand;

class BakeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BakeCommand::class
            ]);
        }
    }
}
