<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        dd( request('parent_id') );

        $path = $request->file('image')
                        ->store('/public/images/');

        Category::create( $request->only( ['name', 'parent_id'] ) + [
            'image_url' => Storage::url($path)
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
