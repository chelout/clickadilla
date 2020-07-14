<?php


namespace App\Support\Generators;


use Illuminate\Support\Str;

class GuidGenerator implements IndicatorGenerator
{
    public function generate(): string
    {
        return Str::uuid();
    }
}
