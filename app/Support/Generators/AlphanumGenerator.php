<?php


namespace App\Support\Generators;


use Illuminate\Support\Str;

class AlphanumGenerator implements IndicatorGenerator
{
    private int $length;

    public function __construct(int $length = 16)
    {
        $this->length = $length;
    }

    public function generate(): string
    {
        return Str::random($this->length);
    }
}
