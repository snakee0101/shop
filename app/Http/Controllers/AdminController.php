<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Product;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products()
    {
        return view('admin.products.index', [
            'products' => Product::all()
        ]);
    }

    public function create_product()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    public function list_users()
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    public function categories_index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create_category()
    {
        return view('admin.categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function characteristics_index()
    {
        return view('admin.characteristics.index', [
            'characteristics' => Characteristic::all()
        ]);
    }

    public function create_characteristics()
    {
        return view('admin.characteristics.create', [
            'categories' => Category::all()
        ]);
    }

    public function product_sets_index()
    {
        return view('admin.product_sets.index');
    }

    public function create_product_sets()
    {
        return view('admin.product_sets.create');
    }

    public function reports()
    {
        return view('admin.reports.index', [
            'reports' => Report::all()
        ]);
    }

    public function statistics()
    {
        return view('admin.statistics');
    }

    public function store_product(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'price' => 'numeric',
            'payment_info' => 'required',
            'guarantee_info' => 'required',
            'category_id' => 'exists:categories,id',
            'in_stock' => "in:" . Product::STATUS_IN_STOCK . ',' . Product::STATUS_ENDS . ',' . Product::STATUS_OUT_OF_STOCK
        ]);

        $product = Product::create(
            $request->only('name', 'description', 'price', 'payment_info', 'guarantee_info', 'in_stock') +
                ['category_id' => $request->category_id]
        );

        if($request->discount_applied === 'on')
        {
            $data = [
                'discount_classname' => $request->discount_classname,
                'value' => $request->discount_value,
                'active_since' => $request->discount_active_since,
                'active_until' => $request->discount_active_until,
                'coupon_code' => $request->coupon_code
            ];

            if($request->discount_active_until && !$request->discount_active_since)
                $data['active_since'] = date('Y-m-d');

            $product->discount()->create($data);
        }

        session()->flash('message', 'Product was successfully created');
        return back();
    }
}
