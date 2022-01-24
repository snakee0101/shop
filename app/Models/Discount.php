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
        return $this->isActive() ? (new $this->discount_classname)->calculatePrice($this->item->price, $this->value)
                                  : $this->item->price;
    }

    public static function applyCoupon($code)
    {
        session(['coupon_code' => $code]);
    }

    public function isActive() :bool
    {
        return $this->isExpired() === false; //&& $this->isPromocodeApplied();
    }

    public function isExpired() :bool
    {
        return is_null($this->active_until) ? false //If expiration date is not set - consider discount as not expired
                                            : now()->greaterThan($this->active_until);
    }
}
