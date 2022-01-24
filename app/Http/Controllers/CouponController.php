<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        try {
            Discount::applyCoupon( $request->code );

            return redirect()->back()
                      ->withInput(['couponMessage' => 'Coupon has been applied successfully']);
        } catch(\Exception) {
            return redirect()->back()
                      ->withInput(['couponError' => 'You have applied invalid coupon code']);
        }
    }
}
