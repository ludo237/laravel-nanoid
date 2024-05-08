<?php

namespace Ludo237\Nanoid\Tests;

use Ludo237\Nanoid\NanoideServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [NanoideServiceProvider::class];
    }
}
