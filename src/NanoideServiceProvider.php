<?php

namespace Ludo237\Nanoide\Commands;

use Illuminate\Support\ServiceProvider;

class NanoideServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/nanoid.php' => config_path('nanoid.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateCommand::class,
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nanoid.php', 'nanoid'
        );
    }
}
