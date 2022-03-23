<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'price' => 'numeric|min:0.01',
            'payment_info' => 'required',
            'guarantee_info' => 'required',
            'category_id' => 'exists:categories,id',
            'in_stock' => "in:" . Product::STATUS_IN_STOCK . ',' . Product::STATUS_ENDS . ',' . Product::STATUS_OUT_OF_STOCK
        ];
    }
}
