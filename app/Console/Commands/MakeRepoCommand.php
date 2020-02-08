<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeRepoCommand extends GeneratorCommand
{

    protected $name = 'make:repo';

    protected $description = 'Create a new repo';

    protected $type = 'Repo';

    protected function getStub()
    {
        return __DIR__ . '/stubs/repo.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Repo';
    }
}
