<?php

namespace App\Http\Controllers;

use App\Http\Requests\CouponCodeRequest;
use App\Models\Discount;

class CouponController extends Controller
{
    public function store(CouponCodeRequest $request)
    {
        Discount::applyCoupon($request->code);

        return back()->with('success_message', 'Coupon has been applied successfully');
    }
}
