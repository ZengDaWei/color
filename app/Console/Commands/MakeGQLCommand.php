<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeGQLCommand extends GeneratorCommand
{

    protected $name = 'make:gql';

    protected $description = 'Create a new gql controller class';

    protected $type = 'GQL';

    protected function getStub()
    {
        return __DIR__ . '/stubs/gql.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\GQL';
    }
}
