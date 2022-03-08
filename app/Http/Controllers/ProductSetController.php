<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSet;
use Illuminate\Http\Request;

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
        //
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
