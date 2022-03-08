<?php

namespace App\Http\Controllers;

use App\Models\Discount;
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
        if ($request->discount_applied === 'on')
            Discount::attachTo($product_set, $request);

        session()->flash('message', 'Product Set has been successfully created');

        return back();
    }

    public function show(ProductSet $productSet)
    {
        //
    }

    public function edit(ProductSet $productSet)
    {
        return view('admin.product_sets.edit', [
            'product_set' => $productSet,
            'products' => Product::all()
        ]);
    }

    public function update(Request $request, ProductSet $productSet)
    {
        $request->validate([
            'product-1' => 'required|exists:products,id',
            'product-2' => 'required|exists:products,id',
        ]);

        //Update products
        $productSet->products()
                   ->sync([ $request['product-1'], $request['product-2'] ]);

        //Apply discount
        $productSet->discount()->delete();

        if ($request->discount_applied === 'on')
            Discount::attachTo($productSet, $request);

        return back();
    }

    public function destroy(ProductSet $productSet)
    {
        //
    }
}
