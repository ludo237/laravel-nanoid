<?php

namespace Ludo237\Nanoid\Tests\Unit;

use Ludo237\Nanoid\Commands\GenerateCommand;

describe('GenerateCommand', function () {
    it('foo', function () {
        $this
            ->artisan(GenerateCommand::class)
            ->assertSuccessful();
    });
});
