<?php

namespace App\Http\Requests;

use App\Enums\IndicatorType;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int length
 * @property IndicatorType type
 */
class StoreIndicatorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => ['required', new EnumValue(IndicatorType::class)],
            'length' => ['min:1', 'max:256'],
        ];
    }
}
