<?php

namespace Ludo237\Nanoid\Commands;

use Illuminate\Console\Command;
use Ludo237\Nanoid\Client;

class GenerateCommand extends Command
{
    protected $signature = 'nanoid:generate';

    protected $description = 'Generate new nanoID on the fly';

    public function handle(Client $client): void
    {
        $this->info($client->generate());
    }
}
