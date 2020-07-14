<?php

namespace App\Support\Generators;

class StringGenerator implements IndicatorGenerator
{
    private const ALPHABET = '0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz-_,. ';

    private static int $alphabetLength;

    private int $length;

    public function __construct(int $length = 16)
    {
        $this->setAlphabetLength();

        $this->length = $length;
    }

    /**
     * @throws \Exception
     * @return string
     */
    public function generate(): string
    {
        $string = '';
        for ($i = 0; $i < $this->length; $i++) {
            $string .= substr(self::ALPHABET, random_int(0, static::$alphabetLength), 1);
        }

        return $string;
    }

    private function setAlphabetLength(): void
    {
        static::$alphabetLength = strlen(self::ALPHABET) - 1;
    }
}
