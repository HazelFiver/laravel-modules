<?php

namespace Hazel\Modules\Commands;


use Hazel\Modules\Generators\ModuleGenerator;

class ModuleMakeCommand extends \Nwidart\Modules\Commands\ModuleMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hazel:module:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new module by hazel module.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $names = $this->argument('name');

        foreach ($names as $name) {
            with(new ModuleGenerator($name))
                ->setFilesystem($this->laravel['files'])
                ->setModule($this->laravel['modules'])
                ->setConfig($this->laravel['config'])
                ->setConsole($this)
                ->setForce($this->option('force'))
                ->setPlain($this->option('plain'))
                ->generate();
        }
    }

}
