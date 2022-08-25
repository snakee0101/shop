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
}
