<?php

use App\Models\Indicator;
use Illuminate\Support\Str;

it('can store indicator', function () {
    $this->post('/api/indicators', [
        'type' => 0,
    ])->assertCreated();
});

it('can show indicator', function () {
    $indicator = factory(Indicator::class)->create([
        'type'  => 0,
        'value' => Str::random(16),
    ]);

    $this->get('/api/indicators/'.$indicator->id)
         ->assertOk()
         ->assertJson([
             'id' => $indicator->id,
             'type' => $indicator->type->description,
             'value' => $indicator->value,
         ]);
});
