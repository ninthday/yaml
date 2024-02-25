<?php

namespace Ninthday\Yaml\Package;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Ninthday\Yaml\Package\Support\Parser;
use Ninthday\Yaml\Package\Support\SymfonyParser;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerService();
    }

    /**
     * Register service service.
     */
    private function registerService()
    {
        $this->app->bind(Parser::class, SymfonyParser::class);
        $this->app->singleton('ninthday.yaml', function ($app) {
            return new Yaml(null, $app->make(Parser::class), null);
        });
    }
}
