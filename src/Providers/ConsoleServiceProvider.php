<?php

namespace HazelFiver\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use HazelFiver\Modules\Commands\ModuleMakeCommand;

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
