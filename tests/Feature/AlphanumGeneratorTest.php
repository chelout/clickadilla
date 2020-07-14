<?php

use App\Support\Generators\AlphanumGenerator;
use App\Support\Generators\GuidGenerator;

it('can generate guid', function () {
    $generator = new AlphanumGenerator(128);
    $value     = $generator->generate();

    $this->assertIsString($value);
    $this->assertMatchesRegularExpression('/[[:alnum:]]{128}/', $value);
});
