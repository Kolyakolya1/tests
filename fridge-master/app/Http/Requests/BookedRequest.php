<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookedRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'location_id' => ['required', 'integer'],
//            'location_id' => ['required', 'integer', 'exists:locations,id'],
            'product_volume' => ['required','numeric'],
            'storage_temperature' => ['required', 'numeric', 'max:0'],
            'storage_period_from' => ['required', 'date_format:Y/m/d'],
            'storage_period_to' => ['required', 'integer', 'min:1', 'max:24'],
            'status' => ['required','boolean'],
        ];
    }
}
