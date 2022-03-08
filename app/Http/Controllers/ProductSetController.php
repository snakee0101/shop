<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductSetController extends Controller
{
    public function index()
    {
        return view('admin.product_sets.index', [
            'product_sets' => ProductSet::all()
        ]);
    }

    public function create()
    {
        return view('admin.product_sets.create', [
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product-1' => 'required|exists:products,id',
            'product-2' => 'required|exists:products,id',
        ]);

        //Create product set
        $product_set = ProductSet::create();

        $product_set->products()
                    ->attach([ $request['product-1'], $request['product-2'] ]);

        //Apply discount
        if ($request->discount_applied === 'on') {
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

            $product_set->discount()->create($data);
        }

        session()->flash('message', 'Product Set has been successfully created');

        return back();
    }

    public function show(ProductSet $productSet)
    {
        //
    }

    public function edit(ProductSet $productSet)
    {
        //
    }

    public function update(Request $request, ProductSet $productSet)
    {
        //
    }

    public function destroy(ProductSet $productSet)
    {
        //
    }
}
