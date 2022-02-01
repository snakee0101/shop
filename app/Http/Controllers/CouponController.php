<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        try {
            Discount::applyCoupon($request->code);

            $data = [
                'message' => 'Coupon has been applied successfully',
                'status' => 'OK'
            ];
        } catch (\Exception) {
            $data = [
                'message' => 'You have applied invalid coupon code',
                'status' => 'Error'
            ];
        } finally {
            return back()->with($data);
        }
    }
}
