<?php

namespace Hazel\Modules\Providers;

use Illuminate\Support\ServiceProvider;


class ConsoleServiceProvider extends \Nwidart\Modules\Providers\ConsoleServiceProvider
{

    protected $commands = [
        ModuleMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }


}
