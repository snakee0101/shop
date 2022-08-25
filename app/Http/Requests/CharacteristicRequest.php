<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CharacteristicRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('characteristics', 'name')
                    ->where('category_id', $this->category_id)
            ],
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
