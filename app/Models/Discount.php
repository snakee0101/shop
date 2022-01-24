<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['active_since', 'active_until'];

    public function item()
    {
        return $this->morphTo();
    }

    /*
     * Returns the object price after discount is applied
     * */
    public function apply() :float
    {
        return (new $this->discount_classname)->calculatePrice($this->item->price, $this->value);
    }

    public function isExpired()
    {
        return now()->greaterThan($this->active_until);
    }
}
