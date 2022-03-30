<?php

namespace App\Actions;

use App\Models\Characteristic;
use Illuminate\Database\Eloquent\Collection;

class CharacteristicDiffAction
{
    /**
     * Returns only those characteristic models that have different values among products
     */
    public function execute(Collection $products)
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
            $value_of_some_char = $char_values[0];

            return $char_values->every( fn($value) => $value_of_some_char === $value );  //if every item equals to first item - then all items are duplicates and row must be removed
        });  //removed characteristics that have the same value across all products (for example, this will be removed 1 => [5, 5, 5], but this will not - 2 => [4, 4, 3] )

        $unique_characteristics_model_ids = $unique_chars->keys(); //extracted characteristics model ids

        return Characteristic::find($unique_characteristics_model_ids);
    }
}
