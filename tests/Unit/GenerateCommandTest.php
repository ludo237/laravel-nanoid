<?php

namespace Ludo237\Nanoide\Tests\Unit;

use Ludo237\Nanoide\Commands\GenerateCommand;

describe('GenerateCommand', function () {
    it('foo', function () {
        $this
            ->artisan(GenerateCommand::class)
            ->assertSuccessful();
    });
});
