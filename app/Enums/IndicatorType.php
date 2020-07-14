<?php


namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

class IndicatorType extends Enum implements LocalizedEnum
{
    public const STRING = 0;
    public const NUMBER = 1;
    public const GUID = 2;
    public const ALPHANUM = 3;
}
