<?php

namespace Tests;

use Larva\ThinkPackage\PackageService;

use PHPUnit\Framework\TestCase as PHPUnit;
use think\App;

abstract class TestCase extends PHPUnit
{
    /**
     * Load package service provider.
     *
     * @param \think\App $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [PackageService::class];
    }

    /**
     * Define environment setup.
     *
     * @param \think\App $app
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('cache.default', 'file');
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'type' => 'sqlite',
            'database' => 'memory',
            'prefix' => '',
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();
        (new App())->http;
    }
}
