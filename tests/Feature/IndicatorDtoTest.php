<?php

use App\Dto\IndicatorData;
use App\Enums\IndicatorType;
use App\Http\Requests\StoreIndicatorRequest;
use Spatie\DataTransferObject\DataTransferObjectError;

it('can create dto from request', function () {
    $request = new StoreIndicatorRequest();
    $request->merge([
        'type'   => IndicatorType::fromValue(IndicatorType::STRING),
        'length' => 16,
    ]);

    IndicatorData::createFromRequest($request);

    $this->assertTrue(true);
});

it('throws exception on invalid parameters', function () {
    new IndicatorData([]);
})->throws(DataTransferObjectError::class);
