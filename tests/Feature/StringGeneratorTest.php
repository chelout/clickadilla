<?php

use App\Support\Generators\StringGenerator;

it('can generate string with length', function () {
    $generator = new StringGenerator(128);
    $value     = $generator->generate();

    $this->assertIsString($value);
    $this->assertEquals(strlen($value), 128);
});
