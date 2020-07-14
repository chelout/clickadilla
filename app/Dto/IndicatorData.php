<?php

namespace App\Dto;

use App\Enums\IndicatorType;
use App\Http\Requests\StoreIndicatorRequest;
use Spatie\DataTransferObject\DataTransferObject;

class IndicatorData extends DataTransferObject
{
    public IndicatorType $type;

    public ?int $length = 128;

    public static function createFromRequest(StoreIndicatorRequest $request): self
    {
        return new self([
            'type'   => IndicatorType::fromValue($request->get('type')),
            'length' => $request->get('length'),
        ]);
    }
}
