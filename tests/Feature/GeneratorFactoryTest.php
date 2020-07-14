<?php

use App\Dto\IndicatorData;
use App\Enums\IndicatorType;
use App\Support\GeneratorFactory;
use App\Support\Generators\AlphanumGenerator;
use App\Support\Generators\GuidGenerator;
use App\Support\Generators\NumberGenerator;
use App\Support\Generators\StringGenerator;

it('can create string generator', function () {
    $data = new IndicatorData([
        'type' => IndicatorType::fromValue(IndicatorType::STRING),
    ]);

    $this->assertInstanceOf(StringGenerator::class, GeneratorFactory::makeFromDto($data));
});

it('can create number generator', function () {
    $data = new IndicatorData([
        'type' => IndicatorType::fromValue(IndicatorType::NUMBER),
    ]);

    $this->assertInstanceOf(NumberGenerator::class, GeneratorFactory::makeFromDto($data));
});

it('can create guid generator', function () {
    $data = new IndicatorData([
        'type' => IndicatorType::fromValue(IndicatorType::GUID),
    ]);

    $this->assertInstanceOf(GuidGenerator::class, GeneratorFactory::makeFromDto($data));
});

it('can create alphanumeric generator', function () {
    $data = new IndicatorData([
        'type' => IndicatorType::fromValue(IndicatorType::ALPHANUM),
    ]);

    $this->assertInstanceOf(AlphanumGenerator::class, GeneratorFactory::makeFromDto($data));
});
