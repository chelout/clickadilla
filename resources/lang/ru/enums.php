<?php

use App\Enums\IndicatorType;

return [
    IndicatorType::class => [
        IndicatorType::STRING => 'Строка',
        IndicatorType::NUMBER => 'Число',
        IndicatorType::GUID => 'GUID',
        IndicatorType::ALPHANUM => 'Цифробуквенное значение',
    ]
];
