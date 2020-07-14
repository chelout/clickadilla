<?php


namespace App\Support\Generators;


class NumberGenerator implements IndicatorGenerator
{
    private int $length;

    public function __construct(int $length = 16)
    {
        $this->length = $length;
    }

    /**
     * @throws \Exception
     * @return string
     */
    public function generate(): string
    {
        $value = '';
        for ($i = 0; $i < $this->length; $i++) {
            $value .= random_int(0, 9);
        }

        return $value;
    }
}
