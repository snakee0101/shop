<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['active_since', 'active_until'];

    public static function attachTo($item, $request)
    {
        $data = [
            'discount_classname' => $request->discount_classname,
            'value' => $request->discount_value,
            'active_since' => $request->discount_active_since,
            'active_until' => $request->discount_active_until,
            'coupon_code' => $request->coupon_code
        ];

        if ($request->discount_active_until && !$request->discount_active_since)
            $data['active_since'] = date('Y-m-d');

        if ($request->with_coupon_code === 'on')
            $data['coupon_code'] = Str::uuid();

        $item->discount()->create($data);
    }

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
        if( static::where('coupon_code', $code)->doesntExist() )
            throw new \Exception('Coupon with specified code doesn\'t exist');

        session(['coupon_code' => $code]);
    }

    public function isActive() :bool
    {
        return ($this->isExpired() === false) && $this->isCouponCodeApplied();
    }

    public function isExpired() :bool
    {
        return is_null($this->active_until) ? false //If expiration date is not set - consider discount as not expired
                                            : now()->greaterThan($this->active_until);
    }

    public function isCouponCodeApplied() :bool
    {
        return is_null($this->coupon_code) || session('coupon_code') == $this->coupon_code;
    }
}
