<?php

use App\Enums\IndicatorType;

return [
    IndicatorType::class => [
        IndicatorType::STRING => 'String',
        IndicatorType::NUMBER => 'Number',
        IndicatorType::GUID => 'GUID',
        IndicatorType::ALPHANUM => 'Alphanumeric',
    ]
];
