<?php


namespace App\Support;


use App\Dto\IndicatorData;
use App\Enums\IndicatorType;
use App\Exceptions\InvalidGeneratorTypeException;
use App\Support\Generators\AlphanumGenerator;
use App\Support\Generators\GuidGenerator;
use App\Support\Generators\IndicatorGenerator;
use App\Support\Generators\NumberGenerator;
use App\Support\Generators\StringGenerator;

class GeneratorFactory
{
    public static function makeFromDto(IndicatorData $data): IndicatorGenerator
    {
        switch ($data->type->value) {
            case IndicatorType::NUMBER:
                return new NumberGenerator($data->length);
                break;
            case IndicatorType::GUID:
                return new GuidGenerator();
                break;
            case IndicatorType::ALPHANUM:
                return new AlphanumGenerator($data->length);
                break;
            case IndicatorType::STRING:
            default:
                return new StringGenerator($data->length);
                break;
        }
    }
}
