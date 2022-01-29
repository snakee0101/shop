<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('catalog', [
            'categories' => Category::topLevelCategories()->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Category::create( $request->only( ['name', 'parent_id'] ) + [
            'image_url' => 'ABCD'
        ] );
    }

    public function show(Category $category)
    {
        if($category->hasSubCategories()) {//if category has subcategories - show their list
            return view('catalog', [
                'categories' => $category->subCategories()->get(),
                'is_subcategories_page' => true
            ]);
        } else {//if not - go to the shop
            return view('shop', [
                'category' => $category,
                'products' => $category->products()->paginate()
            ]);
        }
    }


    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
