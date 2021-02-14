<?php

namespace Laravel\Package\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Laravel\Package\ServiceProvider as PackageServiceProvider;

class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        //
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
