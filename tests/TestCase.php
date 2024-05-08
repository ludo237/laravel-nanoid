<?php

namespace Ludo237\Nanoide\Tests;

use Ludo237\Nanoide\NanoideServiceProvider;
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
