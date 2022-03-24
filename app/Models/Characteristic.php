<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Characteristic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public static function attachTo(Model $item, $request_key, $char_value)
    {
        $char_id = Str::of($request_key)->after('-');

        $item->characteristics()->attach($char_id, [
            'value' => $char_value
        ]);
    }

    /**
     * Returns only those characteristic models that have different values among products
     * */
    public static function diff($products)
    {
        $all_chars_flatten = $products->flatMap( fn($product) => $product->characteristics ); //all characteristic models with values

        if($products->count() === 1) //if there is only one product - no further processing required
            return $all_chars_flatten;

        $grouped_chars = $all_chars_flatten->groupBy('id'); //all characteristic models grouped by characteristic id as a key
        //[ char_id => [char_model_1, char_model_2, ...], ... ]

        $grouped_char_values = $grouped_chars->mapWithKeys(function ($chars, $key) {
            return [$key => $chars->map( fn($char) => $char->pivot->value )];
        });
        //[ char_id => [char_value_1, char_value_2, ...], ... ]   - extracted only characteristic value

        $unique_chars = $grouped_char_values->reject(function ($char_values) {
            $number_of_characteristics_in_row = $char_values->count();
            $number_of_duplicates_in_row = $char_values->duplicates()->count() + 1;

            return $number_of_characteristics_in_row === $number_of_duplicates_in_row;
        });  //removed characteristics that have the same value across all products (for example, this will be removed 1 => [5, 5, 5], but this will not - 2 => [4, 4, 3] )

        $unique_characteristics_model_ids = $unique_chars->keys(); //extracted characteristics model ids
        $unique_characteristics_models = $unique_characteristics_model_ids->map( fn($id) => Characteristic::find($id) );
        //wrapped char. ids into char. models

        return $unique_characteristics_models;
    }
}
