<?php

namespace App\Http\Controllers;

use App\Dto\IndicatorData;
use App\Http\Requests\StoreIndicatorRequest;
use App\Http\Resources\IndicatorResource;
use App\Models\Indicator;
use App\Support\GeneratorFactory;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class IndicatorController extends Controller
{
    public function store(StoreIndicatorRequest $request): JsonResponse
    {
        $data = IndicatorData::createFromRequest($request);

        $value = GeneratorFactory::makeFromDto($data)
                                 ->generate();

        $indicator = Indicator::create([
            'type'  => $data->type,
            'value' => $value,
        ]);

        return IndicatorResource::make($indicator)
                                ->response()
                                ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Indicator $indicator): IndicatorResource
    {
        return IndicatorResource::make($indicator);
    }
}
