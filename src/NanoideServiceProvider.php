<?php

namespace Ludo237\Nanoid;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Ludo237\Nanoid\Commands\GenerateCommand;

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

        $this->app->singleton(Client::class, function (Application $app) {
            /** @var array<string> $config */
            $config = config('nanoid');

            /** @var \Ludo237\Nanoid\Concerns\CoreInterface $core */
            $core = $config['core'];

            return (new Client())
                ->alphabet($config['alphabet'])
                ->size((int) $config['size'])
                ->core($core);
        });
    }
}
