<?php

use App\Support\Generators\NumberGenerator;

it('can generate number with length', function () {
    $generator = new NumberGenerator(128);
    $value     = $generator->generate();

    $this->assertIsString($value);
    $this->assertEquals(strlen($value), 128);
    $this->assertMatchesRegularExpression('/\d+/', $value);
});
