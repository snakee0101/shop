<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['active_until'];

    public function object()
    {
        return $this->morphTo('object');
    }

    /*
     * Returns the object price after discount is applied
     * */
    public function apply() :float
    {
        return ($this->type)::calculatePrice($this->object->price, $this->value);
    }
}
