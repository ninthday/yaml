<?php

namespace Ninthday\Yaml\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Ninthday\Yaml\Package\ServiceProvider as YamlServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            YamlServiceProvider::class,
        ];
    }
}
