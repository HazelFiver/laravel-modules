<?php

namespace HazelFiver\Modules;

use Nwidart\Modules\Support\Stub;

class LaravelModulesServiceProvider extends \Nwidart\Modules\LaravelModulesServiceProvider
{

    /**
     * Setup stub path.
     */
    public function setupStubPath()
    {
        Stub::setBasePath(__DIR__ . '/Commands/stubs');

        $this->app->booted(function ($app) {
            if ($app['modules']->config('stubs.enabled') === true) {
                Stub::setBasePath($app['modules']->config('stubs.path'));
            }
        });
    }

}
