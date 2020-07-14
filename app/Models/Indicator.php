<?php

namespace App\Models;

use App\Enums\IndicatorType;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /** @var string[] */
    protected $casts = [
        'type' => IndicatorType::class,
    ];

    /** @var string */
    protected $dateFormat = 'Y-m-d\TH:i:s.u';

    protected $fillable = [
        'type',
        'value',
    ];

//    public function getValueAttribute($value)
//    {
//        switch (true) {
//            case $this->type->is(IndicatorType::STRING):
//                return base64_decode($value);
//            case $this->type->is(IndicatorType::NUMBER):
//            case $this->type->is(IndicatorType::GUID):
//            case $this->type->is(IndicatorType::ALPHANUM):
//            default:
//                return $value;
//        }
//    }
}
