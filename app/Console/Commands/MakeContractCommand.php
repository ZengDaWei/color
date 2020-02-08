<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeContractCommand extends GeneratorCommand
{

    protected $name = 'make:contract';

    protected $description = 'Create a new contract class';

    protected $type = 'Contract';

    protected function getStub()
    {
        return __DIR__ . '/stubs/contract.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services\Contracts';
    }
}
