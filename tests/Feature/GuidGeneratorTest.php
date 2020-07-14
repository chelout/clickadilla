<?php

use App\Support\Generators\GuidGenerator;

it('can generate guid', function () {
    $generator = new GuidGenerator();
    $value     = $generator->generate();

    $this->assertIsString($value);
    $this->assertMatchesRegularExpression('/[[:xdigit:]]{8}\-[[:xdigit:]]{4}\-[[:xdigit:]]{4}\-[[:xdigit:]]{4}\-[[:xdigit:]]{12}/', $value);
});
