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

            $data = ['couponMessage' => 'Coupon has been applied successfully'];
        } catch(\Exception) {
            $data = ['couponError' => 'You have applied invalid coupon code'];
        } finally {
            return redirect()->back()->with($data);
        }
    }
}
