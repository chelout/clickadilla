<?php

use App\Http\Middleware\JsonMiddleware;
use Illuminate\Http\Request;

it('sets accept header to appication/json', function () {
    $request = new Request();

    $request->merge([
        'type' => 0
    ]);

    $middleware = new JsonMiddleware();

    $middleware->handle($request, function (Request $request) {
        $this->assertEquals('application/json', $request->header('Accept'));
    });
});
