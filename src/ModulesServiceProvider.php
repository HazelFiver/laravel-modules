<?php

namespace HazelFiver\Modules;

use Nwidart\Modules\Providers\BootstrapServiceProvider;
use HazelFiver\Modules\Providers\ConsoleServiceProvider;
use Nwidart\Modules\Providers\ContractsServiceProvider;

abstract class ModulesServiceProvider extends \Nwidart\Modules\ModulesServiceProvider
{

    /**
     * Register package's namespaces.
     */
    protected function registerNamespaces()
    {
        $configPath = __DIR__ . '/../config/config.php';

        $this->mergeConfigFrom($configPath, 'modules');
        $this->publishes([
            $configPath => config_path('hazelfiver-modules.php'),
        ], 'config');
    }


    /**
     * Register providers.
     */
    protected function registerProviders()
    {
        $this->app->register(ConsoleServiceProvider::class);
        $this->app->register(ContractsServiceProvider::class);
    }
}
